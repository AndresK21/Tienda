<?php
require_once("../../app/models/marca.class.php");
try{
	if(isset($_GET['id'])){
		$marca = new Marca;
		if($marca->setId_marca($_GET['id'])){
			if($marca->readMarca()){
				if(isset($_POST['eliminar_marca'])){
					if($marca->deleteMarca()){
							Page::showMessage(1, "Marca eliminada", "index.php");
					}
					else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Marca inexistente");
			}
		}else{
			throw new Exception("Marca incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione una marca", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/view/dashboard/marca/delete_view.php");
?>