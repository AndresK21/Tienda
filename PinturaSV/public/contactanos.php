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
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../controllers/view/nav_public.php');
            ?>
        </header>
        <main>
            <div class="container">
                <div>
                    <h4 class="center-align">Somos tu mejor opci&oacute;n</h4>
                </div>
                <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width">
                    <li class="tab col s3"><a class="active" href="#test-swipe-1">Dudas o Comentarios</a></li>
                    <li class="tab col s3"><a href="#test-swipe-2">Ubicaci&oacute;n</a></li>
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
                            <h4 class="center-align">Ubicaci&oacute;n</h4>
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
        </main>
            <!--Archivo maestro que contiene el footer-->
            <?php
                include('../controllers/view/footer_public.php');
            ?>
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