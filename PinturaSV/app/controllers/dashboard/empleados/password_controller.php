<?php
require_once("../../app/models/usuario.class.php");
try{
    if(isset($_POST['cambiar'])){
        $usuario = new Empleado;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId_empleado($_SESSION['id_empleado'])){
            if($_POST['clave_actual_1'] == $_POST['clave_actual_2']){
                if($usuario->setContrasena($_POST['clave_actual_1'])){
                    if($usuario->checkContrasena()){
                        if($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']){
                            if($usuario->setContrasena($_POST['clave_nueva_1'])){
                                if($usuario->changeContrasena()){
                                    Page::showMessage(1, "Clave cambiada", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
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
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/password_view.php");
?>