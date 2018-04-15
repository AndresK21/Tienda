<?php
require_once("../../app/models/producto.class.php");
try{
    $producto = new Producto;
    if(isset($_POST['crear'])){
        $_POST = $producto->validateForm($_POST);
        if($producto->setNombre($_POST['nombre'])){
            if($producto->setCantidad($_POST['cantidad'])){
                if($producto->setPrecio($_POST['precio'])){
                    if($producto->setColor($_POST['color'])){
                        if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                            if($producto->setImagen($_FILES['archivo'])){
                                if($producto->setId_categoria($_POST['id_categoria'])){
                                    if($producto->setId_estado($_Post['id_estado'])){
                                        if($producto->setId_presentacion($_Post['id_presentacion'])){
                                            if($producto->createProducto()){
                                                Page::showMessage(1, "Producto creado", "index.php");
                                            }else{
                                            throw new Exception("No se pudo cerrar el producto");        
                                            }
                                        }else{
                                            throw new Exception("Presentacion incorrecto");
                                        }
                                    }else{
                                        throw new Exception("Estado incorrecto");
                                    }
                                }else{
                                    throw new Exception("Seleccione una categoría");
                                }
                            }else{
                                throw new Exception($producto->getImageError());
                            }
                        }else{
                            throw new Exception("Seleccione una imagen");
                        }
                    }else{
                        throw new Exception("Color incorrecto");
                    }
                }else{
                    throw new Exception("Precio incorrecto");
                }
            }else{
                throw new Exception("Cantidad incorrecta");
            }
        }else{
            throw new Exception("Nombre incorrecta");
        }
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/producto/create_view.php");
?>