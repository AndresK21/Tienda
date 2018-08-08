<?php
require_once("../../app/models/empleado.class.php"); //Llama el modelo del empleado
try{
	if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){ //Llama al id
		if($_GET['id'] != $_SESSION['id_empleado_d']){ //No deja eliminarse a si mismo
			$empleado = new Empleado;
			if($empleado->setId_empleado($_GET['id'])){ //Establece la variable id_empleado para usarla despues
				if($empleado->readEmpleado()){
					if(isset($_POST['eliminar'])){
						if($empleado->deleteEmpleado()){ //Elimina al empleado
							Page::showMessage(1, "Usuario eliminado", "index.php");
						}else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Usuario inexistente");
				}
			}else{
				throw new Exception("Usuario incorrecto");
			}
		}else{
			throw new Exception("No se puede eliminar a sí mismo");
		}
	}else{
		Page::showMessage(3, "Seleccione usuario", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/view/dashboard/usuarios/delete_view.php");
?>