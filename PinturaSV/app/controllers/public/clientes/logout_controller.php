<?php
require_once("../../../models/cliente.class.php");
$object = new Cliente;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "index.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "dashboard.php");
}
?>