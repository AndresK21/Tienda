<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Detalle");
require_once("../../app/controllers/public/producto/detalle_controller.php");
Page::templateFooter();
?>