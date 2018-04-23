<?php
require_once("../../app/models/empleado.class.php");
try{
	$object = new Empleado;
	if($object->getEmpleados()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setUsuario($_POST['nombre_usuario'])){
				if($object->checkUsuarios()){
					if($object->checkPermisos()){
						if($object->setContrasena($_POST['contrasena'])){
							if($object->checkContrasena()){
								$_SESSION['id_empleado'] = $object->getId_empleado();
								$_SESSION['nombre_usuario'] = $object->getUsuario();
								$_SESSION['id_permiso'] = $object->getId_permiso();
								Page::showMessage(1, "Autenticación correcta", "index.php");
							}else{
								throw new Exception("Clave inexistente");
							}
						}else{
							throw new Exception("Clave menor a 6 caracteres");
						}
					}else{
						throw new Exception("Permiso incorrecto");
					}
				}else{
					throw new Exception("Nombre de usuario inexistente");
				}
			}else{
				throw new Exception("Nombre de usuario incorrecto");
			}
		}
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "register.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/empleado/login_view.php");
?>