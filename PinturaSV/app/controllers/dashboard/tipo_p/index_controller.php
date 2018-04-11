<?php
require_once("../../../models/producto.class.php");
try{
	$tipo_p = new Tipo_p;
	if(isset($_POST['buscar'])){
		$_POST = $tipo_p->validateForm($_POST);
		$data = $tipo_p->searchTipo_p($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $tipo_p->getTipo_p();
		}
	}else{
		$data = $tipo_p->getTipo_p();
	}
	if($data){
		require_once("../../app/views/dashboard/producto/index_view.php");
	}else{
		Page::showMessage(4, "No hay tipos de productos disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../tipo_p/");
}
?>