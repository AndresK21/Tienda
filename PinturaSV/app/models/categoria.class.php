<?php
class Categoria extends Validator{
	//Declaración de propiedades
	private $id_categoria = null;
	private $categoria = null;
	private $id_marca = null;

	//Métodos para sobrecarga de propiedades
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
	
	public function setCategoria($value){
		if($this->validateAlphanumeric($value, 1, 80)){
			$this->categoria = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCategoria(){
		return $this->categoria;
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
	public function getCategorias(){
		$sql = "SELECT id_categoria, categoria, marca FROM categoria INNER JOIN marca USING(id_marca) ORDER BY categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getMarcas(){
		$sql = "SELECT id_marca, marca FROM marca ORDER BY marca";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCategoria($value){
		$sql = "SELECT id_categoria, categoria, marca FROM categoria INNER JOIN marca USING(id_marca) WHERE categoria LIKE ? ORDER BY categoria";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCategoria(){
		$sql = "INSERT INTO categoria(categoria, id_marca) VALUES (?, ?)";
		$params = array($this->categoria, $this->id_marca);
		return Database::executeRow($sql, $params);
	}
	public function readCategoria(){
		$sql = "SELECT categoria, marca FROM categoria INNER JOIN marca USING(id_marca) WHERE id_categoria = ?";
		$params = array($this->id_categoria);
		$categoria = Database::getRow($sql, $params);
		if($categoria){
			$this->categoria = $categoria['categoria'];
			$this->id_marca = $categoria['marca'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCategoria(){
		$sql = "UPDATE categoria SET categoria= ?, id_marca= ? WHERE id_categoria = ?";
		$params = array($this->categoria, $this->id_marca, $this->id_categoria);
		return Database::executeRow($sql, $params);
	}
	public function deleteCategoria(){
		$sql = "DELETE FROM categoria WHERE id_categoria = ?";
		$params = array($this->id_categoria);
		return Database::executeRow($sql, $params);
	}
}
?>