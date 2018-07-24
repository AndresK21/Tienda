<?php
/*
    Este archivo contiene una clase para realizar el manejo de la base de datos del sistema.
*/
class Database{
/*
    Estos son los atributos de la clase para almacenar los datos necesarios para realizar las acciones respectivas.
*/
    private static $connection = null;
    private static $statement = null;
    private static $id = null;
    private static $error = null;

/*
    Este método tiene por objetivo establecer la conexión con la base de datos utilizando las credenciales respectivas.
    No recibe parámetros y no devuelve ningún valor, capturando las excepciones del servidor de bases de datos.
*/
    private function connect(){
        $server = "localhost";
        $database = "pintura_prueba";
        $username = "andres";
        $password = "pinturasv";
        try{
            @self::$connection = new PDO("mysql:host=$server; dbname=$database; charset=utf8", $username, $password);
        }catch(PDOException $exception){
            throw new Exception($exception->getCode());
        }
    }

/*
    Este método tiene por objetivo anular la conexión con la base de datos y capturar la información de las excepciones en las sentencias SQL.
    No recibe parámetros y no devuelve ningún valor.
*/
    private function desconnect(){
        self::$error = self::$statement->errorInfo();
        self::$connection = null;
    }

/*
    Este método tiene por objetivo ejecutar las siguientes sentencias SQL: insert, update y delete.
    Recibe como parámetros la sentencia SQL de tipo string y los valores de los campos respectivos en un arreglo.
    Se utiliza además, para obtener el valor de la llave primaria del último registro insertado.
    Devuelve como resultado TRUE en caso de éxito y FALSE en caso contrario.
*/
    public static function executeRow($query, $values){
        self::connect();
        self::$statement = self::$connection->prepare($query);
        $state = self::$statement->execute($values);
        self::$id = self::$connection->lastInsertId();
        self::desconnect();
        return $state;
    }

/*
    Este método tiene como propósito obtener el resultado del primer registro de una consulta tipo SELECT.
    Recibe como parámetros la sentencia SQL de tipo string y los valores de los campos respectivos en un arreglo.
    Devuelve como resultado un arreglo del registro númerico y asociativo en caso de éxito, NULL en caso contrario.
*/
    public static function getRow($query, $values){
        self::connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        self::desconnect();
        return self::$statement->fetch();
    }

/*
    Este método tiene como propósito obtener todos los registros de una consulta tipo SELECT.
    Recibe como parámetros la sentencia SQL de tipo string y los valores de los campos respectivos en un arreglo.
    Devuelve como resultado un arreglo con los registros númericos y asociativos en caso de éxito, NULL en caso contrario.
*/
    public static function getRows($query, $values){
        self::connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        self::desconnect();
        return self::$statement->fetchAll();
    }

/*
    Este método tiene por objetivo devolver el valor de la llave primaria del último registro insertado.
    No recibe parámetros.
*/
    public static function getLastRowId(){
        return self::$id;
    }
    
/*
    Este método tiene por objetivo devolver el código especifico de las excepciones, caso contrario devulve FALSE.
    No recibe parámetros.
*/
    public static function getException(){
        if(self::$error[0] == "00000"){
            return false;
        }else{
            print_r(self::$error);
            return self::$error[1];
        }
    }
}
?>