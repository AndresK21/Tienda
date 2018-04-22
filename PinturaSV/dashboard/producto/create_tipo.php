<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Crear tipo de producto");
require_once("../../app/controllers/dashboard/tipo_p/create_controller.php");
Page::templateFooter();
?>