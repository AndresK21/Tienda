<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="../web/css/icon.css" rel="stylesheet">
    <link href="../web/css/googlemaps.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contactanos</title>
  </head>
  <body>
        <header>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
            <li><a href="../public/categoria_aceite.php">Aceite</a></li>
            <li class="divider"></li>
            <li><a href="../public/categoria_agua.php">Agua</a></li>
            </ul>
            <!-- Dropdown Structure Mobile -->
            <ul id="dropdown2" class="dropdown-content">
            <li><a href="../public/categoria_aceite.php">Aceite</a></li>
            <li class="divider"></li>
            <li><a href="../public/categoria_agua.php">Agua</a></li>
            </ul>
            <div class="navbar-fixed">
            <nav>
            <!--Navbar Color Azul-->
                <div class="nav-wrapper  blue">
                <img class="brand-logo" src="../web/img/mipintura.png">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="../public/nosotros.php">Nosotros</a></li>
                    <li><a href="iniciar_sesion.php">Iniciar Sesi&oacute;n</a></li>
                    <li><a href="#!"><i class="material-icons">shopping_cart</i></a></li>
                </ul>
                </div>
            </div>
            </nav>
            <ul class="side-nav" id="mobile-demo">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../public/nosotros.php">Nosotros</a></li>
            <li><a href="contactanos.php">Contactanos</a></li>
            <li><a href="iniciar_sesion.php">Contactanos</a></li>
            <li><a href="#!"> <i class="material-icons new badge">shopping_cart</i>Añadido<span class="new badge">1</span></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </header>
        <main>
            <div class="container">
                <div>
                    <h4 class="center-align">Somos tu mejor opcion</h4>
                </div>
                <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width">
                    <li class="tab col s3"><a class="active" href="#test-swipe-1">Dudas o Comentarios</a></li>
                    <li class="tab col s3"><a href="#test-swipe-2">Ubicacion</a></li>
                </ul>
            <!-- PESTAÑA DE INICIAR SESION -->
                <div id="test-swipe-1" class="col s12 transparent">
                <!-- CONTENEDOR DEl LOGIN -->
                    <div class="container">
                        <div class="row">
                            <!-- FORMULARIO DE USUARIO -->
                            <form class="col s12">
                                <!-- INGRESAR DE USUARIO -->
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="first_name" type="text" class="validate">
                                                <label for="first_name">Nombres Completo</label>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="email" type="email" class="validate">
                                                    <label for="email">Correo</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <form class="col s12">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                            <label for="textarea1">Mensaje</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="row">
                                                <form class="col s12">
                                                    <div class="row">
                                                        <button class="blue btn waves-effect waves-light" type="submit" name="action">Enviar
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>       
                    </div>
                </div>
                <div id="test-swipe-2" class="col s12">
                    <div class="row">
                        <div id="test2" class="col s12">
                            <h4 class="center-align">Ubicacion</h4>
                            <div id="google-map-tab" class="col s12">
                                <!-- GOOGLE MAP -->
                                <div class="col s12">
                                    <div id="googlemaps"></div>
                                    <h6 class="left-align">Para mayor atencion visitanos:
                                            Avenida Aguilares #218, Centro Urbano Libertad.
                                            San Salvador, El Salvador
                                            Tel: (503) 2278-3033
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>
        <footer class="page-footer  blue darken-2" >
            <div class="container">
            <div class="row">
                <div class="col l6 s12">
                <h5 class="white-text center-align">Comun&iacute;cate con nosotros</h5>
                <p class="grey-text text-lighten-4 center-align">Tienes alguna duda o comentario&#63;</p>
                <p class="grey-text text-lighten-4 center-align">Llamanos</p>
                <p class="grey-text text-lighten-4 center-align">(503) 2278-3033</p>
                </div>
                <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Correo electronico</h5>
                <ul>
                    <li><i class="small  material-icons">email</i><a class="grey-text text-lighten-3 valign-wrapper"  href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blanck"> mipintura@gmail.com</a></li>
                </ul>
                </div>
            </div>
            </div>
            <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright DDS
            </div>
            </div>
        </footer>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../web/js/fontawesom.js"></script>
        <script type="text/javascript" src="../web/js/inicial.js"></script>
        <script type="text/javascript" src="../web/js/googlemaps.js"></script>
    </body>
</html>