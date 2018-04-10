<?php
class Categoria extends Validator{
	//Declaración de propiedades
	private $id_permiso = null;
	private $permiso = null;

	//Métodos para sobrecarga de propiedades
	public function setId_permiso($value){
		if($this->validateId($value)){
			$this->id_permiso = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_permiso(){
		return $this->id_permiso;
	}
	
	public function setPermiso($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->marca = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPermiso(){
		return $this->permiso;
	}


	//Metodos para el manejo del CRUD
	public function getPermisos(){
		$sql = "SELECT id_permiso, permiso FROM permisos ORDER BY permiso";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchpermiso($value){
		$sql = "SELECT * FROM permisos WHERE permiso LIKE ? ORDER BY permiso";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createPermiso(){
		$sql = 	"INSERT INTO permisos(permiso) VALUES (?)";
		$params = array($this->permiso);
		return Database::executeRow($sql, $params);
	}
	public function readPermiso(){
		$sql = "SELECT permiso FROM permisos WHERE id_permiso = ?";
		$params = array($this->id_permiso);
		$permiso = Database::getRow($sql, $params);
		if($permiso){
			$this->permiso = $permiso['permiso'];
			return true;
		}else{
			return null;
		}
	}
	public function updatePermiso(){
		$sql = "UPDATE permisos SET permiso = ? WHERE id_permiso = ?";
		$params = array($this->permiso, $this->id_permiso);
		return Database::executeRow($sql, $params);
	}
	public function deletePermiso(){
		$sql = "DELETE FROM permisos WHERE id_permiso = ?";
		$params = array($this->id_permiso);
		return Database::executeRow($sql, $params);
	}
}
?>