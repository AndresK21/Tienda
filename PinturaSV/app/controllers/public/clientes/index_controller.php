<?php
require_once("../../../models/cliente.class.php");
try{
	$usuario_cliente = new Cliente;
	if(isset($_POST['buscar'])){
		$_POST = $usuario_cliente->validateForm($_POST);
		$data = $usuario_cliente->searchCliente($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $usuario_cliente->getClientes();
		}
	}else{
		$data = $usuario_cliente->getClientes();
	}
	if($data){
		require_once("../../app/views/dashboard/usuario/index_view.php");
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>