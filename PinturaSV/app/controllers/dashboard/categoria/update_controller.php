<?php
require_once("../../app/models/categoria.class.php");
try{
    if(isset($_GET['id'])){
        $categoria = new Categoria;
        if($categoria->setId($_GET['id'])){
            if($categoria->readCategoria()){
                if(isset($_POST['actualizar'])){
                    $_POST = $categoria->validateForm($_POST);
                    if($categoria->setNombre($_POST['nombre'])){
                        if($categoria->setDescripcion($_POST['descripcion'])){
                            if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                if(!$categoria->setImagen($_FILES['archivo'])){
                                    throw new Exception($producto->getImageError());
                                }
                            }
                            if($categoria->updateCategoria()){
                                Page::showMessage(1, "Categoría modificada", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            throw new Exception("Descripción incorrecta");
                        }                        
                    }else{
                        throw new Exception("Nombre incorrecto");
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