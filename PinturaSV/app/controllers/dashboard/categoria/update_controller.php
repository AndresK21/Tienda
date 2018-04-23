<?php
require_once("../../app/models/categoria.class.php");
try{
    if(isset($_GET['id'])){ //Llama el id de la categoria
        $categoria = new Categoria;
        if($categoria->setId_categoria($_GET['id'])){ //Establece el id en una pvariable para usarla despues
            if($categoria->readCategoria()){
                if(isset($_POST['actualizar'])){
                    $_POST = $categoria->validateForm($_POST);
                    if($categoria->setCategoria($_POST['categoria'])){
                        if($categoria->setId_marca($_POST['marca'])){
                            if($categoria->updateCategoria()){ //Edita la categoria
                                Page::showMessage(1, "Categoría modificada", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            } 
                        }else{
                            throw new Exception("Marca incorrecta");
                        }
                                              
                    }else{
                        throw new Exception("Categoria incorrecta");
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
require_once("../../app/view/dashboard/categoria/update_view.php");
?>