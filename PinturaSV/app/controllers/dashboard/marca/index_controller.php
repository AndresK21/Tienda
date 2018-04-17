<?php
require_once("../../app/models/marca.class.php");
try{
	$marca = new Marca;
	if(isset($_POST['buscar_marca'])){
		$_POST = $marca->validateForm($_POST);
		$data_marca = $marca->searchMarca($_POST['busqueda_marca']);
		if($data_marca){
			$rows = count($data_marca);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data_marca = $marca->getMarcas();
		}
	}else{
		$data_marca = $marca->getMarcas();
	}
	if($data_marca){
		require_once("../../app/view/dashboard/producto/index_view.php");
	}else{
		Page::showMessage(3, "No hay marcas disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>