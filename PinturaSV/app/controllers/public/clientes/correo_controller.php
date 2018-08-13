<?php

require_once("../../app/models/cliente.class.php");
require_once("../../app/PHPMailer/class.phpmailer.php");
require_once("../../app/PHPMailer/class.smtp.php");

function generar($length = 8) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString; 
}

try{

    $nueva = generar();

    $cliente = new Cliente;
    if(isset($_POST['enviar'])){
        $_POST = $cliente->validateForm($_POST);
        if($cliente->setNombreCorreo($_POST['nombre'])){
            if($cliente->setEmail($_POST['correo'])){
                if($cliente->checkUsuarios_Cliente2()){
                    if($cliente->updateContraCliente($nueva)){

                        $mail = new PHPMailer;
                        $mail->setLanguage('es', '../../app/PHPMailer/language/phpmailer.lang-es.php');
                        $correo = $_POST['correo'];
                        $nombre = $_POST['nombre'];
                        $usuario = $cliente->getNombre_usuario();
        
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'pinturasv503@gmail.com';
                        $mail->Password = 'pinturasv';
                        $mail->SMTPSecure = 'ssl';
                        $mail->Port = 465;
        
                        $mail->setFrom('pinturasv503@gmail.com', 'PinturaSV');
                        $mail->addAddress($correo, $usuario);
        
                        $mail->Subject = 'Recuperar acceso';
                        $mail -> isHTML(true);
                        $mail->Body = "
                        <head>
                            <style>
                            body{
                                color: #0ab5f5;
                                font-family: 'Tahoma', arial;
                            }
                            </style>
                        </head>
                        <body>
                            <div> 
                                <p>Su nueva contrase&ntilde;a es $nueva Recomendamos cambie esta contrase&ntilde;a al iniciar sesion</p>
                            </div>
                        </body>";
                        
                        if(!$mail->send()){
                            Page::showMessage(2, "Error, mensaje no enviado. Error: ".$mail->ErrorInfo, "correo_cliente.php");
                        }else{
                            Page::showMessage(1, "El mensaje se ha enviado correctamente", "login.php");
                        }
        
                    }else{
                        throw new Exception("No se ha podido actualizar la contraseña");
                    }
                }else{
                    throw new Exception("Usuario inexistente");
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
require_once("../../app/view/public/cuenta/correo_view.php");
?>