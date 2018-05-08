<?php
require_once("../../app/models/categoria.class.php"); //Llama el modelo Categoria
try{
	$categoria = new Categoria;
	$categorias = $categoria->getCategorias(); // Obtiene las categorias
	if($categorias){
		require_once("../../app/view/public/categorias/categorias_view.php"); //Muestra la vista de las categorias
	}else{
		Page::showMessage(3, "No hay categorías disponibles", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>