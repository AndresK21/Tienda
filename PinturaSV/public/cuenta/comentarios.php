<?php
require_once("../../app/view/public/templates/page.class.php");
Page::templateHeader("Comentarios");
require_once("../../app/controllers/public/clientes/comentarios_controller.php");
Page::templateFooter();
?>