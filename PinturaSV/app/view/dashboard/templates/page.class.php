<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/empleado.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_name("pagina_dashboard");
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>Dashboard - $title</title>
				<link type='text/css' rel='stylesheet' href='../../css/materialize.min.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/icon.css'/>
				<link type='text/css' rel='stylesheet' href='../../web/css/dashboard.css'/>
				<script type='text/javascript' src='../../web/js/Chart.bundle.min.js'></script>
				<script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body>
		");
		if(isset($_SESSION['id_empleado_d']) && ($_SESSION['id_permiso_d']) == 2){
			$empleado = new Empleado;

			/*if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)){
				$ip= $_SERVER['HTTP_CLIENT_IP'];
			}*/ //Para usar en un hosting

			$ip = getenv('REMOTE_ADDR');
			
			if($empleado->setId_empleado($_SESSION['id_empleado_d'])){//Establece el id empleado para obtener los registros del empleado
				if($empleado->readEmpleado()){
					if($empleado->getIp() == null){
						$empleado->setIp($ip);
						$empleado->insertIp();
					}						
					//if($ip == $empleado->getIp()){

						$fechaGuardada = $_SESSION["ultimoAcceso_d"];  
						$ahora = time();  
						$tiempo_transcurrido = $ahora-$fechaGuardada;   

						//comparamos el tiempo transcurrido  
						if($tiempo_transcurrido >= 300) {  
							//si pasaron 10 minutos o más  
							$empleado->unsetIp($_SESSION['nombre_usuario_d']);
							session_destroy(); // destruyo la sesión
							print("
								<header>
									<div class='navbar-fixed'>  
										<nav>
										<!--Navbar Color gris azulado-->
											<div class='nav-wrapper  blue-grey darken-4'>
											<img class='brand-logo' src='../../web/img/mipintura.png'>
											</div>
										</nav>
									</div>
								</header>
									<main class=''>
								");
							Page::showMessage(3, "Se ha cerrado la sesión por tiempo de inactividad", "index.php"); //envío al usuario a la pag. de autenticación  
							//sino, actualizo la fecha de la sesión  
						}else{  
							$_SESSION["ultimoAcceso_d"] = $ahora;
							
							$hoy = date('Y-m-d h:i:s');
							$hoy2 = new DateTime($hoy);
							if($empleado->setId_empleado($_SESSION['id_empleado_d'])){//Establece el id empleado para obtener los registros del empleado
								if($empleado->readEmpleado()){
									$fecha1 = new DateTime($empleado->getFecha());
									$tiempo = $fecha1->diff($hoy2);
									if($tiempo->d >= 90){
										print("
											<header>
												<div class='navbar-fixed'>  
													<nav>
													<!--Navbar Color gris azulado-->
														<div class='nav-wrapper  blue-grey darken-4'>
														<img class='brand-logo' src='../../web/img/mipintura.png'>
														</div>
													</nav>
												</div>
											</header>
												<main class=''>
											");
											self::showMessage(3, "¡Debe cambiar su contraseña!", "../cuenta/password2.php");
											self::templateFooter();
											exit;						
									}else{
										print("
											<header class='navbar-fixed'>
												<!-- Dropdown Structure -->
												<ul id='dropdown1' class='dropdown-content'>
													<li><a href='../cuenta/profile.php'>Editar perfil</a></li>
													<li class='divider'></li>
													<li><a href='../cuenta/password.php'>Cambiar contrase&ntilde;a</a></li>
													<li class='divider'></li>
													<li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
												</ul>
												<!-- Dropdown Structure Mobile -->
												<ul id='dropdown2' class='dropdown-content'>
													<li><a href='../cuenta/profile.php'>Editar perfil</a></li>
													<li class='divider'></li>
													<li><a href='../cuenta/password.php'>Cambiar contrase&ntilde;a</a></li>
													<li class='divider'></li>
													<li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
												</ul>
												
												<div class='navbar-fixed'>  
													<nav>
													<!--Navbar Color gris azulado-->
														<div class='nav-wrapper  blue-grey darken-4'>
														<img class='brand-logo' src='../../web/img/mipintura.png'>
														<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
														<ul class='right hide-on-med-and-down'>
															<li><a href='../cuenta/index.php'>Dashboard</a></li>
															<li><a href='../usuarios/index.php'>Usuarios</a></li>
															<li><a href='../clientes/index.php'>Clientes</a></li>
															<li><a href='../producto/index.php'>Productos</a></li>
															<li><a class='dropdown-button' href='#!' data-activates='dropdown1'>Bienvenido <b>$_SESSION[nombre_usuario_d]</b><i class='material-icons right'>arrow_drop_down</i></a></li>
														</ul>
														</div>
													</nav>
												</div>
											</header>

											<ul class='side-nav' id='mobile-demo'>
												<li><a href='../cuenta/index.php'>Dashboard</a></li>
												<li><a href='../usuarios/index.php'>Usuarios</a></li>
												<li><a href='../clientes/index.php'>Clientes</a></li>
												<li><a href='../producto/index.php'>Productos</a></li>
												<li><a class='dropdown-button' href='#!' data-activates='dropdown2'>Bienvenido <b>$_SESSION[nombre_usuario_d]</b><i class='material-icons right'>arrow_drop_down</i></a></li>
											</ul>

											<main class=''>
												
										");
										printf('%d años, %d meses, %d días, %d horas, %d minutos', $tiempo->y, $tiempo->m, $tiempo->d, $tiempo->h, $tiempo->i);
									}
								}
							}
						}

					/*}else{
						print("
							<header>
								<div class='navbar-fixed'>  
									<nav>
									<!--Navbar Color gris azulado-->
										<div class='nav-wrapper  blue-grey darken-4'>
										<img class='brand-logo' src='../../web/img/mipintura.png'>
										</div>
									</nav>
								</div>
							</header>
								<main class=''>
							");
							session_destroy();
							self::showMessage(3, "¡Esta cuenta esta iniciada en otro terminal!", "../cuenta/correo.php");
							self::templateFooter();
							exit;
					}*/
				}
			}

			
		}else if(isset($_SESSION['id_empleado_d']) && ($_SESSION['id_permiso_d']) == 3){
			$empleado = new Empleado;

			/*if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)){
				$ip= $_SERVER['HTTP_CLIENT_IP'];
			}*/ //Para usar en un hosting

			$ip = getenv('REMOTE_ADDR');
			
			if($empleado->setId_empleado($_SESSION['id_empleado_d'])){//Establece el id empleado para obtener los registros del empleado
				if($empleado->readEmpleado()){
					if($empleado->getIp() == null){
						$empleado->setIp($ip);
						$empleado->insertIp();
					}						
					//if($ip == $empleado->getIp()){

						$fechaGuardada = $_SESSION["ultimoAcceso_d"];  
						$ahora = time();
						$tiempo_transcurrido = $ahora-$fechaGuardada;
						//comparamos el tiempo transcurrido  
						if($tiempo_transcurrido >= 300) {  
							//si pasaron 10 minutos o más  
							$empleado->unsetIp($_SESSION['nombre_usuario_d']);
							session_destroy(); // destruyo la sesión
							print("
								<header>
									<div class='navbar-fixed'>  
										<nav>
										<!--Navbar Color gris azulado-->
											<div class='nav-wrapper  blue-grey darken-4'>
											<img class='brand-logo' src='../../web/img/mipintura.png'>
											</div>
										</nav>
									</div>
								</header>
									<main class=''>
								");
							Page::showMessage(3, "Se ha cerrado la sesión por tiempo de inactividad", "index.php"); //envío al usuario a la pag. de autenticación  
							//sino, actualizo la fecha de la sesión  
						}else{  
							$_SESSION["ultimoAcceso_d"] = $ahora;
							
							$hoy = date('Y-m-d h:i:s');
							$hoy2 = new DateTime($hoy);
							if($empleado->setId_empleado($_SESSION['id_empleado_d'])){//Establece el id empleado para obtener los registros del empleado
								if($empleado->readEmpleado()){
									$fecha1 = new DateTime($empleado->getFecha());
									$tiempo = $fecha1->diff($hoy2);
									if($tiempo->d >= 90){
										print("
											<header>
												<div class='navbar-fixed'>  
													<nav>
													<!--Navbar Color gris azulado-->
														<div class='nav-wrapper  blue-grey darken-4'>
														<img class='brand-logo' src='../../web/img/mipintura.png'>
														</div>
													</nav>
												</div>
											</header>
												<main class=''>
											");
											self::showMessage(3, "¡Debe cambiar su contraseña!", "../cuenta/password2.php");
											self::templateFooter();
											exit;						
									}else{
										print("
											<header class='navbar-fixed'>
												<!-- Dropdown Structure -->
												<ul id='dropdown1' class='dropdown-content'>
													<li><a href='../cuenta/profile.php'>Editar perfil</a></li>
													<li class='divider'></li>
													<li><a href='../cuenta/password.php'>Cambiar contrase&ntilde;a</a></li>
													<li class='divider'></li>
													<li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
												</ul>
												<!-- Dropdown Structure Mobile -->
												<ul id='dropdown2' class='dropdown-content'>
													<li><a href='../cuenta/profile.php'>Editar perfil</a></li>
													<li class='divider'></li>
													<li><a href='../cuenta/password.php'>Cambiar contrase&ntilde;a</a></li>
													<li class='divider'></li>
													<li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
												</ul>
												
												<div class='navbar-fixed'>  
													<nav>
													<!--Navbar Color gris azulado-->
														<div class='nav-wrapper  blue-grey darken-4'>
														<img class='brand-logo' src='../../web/img/mipintura.png'>
														<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
														<ul class='right hide-on-med-and-down'>
															<li><a href='../cuenta/index.php'>Dashboard</a></li>
															<li><a href='../usuarios/index.php'>Usuarios</a></li>
															<li><a href='../clientes/index.php'>Clientes</a></li>
															<li><a href='../producto/index.php'>Productos</a></li>
															<li><a class='dropdown-button' href='#!' data-activates='dropdown1'>Bienvenido <b>$_SESSION[nombre_usuario_d]</b><i class='material-icons right'>arrow_drop_down</i></a></li>
														</ul>
														</div>
													</nav>
												</div>
											</header>

											<ul class='side-nav' id='mobile-demo'>
												<li><a href='../cuenta/index.php'>Dashboard</a></li>
												<li><a href='../usuarios/index.php'>Usuarios</a></li>
												<li><a href='../clientes/index.php'>Clientes</a></li>
												<li><a href='../producto/index.php'>Productos</a></li>
												<li><a class='dropdown-button' href='#!' data-activates='dropdown2'>Bienvenido <b>$_SESSION[nombre_usuario_d]</b><i class='material-icons right'>arrow_drop_down</i></a></li>
											</ul>

											<main class=''>
												
										");
										printf('%d años, %d meses, %d días, %d horas, %d minutos', $tiempo->y, $tiempo->m, $tiempo->d, $tiempo->h, $tiempo->i);
									}
								}
							}
						}

					/*}else{
						print("
							<header>
								<div class='navbar-fixed'>  
									<nav>
									<!--Navbar Color gris azulado-->
										<div class='nav-wrapper  blue-grey darken-4'>
										<img class='brand-logo' src='../../web/img/mipintura.png'>
										</div>
									</nav>
								</div>
							</header>
								<main class=''>
							");
							session_destroy();
							self::showMessage(3, "¡Esta cuenta esta iniciada en otro terminal!", "../cuenta/correo.php");
							self::templateFooter();
							exit;
					}*/
				}
			}

		}else{
			$empleado = new Empleado;
			print("
			<header>
				<div class='navbar-fixed'>  
					<nav>
					<!--Navbar Color gris azulado-->
						<div class='nav-wrapper  blue-grey darken-4'>
						<img class='brand-logo' src='../../web/img/mipintura.png'>
						</div>
					</nav>
				</div>
			</header>
				<main class=''>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php" && $filename != "correo.php"){
				self::showMessage(3, "¡Debe iniciar sesión!", "../cuenta/login.php");
				self::templateFooter();
				exit;
			}else{
				print("");
			}
		}
	}

	public static function templateFooter(){
		print("
				</main>
				<footer class='page-footer  blue-grey darken-4'>
					<div class='container'>
						<div class='row'>
						<div class='col l6 s12'>
							<h5 class='white-text center-align'>Comun&iacute;cate con nosotros</h5>
								<p class='grey-text text-lighten-4 center-align'>Ll&aacute;manos</p>
								<p class='grey-text text-lighten-4 center-align'>(503) 2277-7777</p>
						</div>
						<div class='col l4 offset-l2 s12'>
							<h5 class='white-text'>Correo electr&oacute;nico</h5>
							<ul>
								<li><i class='small  material-icons'>email</i><a class='grey-text text-lighten-3 valign-wrapper'  href='https://mail.google.com/mail/u/0/#inbox?compose=new' target='_blanck'> desarrolladores@gmail.com</a></li>
							</ul>
						</div>
						</div>
					</div>
					<div class='footer-copyright'>
						<div class='container'>
							© 2018 Copyright DDS
						</div>
					</div>
				</footer>
				<!--Import jQuery before materialize.js-->
				<script type='text/javascript' src='../../web/js/jquery-3.2.1.min.js'></script>
        		<script type='text/javascript' src='../../web/js/main.js'></script>
				<script type='text/javascript' src='../../web/js/ini.js'></script>
				<script type='text/javascript' src='../../js/materialize.min.js'></script>
			</body>
			</html>
		");
	}
}
?>