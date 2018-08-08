<?php
require_once("../../app/models/categoria.class.php");
try{
	if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){ //Llama el id de la categoria
		$categoria = new Categoria;
		if($categoria->setId_categoria($_GET['id'])){ //Establece el id de la categoria en una variable para usarla despues
			if($categoria->readCategoria()){
				if(isset($_POST['eliminar'])){
					if($categoria->deleteCategoria()){//Elimina la categoria
							Page::showMessage(1, "Categoría eliminada", "index.php");
					}
					else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Categoría inexistente");
			}
		}else{
			throw new Exception("Categoría incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione categoría", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/view/dashboard/categoria/delete_view.php");
?>