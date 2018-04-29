<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Categorias");
require_once("../../app/controllers/public/categoria/categorias_controller.php");
Page::templateFooter();
?>