<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Borrar producto");
require_once("../../app/controllers/public/detalle_pedido/delete_controller.php");
Page::templateFooter();
?>