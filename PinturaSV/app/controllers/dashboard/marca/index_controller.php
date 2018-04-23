<?php
require_once("../../app/models/marca.class.php");
try{
	$marca = new Marca;
	if(isset($_POST['buscar_marca'])){//
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
	if($marcas){
		require_once("../../app/view/dashboard/producto/index_view.php");
	}else{
		Page::showMessage(3, "No hay marcas disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>