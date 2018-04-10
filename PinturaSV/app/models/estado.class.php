<?php
class Categoria extends Validator{
	//Declaración de propiedades
	private $id_estado = null;
	private $estado = null;

	//Métodos para sobrecarga de propiedades
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
	
	public function setEstado($value){
		if($this->validateAlphanumeric($value, 1, 20)){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
	}

	//Metodos para el manejo del CRUD
	public function getEstados(){
		$sql = "SELECT id_estado, estado FROM estado ORDER BY estado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchEstado($value){
		$sql = "SELECT * FROM estado WHERE estado LIKE ? ORDER BY estado";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createEstado(){
		$sql = "INSERT INTO estado(estado) VALUES (?)";
		$params = array($this->estado);
		return Database::executeRow($sql, $params);
	}
	public function readEstado(){
		$sql = "SELECT estado FROM estado WHERE id_estado = ?";
		$params = array($this->id_estado);
		$estado = Database::getRow($sql, $params);
		if($estado){
			$this->estado = $estado['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateEstado(){
		$sql = "UPDATE estado SET estado= ? WHERE id_estado = ?";
		$params = array($this->estado, $this->id_estado);
		return Database::executeRow($sql, $params);
	}
	public function deleteEstado(){
		$sql = "DELETE FROM estado WHERE id_estado = ?";
		$params = array($this->id_estado);
		return Database::executeRow($sql, $params);
	}
}
?>