<?php
require_once("../../app/models/empleado.class.php");
try{
    $empleado = new Empleado;
    if($empleado->getEmpleados()){
        Page::showMessage(3, "Hay usuarios disponibles", "login.php");
    }else{
        if(isset($_POST['crear'])){
        $_POST = $empleado->validateForm($_POST);
        if($empleado->setNombre($_POST['nombre_completo'])){
            if($empleado->setCorreo($_POST['correo_electronico'])){
                if($empleado->setUsuario($_POST['nombre_usuario'])){
                    if($_POST['contrasena1'] == $_POST['contrasena2']){
                        if($empleado->setContrasena($_POST['contrasena1'])){
                            if($empleado->setId_permiso("2")){ //Establece que solo puede ser administrador
                                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                    if($empleado->setImagen($_FILES['archivo'])){
                                        if($_POST['nombre_usuario'] != $_POST['contrasena1']){
                                            if($empleado->createEmpleado()){
                                                Page::showMessage(1, "Usuario creado", "login.php");
                                            }else{
                                                throw new Exception(Database::getException());
                                            }
                                        }else{
                                            throw new Exception("La clave no puede ser igual al nombre de usuario");
                                        }
                                    }else{
                                        throw new Exception($producto->getImageError());
                                    }
                                }else{
                                    throw new Exception("Seleccione una imagen");
                                }
                            }else{
                                throw new Exception("Permiso incorrecto. Contacte con el administrador");
                            }                  
                        }else{
                            throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
                        }
                    }else{
                        throw new Exception("Claves nuevas diferentes");
                    }
                }else{
                    throw new Exception("Usuario incorrecto");
                }
            }else{
                throw new Exception("Correo incorrecto");
            }
        }else{
            throw new Exception("Nombres incorrectos");
        }
    }
}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/empleado/register_view.php");
?>