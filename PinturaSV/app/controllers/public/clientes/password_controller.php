<?php
require_once("../../app/models/cliente.class.php");
try{
    if(isset($_POST['cambiar'])){//El controlador solo funciona con el post que se llame asi
        $usuario = new Cliente;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId_cliente($_SESSION['id_cliente_p'])){
            if($_POST['clave_actual_1'] == $_POST['clave_actual_2']){ //Verifica que la clave antigua sea igual
                if($usuario->setContrasena2($_POST['clave_actual_1'])){
                    if($usuario->checkPassword_cliente()){
                        if($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']){ //Verifica que la clave nueva sea igual
                            if($usuario->setContrasena($_POST['clave_nueva_1'])){
                                if($_SESSION['nombre_usuario_p'] != $_POST['clave_nueva_1']){
                                    if($usuario->changePassword_cliente()){ //Cambia la contraseña
                                        Page::showMessage(1, "Clave cambiada", "../categorias/categorias.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("La clave no puede ser igual al nombre de usuario");
                                }
                            }else{
                                throw new Exception("Clave nueva menor a 6 caracteres");
                            }
                        }else{
                            throw new Exception("Claves nuevas diferentes");
                        }
                    }else{
                        throw new Exception("Clave actual incorrecta");
                    }
                }else{
                    throw new Exception("Clave actual menor a 6 caracteres");
                }
            }else{
                throw new Exception("Claves actuales diferentes");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "../categorias/categorias.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/public/cuenta/password_view.php");
?>