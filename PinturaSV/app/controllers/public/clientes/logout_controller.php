<?php
require_once("../../app/models/cliente.class.php");
$object = new Cliente;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "../categorias/categorias.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "../categorias/categorias.php");
}
?>