<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Nosotros");
require_once("../../app/controllers/public/nosotros/index_controller.php");
Page::templateFooter();
?>