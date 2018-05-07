<?php
require_once("../../app/models/producto.class.php");
require_once("../../app/models/detalle_pedido.class.php");
require_once("../../app/models/valoraciones.class.php");
	try{
		if(isset($_GET['id'])){
			$producto = new Producto;
			$detalle = new Detalle;
			$valoraciones = new Valoraciones;
			if($producto->setId_producto($_GET['id'])){
				if($producto->readProducto2()){
					if($valoraciones->setId_producto($_GET['id'])){
						
						$valoracion2 = $valoraciones->getValoracionesProducto();
						$valoracion3 = $valoraciones->getEstrellasPromedio();
					if(isset($_POST['agregar'])){
						$_POST = $detalle->validateForm($_POST);
						if($detalle->setCantidad($_POST['cantidad'])){
							if($detalle->setId_producto($_GET['id'])){
								if($detalle->setId_pedido($_SESSION['id_pedido'])){
									if($detalle->createDetalle()){
										Page::showMessage(1, "Producto agregado al carrito", "../categorias/categorias.php");
											
										}else{
											throw new Exception(Database::getException());
										}
								}else{
									throw new Exception("Pedido incorrecto");
								}
							}else{
								throw new Exception("Producto incorrecto");
							}
						}else{
							throw new Exception("Cantidad incorrecta");
						}
					}
				}else{
					throw new Exception("Valoracion incorrecta");
				}
				}else{
					throw new Exception("Producto inexistente");
				}
			}else{
				throw new Exception("Producto incorrecto");
			}
		}else{
			throw new Exception("Seleccione producto");
		}
	}catch(Exception $error){
		Page::showMessage(3, $error->getMessage(), "index.php");
	}
	require_once("../../app/view/public/categorias/detalle_view.php");
?>