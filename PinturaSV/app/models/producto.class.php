<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id_producto = null;
	private $nombre = null;
	private $cantidad = null;
	private $precio = null;
	private $color = null;
	private $id_categoria = null;
	private $id_estado = null;
	private $id_presentacion = null;

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

	//Metodos para el manejo del CRUD
	public function getCategoriaProductos(){
		$sql = "SELECT id_categoria, id_producto, nombre, precio FROM producto INNER JOIN categoria USING(id_categoria) WHERE id_categoria = ? AND id_estado = 1 ORDER BY nombre_producto";
		$params = array($this->id_categoria);
		return Database::getRows($sql, $params);
	}
	public function getProductos(){
		$sql = "SELECT id_producto, nombre, cantidad, precio, color, categoria, estado, presentacion FROM producto INNER JOIN categoria USING(id_categoria) INNER JOIN estado USING(id_estado) INNER JOIN presentaciones USING(id_presentacion) ORDER BY nombre";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProducto($value){
		$sql = "SELECT id_producto, nombre, cantidad, precio, color, categoria, estado, presentacion FROM producto INNER JOIN categoria USING(id_categoria) INNER JOIN estado USING(id_estado) INNER JOIN presentaciones USING(id_presentacion) WHERE nombre LIKE ? ORDER BY nombre";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function getCategorias(){
		$sql = "SELECT id_categoria, categoria FROM categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createProducto(){
		$sql = "INSERT INTO productos(nombre, cantidad, precio, color, id_categoria, id_estado, id_presentacion) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre, $this->cantidad, $this->precio, $this->color, $this->id_categoria, $this->id_estado, $this->id_presentacion);
		return Database::executeRow($sql, $params);
	}
	public function readProducto(){
		$sql = "SELECT nombre, cantidad, precio, color, categoria, estado, presentacion FROM producto INNER JOIN categoria USING(id_categoria) INNER JOIN estado USING(id_estado) INNER JOIN presentaciones USING(id_presentacion) WHERE id_producto = ?";
		$params = array($this->id_producto);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre'];
			$this->cantidad = $producto['cantidad'];
			$this->precio = $producto['precio'];
			$this->color = $producto['color'];
			$this->id_categoria = $producto['categoria'];
			$this->id_estado = $producto['estado'];
			$this->id_presentacion = $producto['presentacion'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProducto(){
		$sql = "UPDATE producto SET nombre = ?, cantidad = ?, precio = ?, color = ?, id_categoria = ?, id_estado = ?, id_presentacion = ? WHERE id_producto = ?";
		$params = array($this->nombre, $this->cantidad, $this->precio, $this->color, $this->id_categoria, $this->id_estado, $this->id_presentacion, $this->id_producto);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE id_producto = ?";
		$params = array($this->id_producto);
		return Database::executeRow($sql, $params);
	}
}
?>