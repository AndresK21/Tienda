<?php
require_once("../../app/models/empleado.class.php");
require_once("../../app/helpers/PHPMailer.class.php");
require_once("../../app/helpers/Exception.class.php");
try{
    if(isset($_POST['enviar'])){
    $_POST = $empleado->validateForm($_POST);
    if($nombre = validateAlphabetic($_POST['nombre'], 20, 150)){
        if($correo = validateEmail($_POST['correo'])){
            if($mensaje = validateAlphanumeric($_POST['mensaje'], 80, 500)){

                
            }else{
                throw new Exception("Mensaje incorrecto");
            }
        }else{
            throw new Exception("Correo incorrecto");
        }
    }else{
        throw new Exception("Nombre incorrecto");
    }
}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/empleado/register_view.php");
?>