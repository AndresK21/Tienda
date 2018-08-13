<?php
require_once("../../app/models/producto.class.php");
try{
	//cantidad de registros por página
	$por_pagina=4;
	if (isset($_GET["pagina"])) {
	$pagina = $_GET["pagina"];
	}
	else {
	$pagina=1;
	}
	// la pagina inicia en 0 y se multiplica $por_pagina
	$empieza = ($pagina-1) * $por_pagina;

	$productob = new Producto;
	if(isset($_POST['buscar_producto'])){ // Al momento de buscar
		$_POST = $productob->validateForm($_POST);
		$data_productos = $productob->searchProducto2($_POST['busqueda_producto'], $_POST['presentacion'], $_GET['id']); // Campos a llenar Nombre del producto y la presentacion del mismo
		if($data_productos){
			$rows = count($data_productos);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data_productos = $productob->getCategoriaProductos2($empieza, $por_pagina); // Obtenemos los productos con la paginacion (LIMI)
		}
	}
	else{
		if(isset($_GET['id']) && $_SERVER['HTTP_REFERER']){ //Obtiene el id del cliente para utilizarlo despues/ evalua si el id ha sido obtenido
			if($productob->setId_categoria($_GET['id'])){ // Obtenemos la categoria
				$data_productos = $productob->getCategoriaProductos2($empieza, $por_pagina); // Obtenemos los productos con la paginacion (LIMI)
			}else{
				throw new Exception("Categoría incorrecta");
			}
		}else{
			throw new Exception("Seleccione categoría");
		}
	}
	if($data_productos){ // Para ambos casos mostrar la vista de los porductos por categoria
		require_once("../../app/view/public/categorias/productos_view.php");
	}else{
		throw new Exception("No hay productos disponibles");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "categorias.php");
}
?>