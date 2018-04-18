<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Editar usuarios");
require_once("../../app/controllers/dashboard/usuarios/update_controller.php");
Page::templateFooter();
?>