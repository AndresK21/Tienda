<?php
require_once("../../../app/models/categoria.class.php");
try{
    if(isset($_GET['id'])){
        $categoria = new Categoria;
        if($categoria->setId_categoria($_GET['id_categoria'])){
            if($categoria->readCategoria()){
                if(isset($_POST['actualizar'])){
                    $_POST = $categoria->validateForm($_POST);
                    if($categoria->setCategoria($_POST['categoria'])){
                            if($categoria->updateCategoria()){
                                Page::showMessage(1, "Categoría modificada", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }                   
                    }else{
                        throw new Exception("Categoria incorrecto");
                    }                    
                }
            }else{
                Page::showMessage(2, "Categoría inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Categoría incorrecta", "index.php");
        }        
    }else{
        Page::showMessage(3, "Seleccione categoría", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/categoria/update_view.php");
?>