<?php
require_once("../../app/models/marca.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        $marca = new Marca;
        if($marca->setId_marca($_GET['id'])){ //Establece el id en una varible para usarla despues
            if($marca->readMarca()){
                if(isset($_POST['actualizar_marca'])){
                    $_POST = $marca->validateForm($_POST);
                    if($marca->setMarca($_POST['marca'])){
                            if($marca->updateMarca()){ //Modifica la marca
                                Page::showMessage(1, "Marca modificada", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }                   
                    }else{
                        throw new Exception("Marca incorrecta");
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
require_once("../../app/view/dashboard/marca/update_view.php");
?>