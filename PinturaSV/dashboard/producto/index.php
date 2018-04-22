<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Productos");
require_once("../../app/controllers/dashboard/producto/index_controller.php");
Page::templateFooter();
?>