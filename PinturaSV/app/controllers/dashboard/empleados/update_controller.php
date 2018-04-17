<?php
require_once("../../app/models/empleado.class.php");
try{
    $empleado = new Empleado;
    if($empleado->setId_empleado($_SESSION['id_empleado'])){
        if($empleado->readEmpleado()){
            if(isset($_POST['actualizar'])){
                $_POST = $empleado->validateForm($_POST);
                if($empleado->setNombre($_POST['nombre_completo'])){
                    if($empleado->setCorreo($_POST['correo_electronico'])){
                        if($empleado->setUsuario($_POST['nombre_usuario'])){
                            if($empleado->updateEmpleado()){
                                Page::showMessage(1, "Usuario modificado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            throw new Exception("Usuario Incorrecto");
                        }
                    }else{
                        throw new Exception("Correo incorrecto");
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
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/empleado/update_view.php");
?>