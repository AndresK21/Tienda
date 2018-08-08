<?php
require_once("../../app/models/empleado.class.php");
try{
	if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){ //Obtiene el id del empleado
		if($_GET['id'] != $_SESSION['id_empleado_d']){ //Verifica que no se pueda eliminar a si mismo
			$empleado = new Empleado;
			if($empleado->setId_empleado($_GET['id'])){//Establece la variable para usarla despues
				if($empleado->readEmpleado()){
					if(isset($_POST['eliminar'])){
						if($empleado->deleteEmpleado()){ //Elimina el empleado
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
require_once("../../app/view/dashboard/empleado/delete_view.php");
?>