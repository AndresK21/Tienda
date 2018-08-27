<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/cliente.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_name("pagina_publica");
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>Public - $title</title>
				<!--Import Google Icon Font-->
				<link href='../../web/css/icon.css' rel='stylesheet'>
				<link href='../../web/css/style.css' rel='stylesheet'>
				<!--Import materialize.css-->
				<link type='text/css' rel='stylesheet' href='../../css/materialize.min.css'  media='screen,projection'/>
				<link href='../../web/css/googlemaps.css' rel='stylesheet'>
				<link rel='stylesheet' href='../../web/css/valoraciones.css'>
				<script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
				<script src='https://www.google.com/recaptcha/api.js'></script>
				<!--Let browser know website is optimized for mobile-->
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body>
		");
		if(isset($_SESSION['id_cliente_p'])){
			$cliente = new Cliente;	

			/*if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)){
				$ip= $_SERVER['HTTP_CLIENT_IP'];
			}*/ //Para usar en un hosting

			$ip = getenv('REMOTE_ADDR');
			
			if($cliente->setId_cliente($_SESSION['id_cliente_p'])){//Establece el id empleado para obtener los registros del empleado
				if($cliente->readCliente()){
					if($cliente->getIp() == null){
						$cliente->setIp($ip);
						$cliente->insertIp();
					}						
					//if($ip == $empleado->getIp()){

						$fechaGuardada = $_SESSION["ultimoAcceso_p"];  
						$ahora = time();  
						$tiempo_transcurrido = $ahora-$fechaGuardada;   

						//comparamos el tiempo transcurrido  
						if($tiempo_transcurrido >= 300) { 
							//si pasaron 10 minutos o más  
							$cliente->unsetIp($_SESSION['nombre_usuario_p']);
							session_destroy(); // destruyo la sesión
							print("
							<header class='navbar-fixed'>
					
							<!--Navbar Fijo-->
							<div class='navbar-fixed'>
								<nav>
									<!--Navbar Color Azul-->
									<div class='nav-wrapper  blue'>
										<img class='brand-logo' src='../../web/img/mipintura.png'>
										<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
										<ul class='right hide-on-med-and-down'>
										<li><a href='../index/index.php'>Inicio</a></li>
										<li><a href='../categorias/categorias.php'>Categor&iacute;as</a></li>
										<li><a href='../nosotros/index.php'>Nosotros</a></li>
										<li><a href='../contactanos/index.php'>Cont&aacute;ctanos</a></li>
										<li><a href='../cuenta/login.php'>Iniciar Sesi&oacute;n</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</header>
		
						<!--Navbar Mobil-->
						<ul class='side-nav' id='mobile-demo'>
							<li><a href='index.php'>Inicio</a></li>
							<li><a href='../categorias/categorias.php'>Categor&iacute;as</a></li>
							<li><a href='../nosotros.php'>Nosotros</a></li>
							<li><a href='../contactanos.php'>Cont&aacute;ctanos</a></li>
							<li><a href='../cuenta/login.php'>Iniciar Sesi&oacute;n</a></li>
						</ul>
		
						<main class=''>
								");
							Page::showMessage(3, "Se ha cerrado la sesión por tiempo de inactividad", "index.php"); //envío al usuario a la pag. de autenticación  
							//sino, actualizo la fecha de la sesión  
						}else{  
							$_SESSION["ultimoAcceso_p"] = $ahora;
							
							$hoy = date('Y-m-d h:i:s');
							$hoy2 = new DateTime($hoy);
							if($cliente->setId_cliente($_SESSION['id_cliente_p'])){//Establece el id empleado para obtener los registros del empleado
								if($cliente->readCliente()){
									$fecha1 = new DateTime($cliente->getFecha());
									$tiempo = $fecha1->diff($hoy2);
									if($tiempo->m >= 3){
										print("
										<header class='navbar-fixed'>
					
										<!--Navbar Fijo-->
										<div class='navbar-fixed'>
											<nav>
												<!--Navbar Color Azul-->
												<div class='nav-wrapper  blue'>
													<img class='brand-logo' src='../../web/img/mipintura.png'>
													<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
													<ul class='right hide-on-med-and-down'>
													<li><a href='../index/index.php'>Inicio</a></li>
													<li><a href='../categorias/categorias.php'>Categor&iacute;as</a></li>
													<li><a href='../nosotros/index.php'>Nosotros</a></li>
													<li><a href='../contactanos/index.php'>Cont&aacute;ctanos</a></li>
													<li><a href='../cuenta/login.php'>Iniciar Sesi&oacute;n</a></li>
													</ul>
												</div>
											</nav>
										</div>
									</header>
					
									<!--Navbar Mobil-->
									<ul class='side-nav' id='mobile-demo'>
										<li><a href='index.php'>Inicio</a></li>
										<li><a href='../categorias/categorias.php'>Categor&iacute;as</a></li>
										<li><a href='../nosotros.php'>Nosotros</a></li>
										<li><a href='../contactanos.php'>Cont&aacute;ctanos</a></li>
										<li><a href='../cuenta/login.php'>Iniciar Sesi&oacute;n</a></li>
									</ul>
					
									<main class=''>
											");
											self::showMessage(3, "¡Debe cambiar su contraseña!", "../cuenta/password2.php");
											self::templateFooter();
											exit;						
									}else{
										print("
										<!-- Dropdown Structure -->
										<ul id='dropdown3' class='dropdown-content'>
											<li><a href='../cuenta/profile.php'>Editar perfil</a></li>
											<li class='divider'></li>
											<li><a href='../cuenta/password.php'>Cambiar contrase&ntilde;a</a></li>
											<li class='divider'></li>
											<li><a href='../cuenta/compras.php'>Compras realizadas</a></li>
											<li class='divider'></li>
											<li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
										</ul>
										<!-- Dropdown Structure Mobile -->
										<ul id='dropdown4' class='dropdown-content'>
											<li><a href='../cuenta/profile.php'>Editar perfil</a></li>
											<li class='divider'></li>
											<li><a href='../cuenta/password.php'>Cambiar contrase&ntilde;a</a></li>
											<li class='divider'></li>
											<li><a href='../cuenta/compras.php'>Compras realizadas</a></li>
											<li class='divider'></li>
											<li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
										</ul>
					
										<!--Navbar Fijo-->
										<div class='navbar-fixed'>
											<nav>
												<!--Navbar Color Azul-->
												<div class='nav-wrapper  blue'>
													<img class='brand-logo' src='../../web/img/mipintura.png'>
													<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
													<ul class='right hide-on-med-and-down'>
													<li><a href='../index/index.php'>Inicio</a></li>
													<li><a href='../categorias/categorias.php'>Categor&iacute;as</a></li>
													<li><a href='../nosotros/index.php'>Nosotros</a></li>
													<li><a href='../contactanos/index.php'>Cont&aacute;ctanos</a></li>
													<li><a href='../carrito/index.php'><i class='material-icons'>shopping_cart</i></a></li>
													<li><a class='dropdown-button' href='#!' data-activates='dropdown3'>Bienvenido <b>$_SESSION[nombre_usuario_p]</b><i class='material-icons right'>arrow_drop_down</i></a></li>
													</ul>
												</div>
											</nav>
										</div>
									</header>
					
									<!--Navbar Mobil-->
									<ul class='side-nav' id='mobile-demo'>
										<li><a href='index.php'>Inicio</a></li>
										<li><a href='../categorias/categorias.php'>Categor&iacute;as</a></li>
										<li><a href='../nosotros/index.php'>Nosotros</a></li>
										<li><a href='../contactanos/index.php'>Cont&aacute;ctanos</a></li>
										<li><a href='../carrito/index.php'> <i class='material-icons new badge'>shopping_cart</i>Añadido<span class='new badge'>1</span></a></li>
										<li><a class='dropdown-button' href='#!' data-activates='dropdown4'>Bienvenido <b>$_SESSION[nombre_usuario_p]</b><i class='material-icons right'>arrow_drop_down</i></a></li>
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
			print("
				<header class='navbar-fixed'>
					
					<!--Navbar Fijo-->
					<div class='navbar-fixed'>
						<nav>
							<!--Navbar Color Azul-->
							<div class='nav-wrapper  blue'>
								<img class='brand-logo' src='../../web/img/mipintura.png'>
								<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
								<ul class='right hide-on-med-and-down'>
								<li><a href='../index/index.php'>Inicio</a></li>
								<li><a href='../categorias/categorias.php'>Categor&iacute;as</a></li>
								<li><a href='../nosotros/index.php'>Nosotros</a></li>
								<li><a href='../contactanos/index.php'>Cont&aacute;ctanos</a></li>
								<li><a href='../cuenta/login.php'>Iniciar Sesi&oacute;n</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</header>

				<!--Navbar Mobil-->
				<ul class='side-nav' id='mobile-demo'>
					<li><a href='index.php'>Inicio</a></li>
					<li><a href='../categorias/categorias.php'>Categor&iacute;as</a></li>
					<li><a href='../nosotros.php'>Nosotros</a></li>
					<li><a href='../contactanos.php'>Cont&aacute;ctanos</a></li>
					<li><a href='../cuenta/login.php'>Iniciar Sesi&oacute;n</a></li>
				</ul>

				<main class=''>
					
			");
		}
	}

	public static function templateFooter(){
		print("
				</main>
				<footer class='page-footer  blue darken-2' >
					<div class='container'>
						<div class='row'>
						<div class='col l6 s12'>
							<h5 class='white-text center-align'>Comun&iacute;cate con nosotros</h5>
							<p class='grey-text text-lighten-4 center-align'>&iquest;Tienes alguna duda o comentario&#63;</p>
							<p class='grey-text text-lighten-4 center-align'>Ll&aacute;manos</p>
							<p class='grey-text text-lighten-4 center-align'>&#40; &#53;&#48;&#51; &#41; &#50;&#50;&#55;&#56; &#45; &#51;&#48;&#51;&#51;</p>
						</div>
						<div class='col l4 offset-l2 s12'>
							<h5 class='white-text'>Correo electr&oacute;nico</h5>
							<ul>
							<li><i class='small  material-icons'>email</i><a class='grey-text text-lighten-3 valign-wrapper'  href='https://mail.google.com/mail/u/0/#inbox?compose=new' target='_blanck'> mipintura@gmail.com</a></li>
							</ul>
						</div>
						</div>
					</div>
					<div class='footer-copyright'>
						<div class='container'>
							&#169; 2018 Copyright DDS
						</div>
					</div>
				</footer>
				<!--Import jQuery before materialize.js-->
				<script type='text/javascript' src='../../web/js/jquery-3.2.1.min.js'></script>
        		<script type='text/javascript' src='../../web/js/main.js'></script>
        		<script type='text/javascript' src='../../web/js/ini.js'></script>
				<script type='text/javascript' src='../../js/materialize.min.js'></script>
				<script type='text/javascript' src='../../web/js/fontawesom.js'></script>
        		<script type='text/javascript' src='../../web/js/inicial.js'></script>
				<script type='text/javascript' src='../../web/js/googlemaps.js'></script>
				
			</body>
			</html>
		");
	}
}
?>