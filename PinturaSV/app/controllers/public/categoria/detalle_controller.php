<?php
require_once("../../../models/categoria.class.php"); // Llama el modelo de la categoria
try{
	if(isset($_GET['id'])){ // Obtiene el id de las categorias
		$categoria = new Producto; 
		if($categoria->setId_categoria($_GET['id_categoria'])){  // Obtiene el id de la categoria 
			if($categoria->readCategoria()){ // Carga la categoria 
				require_once("../app/views/public/producto/detalle_view.php"); // Muestra la vista de las categorias
			}else{
				throw new Exception("Categoria inexistente");
			}
		}else{
			throw new Exception("Categoria incorrecto");
		}
	}else{
		throw new Exception("Seleccione categoria");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>