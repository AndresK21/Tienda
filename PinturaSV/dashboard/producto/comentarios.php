<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Comentarios");
require_once("../../app/controllers/dashboard/producto/comentario_controller.php");
Page::templateFooter();
?>