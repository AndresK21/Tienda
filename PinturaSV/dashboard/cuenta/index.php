<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Bienvenido");
require_once("../../app/controllers/dashboard/empleados/index_controller.php");
Page::templateFooter();
?>