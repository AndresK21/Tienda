<?php
require_once("../../../models/cliente.class.php");
try{
    $cliente = new Cliente;
    if(isset($_POST['crear'])){
        $_POST = $cliente->validateForm($_POST);
        if($cliente->setNombres($_POST['nombres'])){
            if($cliente->setApellidos($_POST['apellidos'])){
                if($cliente->setEmail($_POST['email'])){
                    if($cliente->setNombre_usuario($_POST['nombre_usuario'])){
                        if($cliente->setContrasena($_POST['contrasena'])){
                            if($cliente->createCliente()){
                                Page::showMessage(1, "Usuario creado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            throw new Exception("Contraseña Incorrecta");
                        }                  
                    }else{
                        throw new Exception("Nombre de Usuario incorrecta");
                    }
                }else{
                    throw new Exception("Correo incorrecto");
                }
            }else{
                throw new Exception("Apellidos incorrecto");
            }
        }else{
            throw new Exception("Nombres incorrectos");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cliente/create_view.php");
?>