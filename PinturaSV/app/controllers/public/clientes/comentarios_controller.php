<?php
require_once("../../app/helpers/validator.class.php");
require_once("../../app/models/valoraciones.class.php");
try{
    $valoraciones = new Valoraciones;
    if($valoraciones->setId_cliente($_SESSION['id_cliente'])){
        if(isset($_POST['valorar'])){
            $_POST = $valoraciones -> validateForm($_POST);
            if($valoraciones->setId_producto($_GET['id'])){
                if($valoraciones->setEstrellas($_POST['estrellas'])){
                    if($valoraciones->setComentario($_POST['comentario'])){
                        if($valoraciones->createValoracion()){
                            Page::showMessage(1, "Valoracion creada", null);
                        }else{
                            Page::showMessage(3, "Valoracion no creada",null);
                        }
                    }else{
                        Page::showMessage(3, "Comentarios No disponibles", null);
                    }
                }else{
                    Page::showMessage(3, "Estrellas No disponibles", null);
                }
            }else{
                Page::showMessage(3, "Producto No disponible", null);
            }
        }else{
            Page::showMessage(2, "Error en obtener valores", null);
        }
    }else{
        throw new Exception("Cliente incorrecto");
    }
    if($valoraciones){
		require_once("../../app/view/public/cuenta/comentarios_view.php");
	}else{
		throw new Exception("No Disponible");
	}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), "../index/");
}
?>