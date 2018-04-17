<?php
require_once("../../app/models/empleado.class.php");
try{
    $empleado = new Empleado;
    if(isset($_POST['crear'])){
        $_POST = $empleado->validateForm($_POST);
        if($empleado->setNombre($_POST['nombre_completo'])){
            if($empleado->setCorreo($_POST['correo_electronico'])){
                if($empleado->setUsuario($_POST['nombre_usuario'])){
                    if($empleado->setContrasena($_POST['contrasena'])){
                        if($empleado->setId_permiso(isset($_POST['id_permiso'])?2:3)){
                            if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                if($empleado->setImagen($_FILES['archivo'])){
                                    if($empleado->createEmpleado()){
                                        Page::showMessage(1, "Usuario creado", "index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception($empleado->getImageError());
                                }
                            }else{
                                throw new Exception("Seleccione una imagen");
                            }
                        }else{
                            throw new Exception("Elige un permiso");
                        }                  
                    }else{
                        throw new Exception("Contraseña incorrecta");
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
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/usuarios/create_view.php");
?>