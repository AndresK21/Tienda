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
        <title>Nosotros</title>
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
                <li><a href="../public/categoria_agua.php">Aceite</a></li>
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
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categor&iacute;as<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a href="../public/contactanos.php">Cont&aacute;ctanos</a></li>
                            <li><a href="iniciar_sesion.php">Iniciar Sesi&oacute;n</a></li>
                            <li><a href="#!"><i class="material-icons">shopping_cart</i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="#!">Nosotros</a></li>
                        <li><a href="contactanos.php">Cont&aacute;ctanos</a></li>
                        <li><a href="iniciar_sesion.php">Iniciar Sesi&oacute;n</a></li>
                        <li><a href="#!"> <i class="material-icons new badge">shopping_cart</i>A&ntilde;adido<span class="new badge">1</span></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Categor&aacute;as<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
        </header>

        <main>
            <div class="container">
                <div>
                    <h2 class="center-align">&iquest;Quienes somos&#63;</h2>
                </div>
                <div style="text-align: justify;">
                    <h5>Somos una empresa de El Salvador que se dedica al comercio detallista y mayorista de productos de pinturas.</h5>
                    <h5>Orgullosos de ser una empresa salvadore&ntilde;a nos honramos de contar con un numeroso personal que labora y aporta experiencia, criterio y esfuerzo a nuestra compa&ntilde;ía, a nuestros proveedores y principalmente a nuestros clientes. Todo ello sobre una base laboral de importantes prestaciones y beneficios que contribuyen a la estabilidad de la empresa y sus puestos de trabajo.</h5>
                    <h5>Relacionarse con Mi Pintura es tener la posibilidad de elegir entre un amplio portafolio de colores e importantes marcas nacionales e internacionales. Es experimentar la importancia de formar parte de nuestro personal, proveedores y clientes.</h5>
                </div>

            </div>

            <!--Parallax de separacion-->
            <div class="parallax-container">
                <div class="parallax"><img src="../web/img/parallax3colores.png"></div>
            </div>

            <div class="container">
                <!--Mision-->
                <div>
                    <h2 class="center-align">Misi&oacute;n</h2>
                </div>
                <div style="text-align: justify;">
                    <h5>Ser al año 2022 una empresa que consolide una propuesta profesional e innovadora en cuanto a productos de pintura, con un planteamiento de formaci&oacute;n, emprendedor, solidario y pertinente al desarrollo regional; en atenci&aacute;n a las necesidades de la población salvadore&ntilde;a.</h5>
                </div>

                <!--Vision-->
                <div>
                    <h2 class="center-align">Visi&oacute;n</h2>
                </div>
                <div style="text-align: justify;">
                    <h5>Somos una empresa dedicada a resolver las necesidades de las personas en cuanto a productos de pintura se refiere, preferentemente a la población salvadore&ntilde;a, mediante nuestros productos de alta calidad, contando con numeroso personal que labora y aporta experiencia, criterio y esfuerzo a nuestra compa&ntilde;&iacute;a y nuestros proveedores.-</h5>
                </div>
            </div>

            <!--Parallax de separacion-->
            <div class="parallax-container">
                <div class="parallax"><img src="../web/img/parallax4colores.jpg"></div>
            </div>

        </main>

        <footer class="page-footer  blue darken-2" >
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text center-align">Comun&iacute;cate con nosotros</h5>
                        <p class="grey-text text-lighten-4 center-align">&iquest;Tienes alguna duda o comentario&#63;</p>
                        <p class="grey-text text-lighten-4 center-align">Ll&aacute;manos</p>
                        <p class="grey-text text-lighten-4 center-align">(503) 2278-3033</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Correo electr&oacute;nico</h5>
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
    </body>
</html>