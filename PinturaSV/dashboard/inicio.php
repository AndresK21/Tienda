<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="../web/css/icon.css" rel="stylesheet">
        <link href="../web/css/style.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Dashboard-Iniciar sesi&oacute;n</title>
    </head>
    <body>

        <header>
            <div class="navbar-fixed">  
                <nav>
                <!--Navbar Color gris azulado-->
                    <div class="nav-wrapper  blue-grey darken-4">
                    <img class="brand-logo" src="../web/img/mipintura.png">
                    </div>
                </nav>
            </div>
        </header>

        <main>
            


            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card grey lighten-4">
                            <div class="card-content">
                                <span class="card-title">Iniciar sesi&oacute;n</span>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="usuario" type="text" class="validate">
                                            <label class="blue-grey-text text-darken-4" for="usuario">Nombre de usuario</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="contrasena" type="text" class="validate">
                                            <label class="blue-grey-text text-darken-4" for="contrasena">Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-action blue-grey-text text-darken-4">
                                <a href="dashboard.php">Iniciar sesi&oacute;n</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>

        <?php
            include('../controllers/view/footer_dash.php');
        ?>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>