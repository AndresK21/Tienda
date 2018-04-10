<?php
class Categoria extends Validator{
	//Declaración de propiedades
	private $id_presentacion = null;
	private $presentacion = null;
	private $id_tipo = null;

	//Métodos para sobrecarga de propiedades
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
	
	public function setPresentacion($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->presentacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPresentacion(){
		return $this->presentacion;
	}

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

	//Metodos para el manejo del CRUD
	public function getPresentaciones(){
		$sql = "SELECT id_presentacion, presentacion, id_tipo FROM presentaciones ORDER BY presentacion";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchPresentacion($value){
		$sql = "SELECT * FROM presentaciones WHERE presentacion LIKE ? ORDER BY presentacion";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createPresentacion(){
		$sql = "INSERT INTO presentaciones(presentacion, id_tipo) VALUES (?, ?)";
		$params = array($this->presentacion, $this->id_marca);
		return Database::executeRow($sql, $params);
	}
	public function readPresentacion(){
		$sql = "SELECT presentacion, id_tipo FROM presentaciones WHERE id_presentacion = ?";
		$params = array($this->id_presentacion);
		$presentacion = Database::getRow($sql, $params);
		if($presentacion){
			$this->presentacion = $presentacion['presentacion'];
			$this->id_tipo = $presentacion['id_tipo'];
			return true;
		}else{
			return null;
		}
	}
	public function updatePresentacion(){
		$sql = "UPDATE presentaciones SET presentacion = ?, id_tipo = ? WHERE id_presentacion = ?";
		$params = array($this->presentacion, $this->id_tipo, $this->id_presentacion);
		return Database::executeRow($sql, $params);
	}
	public function deletePresentacion(){
		$sql = "DELETE FROM presentaciones WHERE id_presentacion = ?";
		$params = array($this->id_presentacion);
		return Database::executeRow($sql, $params);
	}
}
?>