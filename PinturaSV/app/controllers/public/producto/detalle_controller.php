<?php
require_once("../../app/models/producto.class.php");
	try{
		if(isset($_GET['id'])){
			$producto = new Producto;
			if($producto->setId_producto($_GET['id'])){
				if($producto->readProducto2()){
					require_once("../../app/view/public/categorias/detalle_view.php");
				}else{
					throw new Exception("Producto inexistente");
				}
			}else{
				throw new Exception("Producto incorrecto");
			}
		}else{
			throw new Exception("Seleccione producto");
		}
	}catch(Exception $error){
		Page::showMessage(3, $error->getMessage(), "index.php");
	}
?>