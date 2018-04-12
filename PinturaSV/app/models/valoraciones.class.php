<?php
class Valoraciones extends Validator{
	//Declaración de propiedades
	private $id_valoracion = null;
	private $estrellas = null;
	private $comentario = null;
	private $id_prodcuto = null;

	//Métodos para sobrecarga de propiedades
	public function setId_valoracion($value){
		if($this->validateId($value)){
			$this->id_valoracion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_valoracion(){
		return $this->id_valoracion;
	}
	
	public function setEstrellas($value){
		if($this->validateAlphanumeric($value)){
			$this->estrellas = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstrellas(){
		return $this->estrellas;
	}

	public function setComentario($value){
		if($this->validateAlphanumeric($value, 1, 280)){
			$this->comentario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getComentario(){
		return $this->comentario;
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


	//Metodos para manejar el CRUD
	public function getValoraciones(){
		$sql = "SELECT id_valoracion, estrellas, comentario, id_producto FROM valoraciones ORDER BY estrellas";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchValoracion($value){
		$sql = "SELECT id_valoracion, estrellas, comentario, nombre FROM valoraciones INNER JOIN productos USING(id_productos) WHERE estrellas LIKE ? OR comentario LIKE ? ORDER BY estrellas";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createValoracion(){
		$sql = "INSERT INTO valoraciones(estrellas, comentario, id_producto) VALUES (?, ?, ?)";
		$params = array($this->estrellas, $this->comentario, $this->id_producto);
		return Database::executeRow($sql, $params);
	}
	public function readValoracion(){
		$sql = "SELECT estrellas, comentario, id_producto FROM valoraciones WHERE id_valoracion = ?";
		$params = array($this->id_valoracion);
		$valoracion = Database::getRow($sql, $params);
		if($valoracion){
			$this->estrellas = $valoracion['estrellas'];
			$this->comentario = $valoracion['comentario'];
			$this->id_producto = $valoracion['id_producto'];
			return true;
		}else{
			return null;
		}
	}
	public function updateValoracion(){
		$sql = "UPDATE valoraciones SET estrellas = ?, comentario = ?, id_producto = ? WHERE id_valoracion = ?";
		$params = array($this->estrellas, $this->comentario, $this->id_producto, $this->id_valoracion);
		return Database::executeRow($sql, $params);
	}
	public function deleteValoracion(){
		$sql = "DELETE FROM valoraciones WHERE id_valoracion = ?";
		$params = array($this->id_valoracion);
		return Database::executeRow($sql, $params);
	}
}
?>