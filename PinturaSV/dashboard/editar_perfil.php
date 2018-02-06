<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="../web/css/icon.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Dashboard-Perfil</title>
    </head>
    <body>

        <header>
            <?php
                include('../controllers/view/nav_dash.php');
            ?>
        </header>

        <main>
            <div class="container">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="../web/img/usuario.png">
                        <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">


                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">person</i>
                                            <input placeholder="Nombre completo" id="nombre" type="text" class="validate">
                                            <label for="Nombre_completo">Nombre completo</label>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">lock</i>
                                                <input placeholder="Contraseña antigua" id="contrasena_antigua" type="password" class="validate">
                                                <label for="contrasena_antigua">Contraseña antigua</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input placeholder="Usuario" id="descripcion" type="text" class="validate">
                                            <label for="usuario">Usuario</label>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">lock</i>
                                                <input placeholder="Contraseña nueva" id="contrasena_nueva" type="password" class="validate">
                                                <label for="contrasena_nueva">Contraseña nueva</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">email</i>    
                                            <input placeholder="Correo@electronico.com" id="email" type="email" class="validate">
                                            <label for="email">Correo electronico</label>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">lock</i>
                                                <input placeholder="Confirmar contraseña" id="confirm_contra" type="password" class="validate">
                                                <label for="confirm_contra">confirmar contraseña</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">save</i>Confirmar cambios</a>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Modal de registro de usuarios -->
            <div id="modal1Regis" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>Registrarse</h4>
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="Juan Carlos" id="nombres" type="text" class="validate">
                                    <label for="nombres">Nombres</label>
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder="Perez Gonzales" id="apellidos" type="text" class="validate">
                                    <label for="apellidos">Apellidos</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="35" id="edad" type="number" class="validate">
                                    <label for="edad">Edad</label>
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder="Administrador" id="cargo" type="text" class="validate">
                                    <label for="cargo">Cargo</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="Nombre de usuario" id="usuario" type="text" class="validate">
                                    <label for="usuario">Nombre de usuario</label>
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder="Contraseña" id="contrasena" type="password" class="validate">
                                    <label for="contrasena">Contraseña</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="correo@electronico.com" id="email" type="email" class="validate">
                                    <label for="email">Correo electronico</label>
                                </div>                            
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Iniciar sesion</a>
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