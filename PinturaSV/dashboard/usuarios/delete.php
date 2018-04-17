<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar Usuario");
require_once("../../app/controllers/dashboard/usuarios/delete_controller.php");
Page::templateFooter();
?>