<?php
require_once("../../app/models/detalle_pedido.class.php");
try{
    if(isset($_POST['pedido'])){
        $producto = new Detalle;
        if($producto->setId_pedido($_POST['pedido'])){
            if($producto->readDetalle2()){
                if(isset($_POST['comprar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setEstado($_POST['1'])){
                        
						if($producto->updateDetalle2()){
							Page::showMessage(1, "Compra realizada", "index.php");
						}else{
							throw new Exception("No se pudo realizar la compra");        
						}
                                                        
                    }else{
                        throw new Exception("Estado incorrecto");
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