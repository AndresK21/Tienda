<?php
require_once("../../../models/tipo_p.class.php");
try{
	if(isset($_GET['id'])){
		$tipo_p = new Tipo_p;
		if($tipo_p->setId_tipo($_GET['id_tipo'])){
			if($tipo_p->readTipo_p()){
				if(isset($_POST['eliminar'])){
					if($tipo_p->deleteTipo_p()){
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Tipo de producto inexistente");
			}	
		}else{
			throw new Exception("Tipo de producto incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione un tipo de producto", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/producto/delete_view.php");
?>