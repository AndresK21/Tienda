<?php
require_once("../../../models/detalle_pedido.class.php");
try{
	if(isset($_GET['id'])){
		$detalle = new Detalle;
		if($detalle->setId_detalle($_GET['id_detalle'])){
			if($detalle->setCantidad($_GET['cantidad'])){
				if($detalle->setId_producto($_GET['id_producto'])){
					if($detalle->setId_pedido($_GET['id_pedido'])){
			if($detalle->readCategoria()){
				require_once("../app/views/public/producto/detalle_view.php");
			}else{
				throw new Exception("Detalle inexistente");
			}
		}else{
			throw new Exception("Pedido incorrecto");
		}
		}else{
			throw new Exception("Producto incorrecto");
		}
		}else{
			throw new Exception("Cantidad del Pedido incorrecto");
		}
	}else{
		throw new Exception("Detalle del Pedido incorrecto");
	}
	}else{
		throw new Exception("Seleccione un Detalle");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>