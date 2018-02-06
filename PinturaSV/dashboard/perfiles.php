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
        <title>Dashboard-Usuarios</title>
    </head>
    <body>
        <header>
            <?php
                include('../controllers/view/nav_dash.php');
            ?>
        </header>

        <main>
            <div class="row">
                <div class="col s6">

                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="../web/img/usuario.png">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">


                                <div class="row">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input placeholder="Nombres" id="nombres" type="text" class="validate">
                                                <label for="nombres" class="blue-grey-text text-darken-4">Nombres</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input placeholder="Apellidos" id="apellidos" type="text" class="validate">
                                                <label for="apellidos" class="blue-grey-text text-darken-4">Apellidos</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input placeholder="25" id="edad" type="number" class="validate">
                                                <label for="edad" class="blue-grey-text text-darken-4">Edad</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input placeholder="Administrador" id="cargo" type="text" class="validate">
                                                <label for="cargo" class="blue-grey-text text-darken-4">Cargo</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input placeholder="Nombre de usuario" id="usuario" type="text" class="validate">
                                                <label for="usuario" class="blue-grey-text text-darken-4">Nombre de usuario</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input placeholder="correo@electronico.com" id="email" type="email" class="validate">
                                                <label for="email" class="blue-grey-text text-darken-4">Correo electronico</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="col s6">
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <div class="">
                                    <div class="input-field">
                                    <i class="material-icons blue-grey-text text-darken-4 prefix">search</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input" class="blue-grey-text text-darken-4">Buscar usuario</label>
                                    </div>
                                </div>
                                
                                <ul class="collection ">
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                    <li class="collection-item "><div>Nombre de usuario<a href="#modal1" class="secondary-content waves-effect waves-light modal-trigger"><i class="material-icons blue-grey-text text-darken-4 prefix">delete</i></a></div></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal de eliminacion de usuarios -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Eliminar usuario</h4>
                    <p>¿Esta seguro que desea eliminar este usuario?</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Eliminar</a>
                </div>
            </div>


            <!-- Modal de registrarse -->
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