<?php
require_once("../../app/models/cliente.class.php");
try{
    if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){ //Obtiene el id del cliente para utilizarlo despues/ evalua si el id ha sido obtenido
        $cliente = new Cliente; //Referencia al modelo de "Clientes"
        if($cliente->setId_cliente($_GET['id'])){ //Establece el id en una variable, que sera necearia en la funcion
            if($cliente->readCliente()){
                if($cliente){ //Evalua si la funcion devuelve "true"
                    $data = $cliente->getVentas(); //Obtiene las compras realizadas por el cliente
                }else{
                    throw new Exception(Database::getException());
                }
            }else{
                throw new Exception("Cliente inexistente");
            }
        }else {
            throw new Exception("Cliente incorrecto");
        }
    }else{
        Page::showMessage(3, "Seleccione un cliente", "index.php");
    }
    if($data){
        require_once("../../app/view/dashboard/clientes/ventas_view.php");
    }else{
        Page::showMessage(3, "No hay ventas disponibles", "index.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>