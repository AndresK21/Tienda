<?php
require_once("../../../models/detalle_pedido.class.php");
try{
	$detalle = new Detalle;
	$detalles = $detalle->getDetalles();
	if($detalles){
		require_once("../app/views/public/producto/categorias_view.php");
	}else{
		Page::showMessage(3, "No hay pedidos disponibles", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>