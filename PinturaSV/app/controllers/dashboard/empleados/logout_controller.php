<?php
require_once("../../../models/empleado.class.php");
$object = new Empelado;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "index.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "dashboard.php");
}
?>