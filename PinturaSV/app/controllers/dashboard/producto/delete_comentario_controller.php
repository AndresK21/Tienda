<?php
require_once("../../app/models/valoraciones.class.php");//Llama el modelo de prodcutos
try{
	if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){//Llama el id de producto
		$valoracion = new Valoraciones;
		if($valoracion->setId_valoracion($_GET['id'])){ //Estableve el id en la variable para usarla despues
			if($valoracion->readValoracion()){ //Obtiene los comentarios disponibles por producto
				if(isset($_POST['eliminar'])){
					if($valoracion->deleteValoracion()){ //Elimina el comentario
						Page::showMessage(1, "Comentario eliminado", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Valoracion inexistente");
			}	
		}else{
			throw new Exception("Valoracion incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione un comentario", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/view/dashboard/producto/delete_comentario_view.php");
?>