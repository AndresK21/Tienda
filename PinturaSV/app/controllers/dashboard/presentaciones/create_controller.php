<?php
require_once("../../../models/presentaciones.class.php");
try{
    $presentaciones = new Tipo_p;
    if(isset($_POST['crear'])){
        $_POST = $presentaciones->validateForm($_POST);
        if($presentaciones->setPresentacion($_POST['presentacion'])){
            if($presentaciones->setId_tipo($_POST['id_tipo'])){
                if($presentaciones->createPresentacion()){
                    Page::showMessage(1, "Presentacion creada", "index.php");
                }else{
                throw new Exception("No se pudo cerrar la presentacion");        
                }
            }else{
                throw new Exception("Tipo de producto incorrecto");
            } 
        }else{
            throw new Exception("Presentacion incorrecta");
        }
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/create_view.php");
?>