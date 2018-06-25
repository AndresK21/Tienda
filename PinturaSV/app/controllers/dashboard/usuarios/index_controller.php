<?php
require_once("../../app/models/empleado.class.php"); //Llama al modelo del empleado
try{
	//cantidad de registros por página
	$por_pagina=10;
	if (isset($_GET["pagina"])) {
	$pagina = $_GET["pagina"];
	}
	else {
	$pagina=1;
	}
	// la pagina inicia en 0 y se multiplica $por_pagina
	$empieza = ($pagina-1) * $por_pagina;
	
	$usuario = new Empleado;
	if(isset($_POST['buscar_usuario'])){ //Establece el nombre del post 
		$_POST = $usuario->validateForm($_POST);
		$data = $usuario->searchEmpleado($_POST['busqueda_usuario']); //Busca a los empleados
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null); //Muuestra los resultados
		}else{
			Page::showMessage(4, "No se encontraron resultados", null); //Muestra todos los registros
			$data = $usuario->getEmpleados2($empieza, $por_pagina);
		}	
	}else{
		$data = $usuario->getEmpleados2($empieza, $por_pagina); //Muestra todos los registros
	}
	if($data){
		require_once("../../app/view/dashboard/usuarios/index_view.php");
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../usuarios/");
}
?>