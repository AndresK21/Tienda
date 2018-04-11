<?php
class Detalle extends Validator{
	//Declaración de propiedades
	private $id_detalle = null;
	private $cantidad = null;
	private $id_producto = null;
	private $id_pedido = null;

	//Métodos para sobrecarga de propiedades
	public function setId_detalle($value){
		if($this->validateId($value)){
			$this->id_detalle = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_detalle(){
		return $this->id_detalle;
	}
	
	public function setCantidad($value){
		if($this->validateAlphanumeric($value)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
	}

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

	public function setId_pedido($value){
		if($this->validateId($value)){
			$this->id_pedido = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_pedido(){
		return $this->id_pedido;
	}


	//Metodos para manejar el CRUD
	public function getDetalles(){
		$sql = "SELECT id_detalle, detalle_pedido.cantidad, nombre, id_pedido FROM detalle_pedido INNER JOIN producto USING(id_producto) ORDER BY id_detalle";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchDetalle($value){
		$sql = "SELECT id_detalle, detalle_pedido.cantidad, nombre, id_pedido FROM detalle_pedido INNER JOIN producto USING(id_producto) WHERE id_detalle LIKE ? ORDER BY id_detalle";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createDetalle(){
		$sql = "INSERT INTO detalle_pedido(cantidad, id_producto, id_pedidoo) VALUES (?, ?, ?)";
		$params = array($this->cantidad, $this->id_producto, $this->id_pedido);
		return Database::executeRow($sql, $params);
	}
	public function readDetalle(){
		$sql = "SELECT detalle_pedido.cantidad, nombre, id_pedido FROM detalle_pedido INNER JOIN producto USING(id_producto) WHERE id_detalle = ?";
		$params = array($this->id_detalle);
		$detalle = Database::getRow($sql, $params);
		if($detalle){
			$this->cantidad = $detalle['detalle_pedido.cantidad'];
			$this->id_producto = $detalle['nombre'];
			$this->id_pedido = $detalle['id_pedido'];
			return true;
		}else{
			return null;
		}
	}
	public function updateDetalle(){
		$sql = "UPDATE detalle_pedido SET cantidad = ?, id_producto = ?, id_pedido = ? WHERE id_detalle = ?";
		$params = array($this->cantidad, $this->id_producto, $this->id_pedido, $this->id_detalle);
		return Database::executeRow($sql, $params);
	}
	public function deleteDetalle(){
		$sql = "DELETE FROM detalle_pedido WHERE id_detalle = ?";
		$params = array($this->id_detalle);
		return Database::executeRow($sql, $params);
	}
}
?>