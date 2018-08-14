<?php
require_once("../../app/models/cliente.class.php");
try{
    $cliente = new Cliente;
    if($cliente->setId_cliente($_SESSION['id_cliente_p'])){
        if($cliente->readCliente()){
            if(isset($_POST['actualizar'])){
                $_POST = $cliente->validateForm($_POST);
                if($cliente->setNombres($_POST['nombres'])){
                    if($cliente->setApellidos($_POST['apellidos'])){
                        if($cliente->setEmail($_POST['email'])){
                            if($cliente->setNombre_usuario($_POST['nombre_usuario'])){
                                if($cliente->updateCliente()){
                                    Page::showMessage(1, "Usuario modificado", "../categorias/categorias.php");
                                    }else{
                                        throw new Exception(Database::getException());
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
            Page::showMessage(2, "Usuario inexistente", "../categorias/categorias.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "../categorias/categorias.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/public/cuenta/profile_view.php");
?>