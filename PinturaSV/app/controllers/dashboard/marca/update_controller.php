<?php
require_once("../../../models/marca.class.php");
try{
    if(isset($_GET['id'])){
        $marca = new Marca;
        if($marca->setId_marca($_GET['id_marca'])){
            if($marca->readMarca()){
                if(isset($_POST['actualizar'])){
                    $_POST = $marca->validateForm($_POST);
                    if($marca->setMarca($_POST['marca'])){
                            if($marca->updateMarca()){
                                Page::showMessage(1, "Marca modificada", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }                   
                    }else{
                        throw new Exception("Marca incorrecto");
                    } 
                }
            }else{
                Page::showMessage(2, "Marca inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Marca incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione Marca", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/marca/update_view.php");
?>