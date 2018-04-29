<?php
require_once("../../app/models/cliente.class.php");
try{
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
			$data = $cliente->getClientes();
		}
	}else{
		$data = $cliente->getClientes();
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