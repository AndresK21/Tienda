<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Iniciar sesión");
require_once("../../app/controllers/public/clientes/login_controller.php");
Page::templateFooter();
?>