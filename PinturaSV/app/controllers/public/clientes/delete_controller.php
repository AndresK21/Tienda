<?php
require_once("../../../models/cliente.class.php");
try{
	if(isset($_GET['id'])){
		if($_GET['id'] != $_SESSION['id_cliente_p']){
			$cliente = new Cliente;
			if($cliente->setId_cliente($_GET['id'])){
				if($cliente->readCliente()){
					if(isset($_POST['eliminar'])){
						if($cliente->deleteCliente()){
							Page::showMessage(1, "Cliente eliminado", "index.php");
						}else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Cliente inexistente");
				}
			}else{
				throw new Exception("Cliente incorrecto");
			}
		}else{
			throw new Exception("No se puede eliminar a sí mismo");
		}
	}else{
		Page::showMessage(3, "Seleccione Cliente", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/cliente/delete_view.php");
?>