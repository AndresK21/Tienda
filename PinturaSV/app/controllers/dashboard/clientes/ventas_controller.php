<?php
require_once("../../app/models/cliente.class.php");
try{
    if(isset($_GET['id'])){
        $cliente = new Cliente;
        if($cliente->setId_cliente($_GET['id'])){
            if($cliente->readCliente()){
                if($cliente){
                    $data = $cliente->getVentas();
                }else{
                    throw new Exception(Database::getException());
                }
            }else{
                throw new Exception("Cliente inexistente");
            }
        }else {
            throw new Exception("Cliente incorrecto");
        }
    }else{
        Page::showMessage(3, "Seleccione un cliente", "index.php");
    }
    if($data){
        require_once("../../app/view/dashboard/clientes/ventas_view.php");
    }else{
        Page::showMessage(3, "No hay ventas disponibles", "index.php");
    }


	/*$marca = new Marca;
	if(isset($_POST['buscar_marca'])){//
		$_POST = $marca->validateForm($_POST);
		$marcas = $marca->searchMarca($_POST['busqueda_marca']);
		if($marcas){
			$rows = count($marcas);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$marcas = $marca->getMarcas();
		}
	}else{
		$marcas = $marca->getMarcas();
	}
	if($marcas){
		require_once("../../app/view/dashboard/clientes/ventas_view.php");
	}else{
		Page::showMessage(3, "No hay marcas disponibles", "create.php");
	}*/
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>