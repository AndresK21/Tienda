<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Bienvenido");
require_once("../../app/controllers/public/producto/productos_controller.php");
Page::templateFooter();
?>