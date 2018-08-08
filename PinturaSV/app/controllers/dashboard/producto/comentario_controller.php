<?php
require_once("../../app/models/valoraciones.class.php");
try{
    if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){ //Obtiene el id del producto para utilizarlo despues/ evalua si el id ha sido obtenido
        $producto = new Valoraciones; //Referencia con el modelo de "valoraciones"
        if($producto->setId_producto($_GET['id'])){ //Establece el id en la variable para usarla despues en la funcion
            if($producto->readProducto()){ 
                if($producto){
                    $data = $producto->getValoraciones2(); //Obtiene los comentarios del producto
                }else{
                    throw new Exception(Database::getException());
                }
            }else{
                throw new Exception("Producto inexistente");
            }
        }else {
            throw new Exception("Producto incorrecto");
        }
    }else{
        Page::showMessage(3, "Seleccione un producto", "index.php");
    }
    if($data){
        require_once("../../app/view/dashboard/producto/comentarios_view.php");
    }else{
        Page::showMessage(3, "No hay comentarios disponibles", "index.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>