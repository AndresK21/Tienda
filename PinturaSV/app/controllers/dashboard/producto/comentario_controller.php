<?php
require_once("../../app/models/valoraciones.class.php");
try{
    if(isset($_GET['id'])){
        $producto = new Valoraciones;
        if($producto->setId_producto($_GET['id'])){
            if($producto->readProducto()){
                if($producto){
                    $data = $producto->getValoraciones2();
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