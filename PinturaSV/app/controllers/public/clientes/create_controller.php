<?php
require_once("../../app/models/cliente.class.php");
try{
    $cliente = new Cliente;
    if(isset($_POST['crear'])){
        $_POST = $cliente->validateForm($_POST);
                if($cliente->setNombres($_POST['nombres'])){
                    if($cliente->setApellidos($_POST['apellidos'])){
                        if($cliente->setEmail($_POST['email'])){
                            if($cliente->setNombre_usuario($_POST['nombre_usuarior'])){
                                if($_POST['contrasena1'] == $_POST['contrasena2']){ //Verifica que la clave sea igual
                                if($cliente->setContrasena($_POST['contrasena1'])){
                                    if($cliente->createCliente()){
                                        Page::showMessage(1, "Usuario creado", "../index/index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Contraseña Incorrecta");
                                }
                            }else{
                                throw new Exception("Contraseña Diferentes");
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
require_once("../../app/view/public/cuenta/create_view.php");
?>