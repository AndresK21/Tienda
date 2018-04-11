<?php
require_once("../../../models/presentaciones.class.php");
try{
	$presentaciones = new Presentaciones;
	if(isset($_POST['buscar'])){
		$_POST = $presentaciones->validateForm($_POST);
		$data = $presentaciones->searchPresentacion($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $presentaciones->getPresentaciones();
		}
	}else{
		$data = $presentaciones->getPresentaciones();
	}
	if($data){
		require_once("../../app/views/dashboard/producto/index_view.php");
	}else{
		Page::showMessage(4, "No hay presentaciones disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../presentacion/");
}
?>