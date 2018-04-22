<?php
require_once("../../app/models/marca.class.php");
try{
    $marca = new Marca;
    if(isset($_POST['crear_marca'])){
        $_POST = $marca->validateForm($_POST);
        if($marca->setMarca($_POST['marca'])){
            if($marca->createMarca()){
                Page::showMessage(1, "Marca creada", "index.php");
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Marca incorrecta");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/marca/create_view.php");
?>