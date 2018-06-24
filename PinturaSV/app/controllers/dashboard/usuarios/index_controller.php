<?php
require_once("../../app/models/empleado.class.php"); //Llama al modelo del empleado
try{
	$usuario = new Empleado;
	if(isset($_POST['buscar_usuario'])){ //Establece el nombre del post 
		$_POST = $usuario->validateForm($_POST);
		$data = $usuario->searchEmpleado($_POST['busqueda_usuario']); //Busca a los empleados
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null); //Muuestra los resultados
		}else{
			Page::showMessage(4, "No se encontraron resultados", null); //Muestra todos los registros
			$data = $usuario->getEmpleados();
		}	
	}else{
		$data = $usuario->getEmpleados(); //Muestra todos los registros
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