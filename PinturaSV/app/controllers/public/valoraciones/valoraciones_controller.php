<?php
require_once("../../../models/valoraciones.class.php");
try{
	$valoraciones = new Valoraciones;
	$valoracioness = $valoraciones->getValoraciones();
	if($valoracioness){
		require_once("../app/views/public/producto/categorias_view.php");
	}else{
		Page::showMessage(3, "No hay valoraciones disponibles", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>