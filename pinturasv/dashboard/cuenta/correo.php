<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Recuperar contraseña");
require_once("../../app/controllers/dashboard/empleados/correo_controller.php");
Page::templateFooter();
?>