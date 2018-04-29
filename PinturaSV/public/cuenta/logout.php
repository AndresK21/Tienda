<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../../app/controllers/public/clientes/logout_controller.php");
Page::templateFooter();
?>