<?php
require_once("../../../app/models/empleado.class.php");
try{
    $empleado = new Empleado;
    if(isset($_POST['crear'])){
        $_POST = $empleado->validateForm($_POST);
        if($empleado->setNombre($_POST['nombre_completo'])){
            if($empleado->setCorreo($_POST['correo_electronico'])){
                if($empleado->setUsuario($_POST['nombre_usuario'])){
                    if($empleado->setContrasena($_POST['contrasena'])){
                        if($empleado->setId_permiso($_POST['id_permiso'])){
                            if($empleado->createEmpleado()){
                                Page::showMessage(1, "Usuario creado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
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
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/empleado/create_view.php");
?>