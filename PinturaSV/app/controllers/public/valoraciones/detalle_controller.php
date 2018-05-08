<?php
require_once("../../../models/detalle_pedido.class.php"); // Llamar el modelo del pedido
try{
	if(isset($_GET['id'])){ // 
		$valoraciones = new Detalle;
		if($valoraciones->setId_valoracion($_GET['id_valoracion'])){ // Obtengo el id de la valoracion
			if($valoraciones->setEstrellas($_GET['estrellas'])){ // Obtengo el campo estrellas 
				if($valoraciones->setComentario($_GET['comentario'])){ // La lista de comentarios
					if($valoraciones->setId_producto($_GET['id_producto'])){ // Obtengo el id del producto
			if($valoraciones->readCategoria()){
				require_once("../app/views/public/producto/detalle_view.php");
			}else{
				throw new Exception("Valoración inexistente");
			}
		}else{
			throw new Exception("Producto incorrecto");
		}
		}else{
			throw new Exception("Comentario incorrecto");
		}
		}else{
			throw new Exception("Estrellas incorrectas");
		}
	}else{
		throw new Exception("Valoracion incorrecta");
	}
	}else{
		throw new Exception("Seleccione una valoración");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>