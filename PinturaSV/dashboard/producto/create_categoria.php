<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Crear categoria");
require_once("../../app/controllers/dashboard/categoria/create_controller.php");
Page::templateFooter();
?>