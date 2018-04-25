<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Clientes");
require_once("../../app/controllers/dashboard/clientes/index_controller.php");
Page::templateFooter();
?>