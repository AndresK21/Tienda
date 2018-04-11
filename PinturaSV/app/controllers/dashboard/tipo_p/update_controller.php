<?php
require_once("../../../app/models/tipo_p.class.php");
try{
    if(isset($_GET['id'])){
        $tipo_p = new Tipo_p;
        if($tipo_p->setId_tipo($_GET['id_tipo'])){
            if($tipo_p->readTipo_p()){
                if(isset($_POST['actualizar'])){
                    $_POST = $tipo_p->validateForm($_POST);
                    if($tipo_p->setTipo_p($_POST['tipo_p'])){
                        if($tipo_p->updateTipo_p()){
                            Page::showMessage(1, "Producto modificado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                        
                    }else{
                        throw new Exception("Tipo de producto incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Producto inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Producto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione producto", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/update_view.php");
?>