<?php
require_once("../../app/models/empleado.class.php");
$object = new Empleado;
$object->unsetIp($_SESSION['nombre_usuario_d']);
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "index.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "dashboard.php");
}
?>