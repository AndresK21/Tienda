<?php
require_once("../../app/models/empleado.class.php");
try{
	$object = new Empleado;
	if($object->getEmpleados()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setUsuario($_POST['nombre_usuario'])){
				$_SESSION['usuario'] = $object->getUsuario();
				if($object->checkUsuarios()){
					if($object->checkPermisos()){
						if($object->setContrasena2($_POST['contrasena'])){
							if($object->checkContrasena()){
								if($object->getEstado() == 1){
									$_SESSION['id_empleado'] = $object->getId_empleado(); //Obtiene el id_empleado para usarlo luego en la pagina template
									$_SESSION['nombre_usuario'] = $object->getUsuario(); //Obtiene el usuario para usarlo luego en la pagina template
									$_SESSION['nombre_completo'] = $object->getNombre(); //Obtiene el Nombre completo para usarlo luego en la pagina template
									$_SESSION['id_permiso'] = $object->getId_permiso(); //Obtiene el id_permiso para usarlo luego en la pagina template
									$_SESSION['ultimoAcceso'] = time(); //Obtiene el tiempo de cuando se logea para posteriormente usarlo para cerrar la sesion por inactividad
									Page::showMessage(1, "Autenticación correcta", "index.php");
								}else{
									$valor = date('Y-m-d h:i:s');
									$valor2 = new DateTime($valor);
									$valor3 = new DateTime($object->getFecha2());
									$bloqueo = $valor3->diff($valor2);
									if($bloqueo->d >= 1){
										$object->updateEstado2($_SESSION['usuario']); //Regresa el estado del usuario a disponible para iniciar sesion
										$_SESSION['id_empleado'] = $object->getId_empleado(); //Obtiene el id_empleado para usarlo luego en la pagina template
										$_SESSION['nombre_usuario'] = $object->getUsuario(); //Obtiene el usuario para usarlo luego en la pagina template
										$_SESSION['nombre_completo'] = $object->getNombre(); //Obtiene el Nombre completo para usarlo luego en la pagina template
										$_SESSION['id_permiso'] = $object->getId_permiso(); //Obtiene el id_permiso para usarlo luego en la pagina template
										Page::showMessage(1, "Autenticación correcta", "index.php");
									}else{
										throw new Exception("Su cuenta ha sido bloqueada por exceder los intentos de inicio de sesión");
									}
								}
							}else{
								$_SESSION['cont']++;
								Page::showMessage(2, "Clave incorrecta", "login.php");
								if($_SESSION['cont'] >= 3){
									$object->updateEstado($_SESSION['usuario']);
									Page::showMessage(3, "Ha superado el limite de intentos de inicio de sesión", "../cuenta/login.php");
								}
							}
						}else{
							throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
						}
					}else{
						throw new Exception("Permiso incorrecto");
					}
				}else{
					throw new Exception("Usuario incorrecto");
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