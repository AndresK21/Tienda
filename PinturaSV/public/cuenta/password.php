<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Cambiar contraseña");
require_once("../../app/controllers/public/clientes/password_controller.php");
Page::templateFooter();
?>