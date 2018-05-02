<?php
require_once("../../app/models/producto.class.php");
try{
	$producto = new Producto;
	$productos = $producto->getProductosTop();
	if($productos){
		require_once("../../app/view/public/categorias/index_view.php");
	}else{
		Page::showMessage(3, "No hay productos disponibles", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>