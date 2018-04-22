<?php
require_once("../../app/models/presentaciones.class.php");
try{
	if(isset($_GET['id'])){
		$presentaciones = new Presentaciones;
		if($presentaciones->setId_Presentacion($_GET['id'])){
			if($presentaciones->readPresentacion()){
				if(isset($_POST['eliminar'])){
					if($presentaciones->deletePresentacion()){
						Page::showMessage(1, "Presentacion eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Presentacion inexistente");
			}	
		}else{
			throw new Exception("Presentacion incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione una presentacion", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/view/dashboard/presentaciones/delete_view.php");
?>