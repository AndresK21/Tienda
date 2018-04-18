<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Editar perfil");
require_once("../../app/controllers/dashboard/empleados/update_controller.php");
Page::templateFooter();
?>