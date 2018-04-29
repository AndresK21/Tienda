<?php
require_once("../../app/view/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar comentario");
require_once("../../app/controllers/dashboard/producto/delete_comentario_controller.php");
Page::templateFooter();
?>