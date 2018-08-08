<?php
require_once("../../app/models/cliente.class.php");
try{
    $cliente = new Cliente;
	if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){
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
		Page::showMessage(3, "Seleccione Cliente", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/view/dashboard/clientes/delete_view.php");
?>