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
								$_SESSION['id_empleado'] = $object->getId_empleado(); //Obtiene el id_empleado para usarlo luego en la pagina template
								$_SESSION['nombre_usuario'] = $object->getUsuario(); //Obtiene el usuario para usarlo luego en la pagina template
								$_SESSION['nombre_completo'] = $object->getNombre(); //Obtiene el Nombre completo para usarlo luego en la pagina template
								$_SESSION['id_permiso'] = $object->getId_permiso(); //Obtiene el id_permiso para usarlo luego en la pagina template
								Page::showMessage(1, "Autenticación correcta", "index.php");
							}else{
								throw new Exception("Clave inexistente");
							}
						}else{
							throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
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