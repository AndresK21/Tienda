<?php
require_once("../../app/models/empleado.class.php");
try{
    $empleado = new Empleado;
    if($empleado->setId_empleado($_SESSION['id_empleado_d'])){//Establece el id empleado para obtener los registros del empleado
        if($empleado->readEmpleado()){
            if(isset($_POST['editar'])){
                $_POST = $empleado->validateForm($_POST);
                if($empleado->setNombre($_POST['nombre_completo'])){
                    if($empleado->setCorreo($_POST['correo_electronico'])){
                        if($empleado->setUsuario($_POST['nombre_usuario'])){
                            if($empleado->updateEmpleado2()){//Actualiza el empleado
                                $_SESSION['alias_usuario_d'] = $empleado->getUsuario();
                                Page::showMessage(1, "Perfil modificado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            throw new Exception("Correo incorrecto");
                        }
                    }else{
                        throw new Exception("Apellidos incorrectos");
                    }
                }else{
                    throw new Exception("Nombres incorrectos");
                }
            }
        }else{
            Page::showMessage(2, "Usuario inexistente", "index.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/empleado/profile_view.php");
?>