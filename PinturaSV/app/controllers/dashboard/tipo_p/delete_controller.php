<?php
require_once("../../app/models/tipo_p.class.php"); //Llama el modelo de tipo de producto
try{
	if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){ //Llama el id de del tipo de de producto
		$tipo_p = new Tipo_p;
		if($tipo_p->setId_tipo($_GET['id'])){ //Establece el id en la variable id_tipo para manejarla despues
			if($tipo_p->readTipo_p()){
				if(isset($_POST['eliminar'])){
					if($tipo_p->deleteTipo_p()){ //Elimina el tipo de ususario
						Page::showMessage(1, "Tipo de producto eliminado", "index.php");
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
require_once("../../app/view/dashboard/tipo_p/delete_view.php");
?>