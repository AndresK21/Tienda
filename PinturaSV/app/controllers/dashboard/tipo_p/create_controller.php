<?php
require_once("../../app/models/tipo_p.class.php"); //Llama el modelo del tipo de producto
try{
    $tipo_p = new Tipo_p;
    if(isset($_POST['crear'])){
        $_POST = $tipo_p->validateForm($_POST);
        if($tipo_p->setTipo_p($_POST['tipo_p'])){  //Recibe el tipo de prodcuto
            if($tipo_p->createTipo_p()){ //Crea el tipo de producto
                Page::showMessage(1, "Tipo de producto creado", "index.php");
            }else{
            throw new Exception("No se pudo cerrar el tipo de producto");        
            }
        }else{
            throw new Exception("Tipo de producto incorrecto");
        }
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/view/dashboard/tipo_p/create_view.php");
?>