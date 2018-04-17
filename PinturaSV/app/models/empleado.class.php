<?php
class Empleado extends Validator{
	//Declaración de propiedades
	private $id_empleado = null;
	private $nombre_completo = null;
	private $correo_electronico = null;
	private $nombre_usuario = null;
	private $contrasena = null;
	private $imagen = null;
	private $id_permiso = null;

	//Métodos para sobrecarga de propiedades
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
	
	public function setNombre($value){
		if($this->validateAlphabetic($value, 1, 200)){
			$this->nombre_completo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre_completo;
	}

	public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->correo_electronico = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->correo_electronico;
	}

	public function setUsuario($value){
		if($this->validateAlphanumeric($value, 1, 20)){
			$this->nombre_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getUsuario(){
		return $this->nombre_usuario;
	}

	public function setContrasena($value){
		if($this->validatePassword($value)){
			$this->contrasena = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getContrasena(){
		return $this->contrasena;
	}

	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/empleados/", 500, 500)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function unsetImagen(){
		if(unlink("../../../img/empleados/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}

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

	//Métodos para manejar la sesión del usuario
	public function checkUsuarios(){
		$sql = "SELECT id_empleado FROM empleado WHERE nombre_usuario = ?";
		$params = array($this->nombre_usuario);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id_empleado = $data['id_empleado'];
			return true;
		}else{
			return false;
		}
	}
	public function checkContrasena(){
		$sql = "SELECT contrasena FROM empleado WHERE id_empleado = ?";
		$params = array($this->id_empleado);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->contrasena, $data['contrasena'])){
			return true;
		}else{
			return false;
		}
	}
	public function changeContrasena(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "UPDATE empleado SET contrasena = ? WHERE id_empleado = ?";
		$params = array($hash, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getEmpleados(){
		$sql = "SELECT id_empleado, nombre_completo, correo_electronico, nombre_usuario, contrasena, imagen, id_permiso FROM empleado ORDER BY nombre_completo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchEmpleado($value){
		$sql = "SELECT id_empleado, nombre_completo, correo_electronico, nombre_usuario, imagen, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE nombre_completo LIKE ? ORDER BY nombre_completo";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createEmpleado(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "INSERT INTO empleado(nombre_completo, correo_electronico, nombre_usuario, contrasena, imagen, id_permiso) VALUES (?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre_completo, $this->correo_electronico, $this->nombre_usuario, $hash, $this->imagen, $this->id_permiso);
		return Database::executeRow($sql, $params);
	}
	public function readEmpleado(){
		$sql = "SELECT nombre_completo, correo_electronico, nombre_usuario, imagen, permiso FROM empleado INNER JOIN permisos USING(id_permiso) WHERE id_empleado = ?";
		$params = array($this->id_empleado);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombre_completo = $user['nombre_completo'];
			$this->correo_electronico = $user['correo_electronico'];
			$this->nombre_usuario = $user['nombre_usuario'];
			$this->imagen = $user['imagen'];
			$this->id_permiso = $user['permiso'];
			return true;
		}else{
			return null;
		}
	}
	public function updateEmpleado(){
		$sql = "UPDATE empleado SET nombre_completo = ?, correo_electronico = ?, nombre_usuario = ?, imagen = ?, id_permiso= ? WHERE id_empleado = ?";
		$params = array($this->nombre_completo, $this->correo_electronico, $this->nombre_usuario, $this->imagen, $this->id_permiso, $this->id_empleado);
		return Database::executeRow($sql, $params);
	}
	public function deleteEmpleado(){
		$sql = "DELETE FROM empleado WHERE id_empleado = ?";
		$params = array($this->id_empleado);
		return Database::executeRow($sql, $params);
	}
}
?>