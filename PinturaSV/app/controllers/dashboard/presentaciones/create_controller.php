<?php
require_once("../../app/models/presentaciones.class.php");
try{
    $presentaciones = new Presentaciones;
    if(isset($_POST['crear'])){ //El controlador funcionara con el modelo que se llame asi
        $_POST = $presentaciones->validateForm($_POST);
        if($presentaciones->setPresentacion($_POST['presentacion'])){
            if($presentaciones->setId_tipo($_POST['tipo'])){
                if($presentaciones->createPresentacion()){ //Crea una presentacion
                    Page::showMessage(1, "Presentacion creada", "index.php");
                }else{
                    throw new Exception("No se pudo crear la presentacion");        
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
require_once("../../app/view/dashboard/presentaciones/create_view.php");
?>