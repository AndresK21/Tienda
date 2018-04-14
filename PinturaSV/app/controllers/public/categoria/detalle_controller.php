<?php
require_once("../../../models/categoria.class.php");
try{
	if(isset($_GET['id'])){
		$categoria = new Producto;
		if($categoria->setId_categoria($_GET['id_categoria'])){
			if($categoria->readCategoria()){
				require_once("../app/views/public/producto/detalle_view.php");
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