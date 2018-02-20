<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Archivo maestro que contiene las referencias-->
        <?php
            include('../app/view/referencias.php');
        ?>
        <title>Dashboard-Perfil</title>
    </head>
    <body>

        <header>
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../app/view/nav_dash.php');
            ?>
        </header>

        <main>

            <div class="white-text">.</div>
            <div class="white-text">.</div>

            <!--Imagen de perfil del usuario-->
            <div class="container">
                <div class="row z-depth-2">
                    <div class="col l6 m6 s12">
                        <img class="responsive-img" src="../web/img/usuario.png">
                        <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    
                    <div class="white-text">.</div>
                    <div class="">
                        <div class="col s12 m6 l6">
                        
                            <!--Formulario de editar perfil-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col l6 m6 s12">
                                            <i class="material-icons prefix">person</i>
                                            <input placeholder="Nombre completo" id="nombre" type="text" class="validate">
                                            <label for="Nombre_completo">Nombre completo</label>
                                        </div>
                                        <div class="input-field col l6 m6 s12">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input placeholder="Usuario" id="descripcion" type="text" class="validate">
                                            <label for="usuario">Usuario</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l6 m6 s12">
                                            <i class="material-icons prefix">email</i>    
                                            <input placeholder="Correo@electronico.com" id="email" type="email" class="validate">
                                            <label for="email">Correo electr&oacute;nico</label>
                                        </div>
                                        <div class="input-field col l6 m6 s12">
                                            <i class="material-icons prefix">lock</i>
                                            <input placeholder="Contraseña antigua" id="contrasena_antigua" type="password" class="validate">
                                            <label for="contrasena_antigua">Contrase&ntilde;a antigua</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l6 m6 s12">
                                            <i class="material-icons prefix">lock</i>
                                            <input placeholder="Contraseña nueva" id="contrasena_nueva" type="password" class="validate">
                                            <label for="contrasena_nueva">Contrase&ntilde;a nueva</label>
                                        </div>
                                        <div class="input-field col l6 m6 s12">
                                            <i class="material-icons prefix">lock</i>
                                            <input placeholder="Confirmar contraseña" id="confirm_contra" type="password" class="validate">
                                            <label for="confirm_contra">confirmar contrase&ntilde;a</label>
                                        </div>
                                    </div>

                                    <div class="white-text">.</div>
                                    <div class="white-text">.</div>

                                    <div class="row">
                                        <div class="col s12 right-align">
                                            <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">save</i>Guardar cambios</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!--Archivo maestro que contiene el footer-->
        <?php
            include('../app/view/footer_dash.php');
        ?>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>