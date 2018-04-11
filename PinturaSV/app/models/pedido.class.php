<?php
class Pedido extends Validator{
	//Declaración de propiedades
	private $id_pedido = null;
	private $estado = null;
	private $fecha = null;
	private $id_cliente = null;
	private $id_empleado = null;

	//Métodos para sobrecarga de propiedades
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
	
	public function setEstado($value){
		if($value == "1" || $value == "0"){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
	}

	public function setFecha($value){
		if($this->validateAlphanumeric($value, 1, 11)){
			$this->fecha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha;
	}

	public function setId_cliente($value){
		if($this->validateId($value)){
			$this->id_cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_cliente(){
		return $this->id_cliente;
	}

	public function setId_empleado($value){
		if($this->validateId($value)){
			$this->id_empleado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_empleado(){
		return $this->id_empleado;
	}


	//Metodos para manejar el CRUD
	public function getPedidos(){
		$sql = "SELECT id_pedido, estado, fecha, nombres, apellidos, nombre_completo FROM pedido INNER JOIN cliente USING(id_cliente) INNER JOIN empleado USING(id_empleado) ORDER BY fecha";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchPedido($value){
		$sql = "SELECT id_pedido, estado, fecha, nombres, apellidos, nombre_completo FROM pedido INNER JOIN cliente USING(id_cliente) INNER JOIN empleado USING(id_empleado) WHERE fecha LIKE ? ORDER BY fecha";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createPedido(){
		$sql = "INSERT INTO pedido(estado, fecha, id_cliente, id_empleado) VALUES (?, ?, ?, ?)";
		$params = array($this->estado, $this->fecha, $this->id_cliente, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}
	public function readPedido(){
		$sql = "SELECT estado, fecha, nombres, apellidos, nombre_completo FROM pedido INNER JOIN cliente USING(id_cliente) INNER JOIN empleado USING(id_empleado) WHERE id_pedido = ?";
		$params = array($this->id_pedido);
		$pedido = Database::getRow($sql, $params);
		if($pedido){
			$this->estado = $pedido['estado'];
			$this->fecha = $pedido['fecha'];
			$this->id_cliente = $pedido['nombres'];
			$this->id_empleado = $pedido['apellidos'];
			$this->id_empleado = $pedido['nombre_completo'];
			return true;
		}else{
			return null;
		}
	}
	public function updatePedido(){
		$sql = "UPDATE pedido SET estado = ?, fecha = ?, id_cliente = ?, id_empleado = ? WHERE id_pedido = ?";
		$params = array($this->estado, $this->fecha, $this->id_cliente, $this->id_empleado, $this->id_pedido);
		return Database::executeRow($sql, $params);
	}
	public function deletePedido(){
		$sql = "DELETE FROM pedido WHERE id_pedido = ?";
		$params = array($this->id_pedido);
		return Database::executeRow($sql, $params);
	}
}
?>