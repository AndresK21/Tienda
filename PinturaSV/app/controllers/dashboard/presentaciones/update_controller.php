<?php
require_once("../../../models/presentaciones.class.php");
try{
    if(isset($_GET['id'])){
        $presentacion = new Presentaciones;
        if($presentacion->setId_presentacion($_GET['id_presentacion'])){
            if($presentacion->readTipo_p()){
                if(isset($_POST['actualizar'])){
                    $_POST = $presentacion->validateForm($_POST);
                    if($presentacion->setPresentacion($_POST['presentacion'])){
                        if($presentacion->setPresentacion($_POST['id_tipo'])){
                            if($presentacion->updatePresentacion()){
                                Page::showMessage(1, "Presentacion modificado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            throw new Exception("Tipo de producto incorrecto");
                        }    
                        
                    }else{
                        throw new Exception("Presentacion incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Presentacion inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Presentacion incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione una presentacion", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/update_view.php");
?>