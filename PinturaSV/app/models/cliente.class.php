<?php
class Cliente extends Validator{
	//Declaración de propiedades
	private $id_cliente = null;
	private $nombres = null;
	private $apellidos = null;
	private $email = null;
	private $nombre_usuario = null;
	private $contrasena = null;

	private $cantidad = null;
	private $fecha = null;
	private $producto = null;
	private $precio = null;
	private $subtotal = null;

	//Métodos para sobrecarga de propiedades
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
	
	public function setNombres($value){
		if($this->validateAlphabetic($value, 1, 120)){
			$this->nombres = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombres(){
		return $this->nombres;
	}

	public function setApellidos($value){
		if($this->validateAlphabetic($value, 1, 120)){
			$this->apellidos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getApellidos(){
		return $this->apellidos;
	}

	public function setEmail($value){
		if($this->validateEmail($value)){
			$this->email = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEmail(){
		return $this->email;
	}

	public function setNombre_usuario($value){
		if($this->validateAlphanumeric($value, 1, 20)){
			$this->nombre_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre_usuario(){
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


	public function setCantidad($value){
		if($this->validateMoney($value)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
	}

	public function setFecha($value){
		if($this->validateAlphanumeric($value)){
			$this->fecha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha;
	}

	public function setProducto($value){
		if($this->validateAlphanumeric($value)){
			$this->producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getProducto(){
		return $this->producto;
	}

	public function setPrecio($value){
		if($this->validateMoney($value)){
			$this->precio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPrecio(){
		return $this->precio;
	}

	public function setSubtotal($value){
		if($this->validateMoney($value)){
			$this->subtotal = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getSubtotal(){
		return $this->subtotal;
	}

	//Métodos para manejar la sesión del usuario
	public function checkUsuario_cliente(){
		$sql = "SELECT id_cliente FROM cliente WHERE nombre_usuario = ?";
		$params = array($this->nombre_usuario);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id_cliente = $data['id_cliente'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword_cliente(){
		$sql = "SELECT contrasena FROM cliente WHERE id_cliente = ?";
		$params = array($this->id_cliente);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->contrasena, $data['contrasena'])){
			return true;
		}else{
			return false;
		}
	}
	public function changePassword_cliente(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "UPDATE cliente SET contrasena = ? WHERE id_cliente = ?";
		$params = array($hash, $this->id_cliente);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getClientes(){
		$sql = "SELECT id_cliente, nombres, apellidos, email, nombre_usuario, contrasena FROM cliente ORDER BY apellidos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getVentas(){
		$sql = "SELECT id_cliente, fecha, detalle_pedido.cantidad, producto.nombre, precio, precio * detalle_pedido.cantidad AS subtotal FROM detalle_pedido INNER JOIN pedido USING(id_pedido) INNER JOIN cliente USING(id_cliente) INNER JOIN producto USING(id_producto) WHERE id_cliente = ?";
		$params = array($this->id_cliente);
		return Database::getRows($sql, $params);
	}
	public function searchCliente($value){
		$sql = "SELECT id_cliente, nombres, apellidos, email, nombre_usuario FROM cliente WHERE nombres LIKE ?  OR apellidos LIKE ? ORDER BY apellidos";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCliente(){
		$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
		$sql = "INSERT INTO cliente(nombres, apellidos, email, nombre_usuario, contrasena) VALUES (?, ?, ?, ?, ?)";
		$params = array($this->nombres, $this->apellidos, $this->email, $this->nombre_usuario, $hash);
		return Database::executeRow($sql, $params);
	}
	public function readCliente(){
		$sql = "SELECT nombres, apellidos, email, nombre_usuario FROM cliente WHERE id_cliente = ?";
		$params = array($this->id_cliente);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombres = $user['nombres'];
			$this->apellidos = $user['apellidos'];
			$this->email = $user['email'];
			$this->nombre_usuario = $user['nombre_usuario'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCliente(){
		$sql = "UPDATE cliente SET nombres = ?, apellidos = ?, email = ?, nombre_usuario = ? WHERE id_cliente = ?";
		$params = array($this->nombres, $this->apellidos, $this->email, $this->nombre_usuario, $this->id_cliente);
		return Database::executeRow($sql, $params);
	}
	public function deleteCliente(){
		$sql = "DELETE FROM cliente WHERE id_cliente = ?";
		$params = array($this->id_cliente);
		return Database::executeRow($sql, $params);
	}
}
?>