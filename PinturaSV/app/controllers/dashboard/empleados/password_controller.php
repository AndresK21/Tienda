<?php
require_once("../../app/models/empleado.class.php");
try{
    if(isset($_POST['cambiar'])){//El controlador solo funciona con el post que se llame asi
        $usuario = new Empleado;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId_empleado($_SESSION['id_empleado_d'])){
            if($_POST['clave_actual_1'] == $_POST['clave_actual_2']){ //Verifica que la clave antigua sea igual
                if($usuario->setContrasena2($_POST['clave_actual_1'])){
                    if($usuario->checkContrasena()){
                        if($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']){ //Verifica que la clave nueva sea igual
                            if($usuario->setContrasena($_POST['clave_nueva_1'])){
                                if($_POST['clave_actual_1'] != $_POST['clave_nueva_1']){
                                    if($_SESSION['nombre_usuario_d'] != $_POST['clave_nueva_1']){
                                        if($usuario->changeContrasena()){ //Cambia la contraseña
                                            Page::showMessage(1, "Clave cambiada", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("La clave no puede ser igual al nombre de usuario");
                                    }
                                }else{
                                    throw new Exception("Las clave nueva no puede ser igual a la actual");
                                }
                            }else{
                                throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
                            }
                        }else{
                            throw new Exception("Claves nuevas diferentes");
                        }
                    }else{
                        throw new Exception("Clave actual incorrecta");
                    }
                }else{
                    throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
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
require_once("../../app/view/dashboard/empleado/password_view.php");
?>