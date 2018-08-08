<?php
require_once("../../app/models/producto.class.php");//Llama el modelo de prodcutos
try{
	if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){//Llama el id de producto
		$producto = new Producto;
		if($producto->setId_producto($_GET['id'])){ //Estableve el id en la variable para usarla despues
			if($producto->readProducto()){
				if(isset($_POST['eliminar'])){
					if($producto->deleteProducto()){ //Elimina el producto
						Page::showMessage(1, "Producto eliminado", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Producto inexistente");
			}	
		}else{
			throw new Exception("Producto incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione producto", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/view/dashboard/producto/delete_producto_view.php");
?>