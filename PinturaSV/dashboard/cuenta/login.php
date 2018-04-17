<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Iniciar sesión");
require_once("../../app/controllers/dashboard/empleados/login_controller.php");
Page::templateFooter();
?>  