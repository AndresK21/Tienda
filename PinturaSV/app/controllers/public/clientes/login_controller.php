<?php
require_once("../../app/models/cliente.class.php");
try{
	$ip2 = getenv('REMOTE_ADDR');

	$cliente = new Cliente;
	if($cliente->getClientes()){
		if(isset($_POST['iniciar'])){
			$_POST = $cliente->validateForm($_POST);
			if($cliente->setNombre_usuario($_POST['nombre_usuario'])){
				$_SESSION['usuario_p'] = $cliente->getNombre_usuario();
				if($cliente->checkUsuario_cliente()){
						if($cliente->setContrasena2($_POST['contrasena'])){
							if($cliente->checkContrasena()){
								if($cliente->getEstado() == 1){
								$_SESSION['id_cliente_p'] = $cliente->getId_cliente(); //Obtiene el id_empleado para usarlo luego en la pagina template
								$_SESSION['nombre_usuario_p'] = $cliente->getNombre_usuario(); //Obtiene el usuario para usarlo luego en la pagina template
								$_SESSION['id_pedido_p'] = $cliente->getId_pedido();
								$_SESSION['nombres_p'] = $cliente->getNombres();
								$_SESSION['apellidos_p'] = $cliente->getApellidos();
								$_SESSION['ultimoAcceso_p'] = time(); //Obtiene el tiempo de cuando se logea para posteriormente usarlo para cerrar la sesion por inactividad
								Page::showMessage(1, "Autenticación correcta", "../index/index.php");
							}else{
								$valor = date('Y-m-d h:i:s');
								$valor2 = new DateTime($valor);
								$valor3 = new DateTime($cliente->getFecha2());
								$bloqueo = $valor3->diff($valor2);
								if($bloqueo->d >= 1){
									$cliente->updateEstado2($_SESSION['usuario_p']); //Regresa el estado del usuario a disponible para iniciar sesion
									$_SESSION['id_cliente_p'] = $cliente->getId_cliente(); //Obtiene el id_empleado para usarlo luego en la pagina template
									$_SESSION['nombre_usuario_p'] = $cliente->getUsuario(); //Obtiene el usuario para usarlo luego en la pagina template
									$_SESSION['nombres_p'] = $cliente->getNombre(); //Obtiene el Nombre completo para usarlo luego en la pagina template
									$_SESSION['ultimoAcceso_p'] = time(); //Obtiene el tiempo de cuando se logea para posteriormente usarlo para cerrar la sesion por inactividad
									$_SESSION['cont_p'] = 0;
									Page::showMessage(1, "Autenticación correcta", "index.php");
								}else{
									throw new Exception("Su cuenta ha sido bloqueada por exceder los intentos de inicio de sesión");
								}
							}

							}else{
								$_SESSION['cont_p']++;
								Page::showMessage(2, "Clave incorrecta", "login.php");
								if($_SESSION['cont_p'] >= 3){
									$cliente->updateEstado($_SESSION['usuario_p']);
									Page::showMessage(3, "Ha superado el limite de intentos de inicio de sesión", "../cuenta/login.php");
								}
							}
						}else{
							throw new Exception("Clave menor a 6 caracteres");
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

	$cliente = new Cliente;
	if(isset($_POST['crear'])){
		$_POST = $cliente->validateForm($_POST);
		if($cliente->setNombres($_POST['nombres'])){
			if($cliente->setApellidos($_POST['apellidos'])){
				if($cliente->setEmail($_POST['email'])){
					if($cliente->setNombre_usuario($_POST['nombre_usuarior'])){
						if($_POST['contrasena1'] == $_POST['contrasena2']){ //Verifica que la clave sea igual
						if($cliente->setContrasena($_POST['contrasena1'])){
							if($cliente->createCliente()){
								Page::showMessage(1, "Usuario creado", "../index/index.php");
							}else{
								throw new Exception(Database::getException());
							}
						}else{
							throw new Exception("Contraseña Incorrecta");
						}
					}else{
						throw new Exception("Contraseña Diferentes");
					}                    
					}else{
						throw new Exception("Nombre de Usuario incorrecta");
					}
				}else{
					throw new Exception("Correo incorrecto");
				}
			}else{
				throw new Exception("Apellidos incorrecto");
			}
		}else{
			throw new Exception("Nombres incorrectos");
		}
	}
}

catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/public/cuenta/login_view.php");
?>