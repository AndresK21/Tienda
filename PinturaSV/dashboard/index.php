<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
            include('../app/view/public/referencias.php');
        ?>
        <title>Dashboard-Iniciar sesi&oacute;n</title>
    </head>
    <body class="imagen_fondo">

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
            
            <!--Formulario de inicio de sesion-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6 offset-l3 offset-m3">
                        <div class="card grey lighten-4">
                            <div class="card-content">
                                <span class="card-title"><h4>Iniciar sesi&oacute;n</h4></span>
                                <div class="center-align">
                                <div class="row">
                                    <img class="responsive-img circle" src="../web/img/pintura.jpg">
                                    <div class="input-field col s12">
                                        <input id="usuario" type="text" class="validate">
                                        <label class="blue-grey-text text-darken-4" for="usuario">Nombre de usuario</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="contrasena" type="text" class="validate">
                                        <label class="blue-grey-text text-darken-4" for="contrasena">Contrase&ntilde;a</label>
                                    </div>
                                </div>
                            </div>
                            <div class="left-align">
                                <a class="modal-trigger" href="#modal_contra">&iquest;Olvido su contrase&ntilde;a&#63;</a>
                            </div>
                            <div class="right-align">
                                <a href="dashboard.php" class="btn blue-grey darken-4">Iniciar sesi&oacute;n</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal de editar tipo de producto -->
            <div id="modal_contra" class="modal">
                <div class="modal-content">
                    <h4>Recuperar contrase&ntilde;a</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario para editar el tipo de producto-->
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="tipo" type="text" class="validate">
                                                <label for="tipo" class="blue-grey-text text-darken-4">Correo electr&oacute;nico</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Enviar</a>
                </div>
            </div>

        </main>

        <!--Archivo maestro que contiene el footer-->
        <?php
            include('../app/view/dashboard/footer_dash.php');
        ?>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>