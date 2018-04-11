<?php
class Tipo_p extends Validator{
	//Declaración de propiedades
	private $id_tipo = null;
	private $tipo_p = null;

	//Métodos para sobrecarga de propiedades
	public function setId_tipo($value){
		if($this->validateId($value)){
			$this->id_tipo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo(){
		return $this->id_tipo;
	}
	
	public function setTipo_p($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->tipo_p = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo_p(){
		return $this->tipo_p;
	}


	//Metodos para el manejo del CRUD
	public function getTipo(){
		$sql = "SELECT id_tipo, tipo_p FROM tipo_p ORDER BY tipo_p";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchTipo_p($value){
		$sql = "SELECT * FROM tipo_p WHERE tipo_p LIKE ? ORDER BY tipo_p";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createTipo_p(){
		$sql = 	"INSERT INTO tipo_p(tipo_p) VALUES (?)";
		$params = array($this->tipo_p);
		return Database::executeRow($sql, $params);
	}
	public function readTipo_p(){
		$sql = "SELECT tipo_p FROM tipo_p WHERE id_tipo = ?";
		$params = array($this->id_tipo);
		$tipo = Database::getRow($sql, $params);
		if($tipo){
			$this->tipo_p = $tipo['tipo_p'];
			return true;
		}else{
			return null;
		}
	}
	public function updateTipo_p(){
		$sql = "UPDATE tipo_p SET tipo_p = ? WHERE id_tipo = ?";
		$params = array($this->tipo_p, $this->id_tipo);
		return Database::executeRow($sql, $params);
	}
	public function deleteTipo_p(){
		$sql = "DELETE FROM tipo_p WHERE id_tipo = ?";
		$params = array($this->id_tipo);
		return Database::executeRow($sql, $params);
	}
}
?>