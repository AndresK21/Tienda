<?php
require_once("../../../models/pedido.class.php");
try{
	if(isset($_GET['id'])){
		$pedido = new Pedido;
		if($pedido->setId_pedido($_GET['id_pedido'])){
			if($pedido->setEstado($_GET['estado'])){
				if($pedido->setFecha($_GET['fecha'])){
					if($pedido->setId_cliente($_GET['id_cliente'])){
						if($pedido->setId_empleado($_GET['id_empleado'])){
			if($pedido->readPedido()){
				require_once("../app/views/public/producto/detalle_view.php");
			}else{
				throw new Exception("Detalle inexistente");
			}
		}else{
			throw new Exception("Empleado incorrecto");
		}
		}else{
			throw new Exception("Cliente incorrecto");
		}
		}else{
			throw new Exception("Fecha incorrecto");
		}
		}else{
			throw new Exception("Estado del Pedido incorrecto");
		}
	}else{
		throw new Exception("Pedido incorrecto");
	}
	}else{
		throw new Exception("Seleccione un Pedido");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>