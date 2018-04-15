<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../../app/controllers/dashboard/empleados/logout_controller.php");
Page::templateFooter();
?>