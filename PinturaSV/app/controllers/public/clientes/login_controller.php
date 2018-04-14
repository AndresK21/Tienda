<?php
require_once("../../../models/cliente.class.php");
try{
	$object = new Cliente;
	if($object->getClientes()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setNombre_usuario($_POST['nombre_usuario'])){
				if($object->checkUsuario_cliente()){
					if($object->setContrasena($_POST['contrasena'])){
						if($object->checkContrasena()){
							$_SESSION['id_cliente'] = $object->getId_cliente();
							$_SESSION['nombre_usuario'] = $object->getNombre_usuario();
							Page::showMessage(1, "Autenticación correcta", "public.php");
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
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/login_view.php");
?>