<?php
require_once("../../app/models/cliente.class.php");
try{
    $cliente = new Cliente;
    if($cliente->setId_cliente($_SESSION['id_cliente'])){
        if($cliente->readCliente()){
            if($cliente){
                $data = $cliente->getVentas();
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Cliente inexistente");
        }
    }else {
        throw new Exception("Cliente incorrecto");
    }
if($data){
    require_once("../../app/view/public/clientes/ventas_view.php");
}else{
    Page::showMessage(3, "No hay ventas disponibles", "index.php");
}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>