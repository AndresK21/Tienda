<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Inicio");
require_once("../../app/controllers/public/producto/index.php");
Page::templateFooter();
?>