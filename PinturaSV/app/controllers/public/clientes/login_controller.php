<?php
require_once("../../app/models/cliente.class.php");
try{
	$cliente = new Cliente;
	if($cliente->getClientes()){
		if(isset($_POST['iniciar'])){
			$_POST = $cliente->validateForm($_POST);
			if($cliente->setNombre_usuario($_POST['nombre_usuario'])){
				if($cliente->checkUsuario_cliente()){
						if($cliente->setContrasena($_POST['contrasena'])){
							if($cliente->checkPassword_cliente()){
								$_SESSION['id_cliente'] = $cliente->getId_cliente(); //Obtiene el id_empleado para usarlo luego en la pagina template
								$_SESSION['nombre_usuario'] = $cliente->getNombre_usuario(); //Obtiene el usuario para usarlo luego en la pagina template
								$_SESSION['id_pedido'] = $cliente->getId_pedido();
								$_SESSION['nombres'] = $cliente->getNombres();
								$_SESSION['apellidos'] = $cliente->getApellidos();
								Page::showMessage(1, "Autenticación correcta", "../index/index.php");
							}else{
								throw new Exception("Clave inexistente");
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