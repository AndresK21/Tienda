<?php
require_once("../../app/helpers/validator.class.php"); // Llama las validaciones
require_once("../../app/models/valoraciones.class.php");// Llama el modelo de las valoraciones
try{
    $valoraciones = new Valoraciones;
    
    if($valoraciones->setId_cliente($_SESSION['id_cliente_p']) && $_SERVER['HTTP_REFERER']){ // Obtenemos el id del cliente
        if(isset($_POST['valorar'])){ // Declaramos la varible a 
            $_POST = $valoraciones -> validateForm($_POST); // Campo de validacion
            if($valoraciones->setId_producto($_GET['id'])){ // Obtenemos el id del producto a valorar
                if(isset($_POST['estrellas'])){
                    $estrella = true;
                    $valoraciones->setEstrellas($_POST['estrellas']); // Llenamos las estrellas con el numero correspondiente
                }else{
                    $estrella = false;
                    $valoraciones->setEstrellas(NULL);
                }
                
                if($valoraciones->setComentario($_POST['comentario'])){ // Llenamos el comentario
                    $comentario = true;
                }else{
                    $comentario = false;
                }
                if($estrella || $comentario){
                    if($valoraciones->createValoracion()){ // metodo crear valoracion
                        Page::showMessage(1, "Valoracion creada", "../cuenta/compras.php");
                    }else{
                        Page::showMessage(3, "Valoracion no creada",null);
                    }    
                }else{
                    Page::showMessage(3, "Debe realizar alguna valoracion",null);
                }
            }else{
                Page::showMessage(3, "Error en el Producto Seleccionado",null);
            }
        }
    }else{
        throw new Exception("Error en el Cliente");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), "compras.php");
}
require_once("../../app/view/public/cuenta/comentarios_view.php");
?>