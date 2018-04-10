<?php
class Categoria extends Validator{
	//Declaración de propiedades
	private $id_marca = null;
	private $marca = null;

	//Métodos para sobrecarga de propiedades
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
	
	public function setMarca($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->marca = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getMarca(){
		return $this->marca;
	}


	//Metodos para el manejo del CRUD
	public function getMarcas(){
		$sql = "SELECT id_marca, marca FROM marca ORDER BY marca";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchMarca($value){
		$sql = "SELECT * FROM marca WHERE marca LIKE ? ORDER BY marca";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createMarca(){
		$sql = 	"INSERT INTO marca(marca) VALUES (?)";
		$params = array($this->marca);
		return Database::executeRow($sql, $params);
	}
	public function readMarca(){
		$sql = "SELECT marca FROM marca WHERE id_marca = ?";
		$params = array($this->id_marca);
		$marca = Database::getRow($sql, $params);
		if($marca){
			$this->marca = $marca['marca'];
			return true;
		}else{
			return null;
		}
	}
	public function updateMarca(){
		$sql = "UPDATE marca SET marca = ? WHERE id_marca = ?";
		$params = array($this->marca, $this->id_marca);
		return Database::executeRow($sql, $params);
	}
	public function deleteMarca(){
		$sql = "DELETE FROM marca WHERE id_marca = ?";
		$params = array($this->id_marca);
		return Database::executeRow($sql, $params);
	}
}
?>