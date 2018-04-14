<?php
require_once("../../../models/pedido.class.php.class.php");
try{
	$pedido = new Pedido;
	$pedido = $pedido->getPedidos();
	if($pedido){
		require_once("../app/views/public/producto/categorias_view.php");
	}else{
		Page::showMessage(3, "No hay pedidos disponibles", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>