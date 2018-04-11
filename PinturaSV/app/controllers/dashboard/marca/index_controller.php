<?php
require_once("../../../app/models/marca.class.php");
try{
	$marca = new Marca;
	if(isset($_POST['buscar'])){
		$_POST = $marca->validateForm($_POST);
		$data = $marca->searchMarca($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $marca->getMarcas();
		}
	}else{
		$data = $marca->getMarcas();
	}
	if($data){
		require_once("../../app/views/dashboard/marca/index_view.php");
	}else{
		Page::showMessage(3, "No hay marcas disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>