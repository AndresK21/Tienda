<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){
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
				<script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
				<!--Let browser know website is optimized for mobile-->
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body>
		");
		if(isset($_SESSION['id_cliente'])){
			print("
				<header class='navbar-fixed'>
					<!-- Dropdown Structure -->
					<ul id='dropdown1' class='dropdown-content'>
						<li><a href='categoria_aceite.php'>Aceite</a></li>
						<li class='divider'></li>
						<li><a href='categoria_agua.php'>Agua</a></li>
					</ul>
					<!-- Dropdown Structure Mobile -->
					<ul id='dropdown2' class='dropdown-content'>
						<li><a href='categoria_aceite.php'>Aceite</a></li>
						<li class='divider'></li>
						<li><a href='categoria_agua.php'>Agua</a></li>
					</ul>
					<!--Navbar Fijo-->
					<div class='navbar-fixed'>
						<nav>
							<!--Navbar Color Azul-->
							<div class='nav-wrapper  blue'>
								<img class='brand-logo' src='../../web/img/mipintura.png'>
								<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
								<ul class='right hide-on-med-and-down'>
								<li><a href='index.php'>Inicio</a></li>
								<li><a class='dropdown-button' href='#!' data-activates='dropdown1'>Categor&iacute;as<i class='material-icons right'>arrow_drop_down</i></a></li>
								<li><a href='nosotros.php'>Nosotros</a></li>
								<li><a href='contactanos.php'>Cont&aacute;ctanos</a></li>
								<li><a href='../cuenta/login.php'>Iniciar Sesi&oacute;n</a></li>
								<li><a href='pagar.php'><i class='material-icons'>shopping_cart</i></a></li>
								</ul>
							</div>
						</nav>
					</div>
				</header>

				<!--Navbar Mobil-->
				<ul class='side-nav' id='mobile-demo'>
					<li><a href='index.php'>Inicio</a></li>
					<li><a href='iniciar_sesion.php'>Iniciar Sesi&oacute;n</a></li>
					<li><a href='nosotros.php'>Nosotros</a></li>
					<li><a href='contactanos.php'>Cont&aacute;ctanos</a></li>
					<li><a href='pagar.php'> <i class='material-icons new badge'>shopping_cart</i>Añadido<span class='new badge'>1</span></a></li>
					<li><a class='dropdown-button' href='#!' data-activates='dropdown2'>Categor&iacute;as<i class='material-icons right'>arrow_drop_down</i></a></li>
					<li>Bienvenido <b>$_SESSION[nombre_usuario]</b></li>
				</ul>

				<main class=''>
					
			");
		}else{
			print("
				<header class='navbar-fixed'>
					<!-- Dropdown Structure -->
					<ul id='dropdown1' class='dropdown-content'>
						<li><a href='categoria_aceite.php'>Aceite</a></li>
						<li class='divider'></li>
						<li><a href='categoria_agua.php'>Agua</a></li>
					</ul>
					<!-- Dropdown Structure Mobile -->
					<ul id='dropdown2' class='dropdown-content'>
						<li><a href='categoria_aceite.php'>Aceite</a></li>
						<li class='divider'></li>
						<li><a href='categoria_agua.php'>Agua</a></li>
					</ul>
					<!--Navbar Fijo-->
					<div class='navbar-fixed'>
						<nav>
							<!--Navbar Color Azul-->
							<div class='nav-wrapper  blue'>
								<img class='brand-logo' src='../../web/img/mipintura.png'>
								<a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
								<ul class='right hide-on-med-and-down'>
								<li><a href='index.php'>Inicio</a></li>
								<li><a class='dropdown-button' href='#!' data-activates='dropdown1'>Categor&iacute;as<i class='material-icons right'>arrow_drop_down</i></a></li>
								<li><a href='nosotros.php'>Nosotros</a></li>
								<li><a href='contactanos.php'>Cont&aacute;ctanos</a></li>
								<li><a href='../cuenta/login.php'>Iniciar Sesi&oacute;n</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</header>

				<!--Navbar Mobil-->
				<ul class='side-nav' id='mobile-demo'>
					<li><a href='index.php'>Inicio</a></li>
					<li><a href='iniciar_sesion.php'>Iniciar Sesi&oacute;n</a></li>
					<li><a href='nosotros.php'>Nosotros</a></li>
					<li><a href='contactanos.php'>Cont&aacute;ctanos</a></li>
					<li><a class='dropdown-button' href='#!' data-activates='dropdown2'>Categor&iacute;as<i class='material-icons right'>arrow_drop_down</i></a></li>
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
			</body>
			</html>
		");
	}
}
?>