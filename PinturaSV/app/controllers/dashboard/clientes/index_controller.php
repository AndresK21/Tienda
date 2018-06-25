<?php
require_once("../../app/models/cliente.class.php");
try{

	//cantidad de registros por página
	$por_pagina=10;
	if (isset($_GET["pagina"])) {
	$pagina = $_GET["pagina"];
	}
	else {
	$pagina=1;
	}
	// la pagina inicia en 0 y se multiplica $por_pagina
	$empieza = ($pagina-1) * $por_pagina;

	//Controlador de clientes
	$cliente = new Cliente;
	if(isset($_POST['buscar_cliente'])){
		$_POST = $cliente->validateForm($_POST);
		$data = $cliente->searchCliente($_POST['busqueda_cliente']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $cliente->getClientes2($empieza, $por_pagina);
		}
	}else{
		$data = $cliente->getClientes2($empieza, $por_pagina);
	}
	if($data){
		require_once("../../app/view/dashboard/clientes/index_view.php");
	}else{
		Page::showMessage(4, "No hay clientes disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>