<?php
require_once("../../app/models/producto.class.php");
require_once("../../app/models/marca.class.php");
try{
	$producto = new Producto;
	if(isset($_POST['buscar_producto'])){
		$_POST = $producto->validateForm($_POST);
		$productos = $producto->searchProducto($_POST['busqueda_producto']);
		if($productos){
			$rows = count($productos);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$productos = $producto->getProductos();
		}
	}else{
		$productos = $producto->getProductos();
	}

	$marca = new Marca;
	if(isset($_POST['buscar_marca'])){
		$_POST = $marca->validateForm($_POST);
		$marcas = $marca->searchMarca($_POST['busqueda_marca']);
		if($marcas){
			$rows = count($marcas);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$marcas = $marca->getMarcas();
		}
	}else{
		$marcas = $marca->getMarcas();
	}


	if($productos){
		require_once("../../app/view/dashboard/producto/index_view.php");
	}else{
		Page::showMessage(4, "No hay productos disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>