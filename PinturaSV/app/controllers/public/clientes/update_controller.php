<?php
require_once("../../../models/cliente.class.php");
try{
    if(isset($_GET['id'])){
        $cliente = new Cliente;
        if($cliente->setId_cliente($_GET['id_cliente'])){
            if($cliente->readCliente()){
                if(isset($_POST['actualizar'])){
                    $_POST = $cliente->validateForm($_POST);
                    if($cliente->setNombres($_POST['nombres'])){
                        if($cliente->setApellidos($_POST['apellidos'])){
                            if($cliente->setEmail($_POST['email'])){
                                if($cliente->setNombre_usuario($_POST['nombre_usuario'])){
                                    if($cliente->setContrasena($_POST['contrasena'])){
                                    if($cliente->updateCliente()){
                                        Page::showMessage(1, "Cliente modificado", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Contraseña incorrecta");
                                    }
                                }else{
                                    throw new Exception("Usuario incorrecta");
                                }
                            }else{
                                throw new Exception("Correo Incorrecto");
                            }
                        }else{
                            throw new Exception("Apellidos incorrecto");
                        }
                    }else{
                        throw new Exception("Nombres Incorrectos");
                    }
                }
            }else{
                Page::showMessage(2, "Usuario inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione usuario", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cliente/update_view.php");
?>