<?php
require_once("../../app/models/empleado.class.php");
try{
    if(isset($_GET['id'])){
        $empleado = new Empleado;
        if($empleado->setId_empleado($_GET['id'])){
            if($empleado->readEmpleado()){
                if(isset($_POST['actualizar'])){
                    $_POST = $empleado->validateForm($_POST);
                    if($empleado->setNombre($_POST['nombre_completo'])){
                        if($empleado->setCorreo($_POST['correo_electronico'])){
                            if($empleado->setUsuario($_POST['nombre_usuario'])){
                                if($empleado->setContrasena($_POST['contrasena'])){
                                    if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                        if(!$empleado->setImagen($_FILES['archivo'])){
                                            throw new Exception($empleado->getImageError());
                                        }
                                    }
                                    if($empleado->setId_permiso(isset($_POST['id_permiso'])?2:3)){
                                    if($empleado->updateEmpleado()){
                                        Page::showMessage(1, "Usuario modificado", "index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                    }else{
                                        throw new Exception("Permiso incorrecto");
                                    }
                                }else{
                                    throw new Exception("Contraseña incorrecto");
                                }
                            }else{
                                throw new Exception("Usuario incorrecta");
                            }
                        }else{
                            throw new Exception("Correo incorrecto");
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Usuario inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione Usuario", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/usuarios/update_view.php");
?>