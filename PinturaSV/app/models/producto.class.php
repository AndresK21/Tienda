<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id_producto = null;
	private $nombre = null;
	private $cantidad = null;
	private $precio = null;
	private $color = null;
	private $imagen = null;
	private $id_categoria = null;
	private $id_estado = null;
	private $id_presentacion = null;
	private $presentacion = null;
	private $id_marca = null;

	private $existencias = null;

	//Métodos para sobrecarga de propiedades
	public function setId_producto($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_producto(){
		return $this->id_producto;
	}

	public function setExistencias($value){
		if($this->validateAlphanumeric($value)){
			$this->existencias = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getExistencias(){
		return $this->existencias;
	}

	public function setpresentacion($value){
		if($this->validateAlphanumeric($value)){
			$this->presentacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getpresentacion(){
		return $this->presentacion;
	}
	
	public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 120)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
	}

	public function setCantidad($value){
		if($this->validateAlphanumeric($value, 1, 11)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
	}

	public function setPrecio($value){
		if($this->validateMoney($value)){
			$this->precio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPrecio(){
		return $this->precio;
	}

	public function setColor($value){
		if($this->validateAlphabetic($value, 1, 25)){
			$this->color = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getColor(){
		return $this->color;
	}

	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/productos/", 500, 500)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function unsetImagen(){
		if(unlink("../../web/img/productos/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}

	public function setId_categoria($value){
		if($this->validateId($value)){
			$this->id_categoria = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_categoria(){
		return $this->id_categoria;
	}

	public function setId_estado($value){
		if($this->validateId($value)){
			$this->id_estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_estado(){
		return $this->id_estado;
	}

	public function setId_presentacion($value){
		if($this->validateId($value)){
			$this->id_presentacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_presentacion(){
		return $this->id_presentacion;
	}

	public function setId_marca($value){
		if($this->validateId($value)){
			$this->id_marca = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_marca(){
		return $this->id_marca;
	}

	//Metodos para el manejo del CRUD
	public function getCategoriaProductos(){
		$sql = "SELECT categoria.categoria, producto.id_producto, producto.nombre, producto.precio, producto.imagen, presentaciones.presentacion FROM producto 
		INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria INNER JOIN presentaciones ON producto.id_presentacion = presentaciones.id_presentacion
		WHERE producto.id_categoria = ? AND producto.id_estado = 1";
		$params = array($this->id_categoria);
		return Database::getRows($sql, $params);
	}
	public function getCategoriaProductos2($empieza, $por_pagina){
		$query = "SELECT categoria.categoria, producto.id_producto, producto.nombre, producto.precio, producto.imagen, presentaciones.presentacion FROM producto 
		INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria INNER JOIN presentaciones ON producto.id_presentacion = presentaciones.id_presentacion
		WHERE producto.id_categoria = ? AND producto.id_estado = 1 LIMIT $empieza, $por_pagina";
		$params = array($this->id_categoria);
		return Database::getRows($query, $params);
	}
	public function getPresentacionesProductos(){
		$sql = "SELECT presentaciones.presentacion, producto.id_producto, producto.nombre, producto.precio, producto.imagen FROM producto 
		INNER JOIN presentaciones ON producto.id_presentacion = presentaciones.id_presentacion 
		WHERE producto.id_presentacion = ? AND producto.id_estado = 1";
		$params = array($this->id_presentacion);
		return Database::getRows($sql, $params);
	}
	public function getProductos(){
		$sql = "SELECT id_producto, nombre, cantidad, precio, color, imagen, categoria, id_estado, presentacion FROM producto INNER JOIN categoria USING(id_categoria) INNER JOIN presentaciones USING(id_presentacion) ORDER BY nombre";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getProductos2($empieza, $por_pagina){
		$sql = "SELECT id_producto, nombre, cantidad, precio, color, imagen, categoria, id_estado, presentacion FROM producto INNER JOIN categoria USING(id_categoria) INNER JOIN presentaciones USING(id_presentacion) ORDER BY nombre LIMIT $empieza, $por_pagina";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getProductosTop(){
		$sql = "SELECT `id_producto` ,producto.nombre, producto.cantidad, producto.precio, producto.color, producto.imagen, categoria, id_estado, presentacion FROM detalle_pedido INNER JOIN producto USING (id_producto) INNER JOIN categoria USING(id_categoria) INNER JOIN presentaciones USING(id_presentacion) GROUP BY id_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProducto($value){
		$sql = "SELECT id_producto, nombre, cantidad, precio, color, imagen, categoria, id_estado, presentacion FROM producto INNER JOIN categoria USING(id_categoria) INNER JOIN presentaciones USING(id_presentacion) WHERE nombre LIKE ? ORDER BY nombre";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function producto_wholetable(){
		$sql = "SELECT * FROM producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProducto2($value, $value2, $value3){
		$sql = "SELECT categoria,id_producto, nombre, cantidad, precio, color, imagen, id_estado, presentacion FROM producto 
		INNER JOIN categoria USING(id_categoria) INNER JOIN presentaciones USING(id_presentacion) 
		WHERE nombre LIKE ? AND presentaciones.id_presentacion = ? AND categoria.id_categoria = ? ORDER BY nombre";
		$params = array("%$value%", $value2, $value3);
		return Database::getRows($sql, $params);
	}
	public function getCategorias(){
		$sql = "SELECT id_categoria, categoria FROM categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getMarcas(){
		$sql = "SELECT id_marca, marca FROM marca ORDER BY marca";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getpresentaciones(){
		$sql = "SELECT id_presentacion, presentacion FROM presentaciones";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createProducto(){
		$sql = "INSERT INTO producto(nombre, cantidad, precio, color, imagen, id_categoria, id_estado, id_presentacion, id_marca) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre, $this->cantidad, $this->precio, $this->color, $this->imagen, $this->id_categoria, $this->id_estado, $this->id_presentacion, $this->id_marca);
		return Database::executeRow($sql, $params);
	}
	public function readProducto(){
		$sql = "SELECT nombre, cantidad, precio, color, imagen, id_categoria, id_estado, id_presentacion, id_marca FROM producto WHERE id_producto = ?";
		$params = array($this->id_producto);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre'];
			$this->cantidad = $producto['cantidad'];
			$this->precio = $producto['precio'];
			$this->color = $producto['color'];
			$this->imagen = $producto['imagen'];
			$this->id_categoria = $producto['id_categoria'];
			$this->id_estado = $producto['id_estado'];
			$this->id_presentacion = $producto['id_presentacion'];
			$this->id_marca = $producto['id_marca'];
			return true;
		}else{
			return null;
		}
	}
	public function readProducto2(){
		$sql = "SELECT nombre, cantidad, precio, color, imagen, id_categoria, id_estado, presentacion, id_marca, cantidad FROM producto 
		INNER JOIN presentaciones ON producto.id_presentacion = presentaciones.id_presentacion  WHERE id_producto = ?";
		$params = array($this->id_producto);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre'];
			$this->cantidad = $producto['cantidad'];
			$this->precio = $producto['precio'];
			$this->color = $producto['color'];
			$this->imagen = $producto['imagen'];
			$this->id_categoria = $producto['id_categoria'];
			$this->id_estado = $producto['id_estado'];
			$this->presentacion = $producto['presentacion'];
			$this->id_marca = $producto['id_marca'];
			$this->existencias = $producto['cantidad'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProducto(){
		$sql = "UPDATE producto SET nombre = ?, cantidad = ?, precio = ?, color = ?, imagen = ?, id_categoria = ?, id_estado = ?, id_presentacion = ?, id_marca = ? WHERE id_producto = ?";
		$params = array($this->nombre, $this->cantidad, $this->precio, $this->color, $this->imagen, $this->id_categoria, $this->id_estado, $this->id_presentacion, $this->id_marca, $this->id_producto);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE id_producto = ?";
		$params = array($this->id_producto);
		return Database::executeRow($sql, $params);
	}
}
?>