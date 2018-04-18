<?php
require_once("../../app/models/producto.class.php");
try{
    if(isset($_GET['id'])){
        $producto = new Producto;
        if($producto->setId_producto($_GET['id'])){
            if($producto->readProducto()){
                if(isset($_POST['actualizar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setNombre($_POST['nombre'])){
                        if($producto->setCantidad($_POST['cantidad'])){
                            if($producto->setPrecio($_POST['precio'])){
                                if($producto->setColor($_POST['color'])){
                                    if($producto->setId_categoria($_POST['categoria'])){
                                        if($producto->setId_estado(isset($_POST['estado'])?1:2)){
                                            if($producto->setId_presentacion($_POST['presentacion'])){
                                                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                                    if(!$producto->setImagen($_FILES['archivo'])){
                                                        if($producto->updateProducto()){
                                                            Page::showMessage(1, "Producto modificado", "index.php");
                                                        }else{
                                                            throw new Exception(Database::getException());
                                                        }
                                                    }else{
                                                        throw new Exception($producto->getImageError());
                                                    }
                                                }else{
                                                    throw new Exception("Seleccione una imagen");
                                                }
                                                
                                            }else{
                                                throw new Exception("Presentacion incorrecta");
                                            }
                                        }else{
                                            throw new Exception("Estado incorrecto");
                                        }  
                                    }else{
                                        throw new Exception("Categoria incorrecto");
                                    }
                                }else{
                                    throw new Exception("Color incorrecto");
                                }
                            }else{
                                throw new Exception("Precio incorrecta");
                            }
                        }else{
                            throw new Exception("Cantidad incorrecto");
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
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
require_once("../../app/view/dashboard/producto/update_producto_view.php");
?>