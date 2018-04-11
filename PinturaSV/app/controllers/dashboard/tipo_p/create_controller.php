<?php
require_once("../../../app/models/tipo_p.class.php");
try{
    $tipo_p = new Tipo_p;
    if(isset($_POST['crear'])){
        $_POST = $tipo_p->validateForm($_POST);
        if($tipo_p->setTipo_p($_POST['tipo_p'])){
            if($tipo_p->createProducto()){
                Page::showMessage(1, "Producto creado", "index.php");
            }else{
            throw new Exception("No se pudo cerrar el producto");        
            }
        }else{
            throw new Exception("Tipo de producto incorrecto");
        }
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/create_view.php");
?>