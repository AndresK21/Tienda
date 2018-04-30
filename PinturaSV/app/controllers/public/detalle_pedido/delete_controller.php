<?php
require_once("../../app/models/detalle_pedido.class.php");//Llama el modelo de prodcutos
try{
	if(isset($_GET['id'])){//Llama el id de producto
		$producto = new Detalle;
		if($producto->setId_detalle($_GET['id'])){ //Estableve el id en la variable para usarla despues
			if($producto->readDetalle()){
				if(isset($_POST['eliminar'])){
					if($producto->deleteDetalle()){ //Elimina el producto
						Page::showMessage(1, "elemento eliminado", "index.php");
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
require_once("../../app/view/public/detalle/delete_view.php");
?>