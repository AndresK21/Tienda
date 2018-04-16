<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Registrar usuario");
require_once("../../app/controllers/dashboard/empleados/create_controller.php");
Page::templateFooter();
?>