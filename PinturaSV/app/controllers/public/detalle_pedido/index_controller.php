<?php
require_once("../../app/models/detalle_pedido.class.php");
require_once("../../app/models/cliente.class.php");
try{
    $detalle = new Detalle;
    if($detalle->setId_cliente($_SESSION['id_cliente'])){
        if($detalle->readCliente()){
            if($detalle){
                $data = $detalle->getVentas();
                $data2 = $detalle->getTotal();
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Cliente inexistente");
        }
    }else {
        throw new Exception("Cliente incorrecto");
    }
    if(isset($_SESSION['id_pedido'])){
        $producto = new Detalle;
        if($producto->setId_pedido($_SESSION['id_pedido'])){
            if($producto->readDetalle2()){
                if(isset($_POST['comprar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setEstado("1")){
						if($producto->updateDetalle2()){
							Page::showMessage(1, "Compra realizada", "../../app/view/public/detalle/reporte.php?id=$_SESSION[id_cliente]&apellido=$_SESSION[apellidos]&nombre=$_SESSION[nombres]");
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

if($data){
    require_once("../../app/view/public/detalle/carrito_view.php");
}else{
    Page::showMessage(3, "No hay compras disponibles", "../categorias/categorias.php");
}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../index/index.php");
}
?>