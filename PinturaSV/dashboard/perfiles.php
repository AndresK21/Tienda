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
        <title>Dashboard-Usuarios</title>
    </head>
    <body>
        <header>
            <?php
                include('../controllers/view/nav_dash.php');
            ?>
        </header>

        <main>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large modal-trigger blue-grey darken-3" href="#modal2">
                    <i class="large material-icons">add</i>
                </a>
            </div>

            <div class="row">
                <div class="col s6">

                    <div class="card horizontal fijo">
                        <div class="card-image">
                            <img src="../web/img/usuario.png">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">


                                <div class="row">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="nombres" class="blue-grey-text text-darken-4">Nombre completo</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="usuario" class="blue-grey-text text-darken-4">Nombre de usuario</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="email" class="blue-grey-text text-darken-4">Correo electronico</label>
                                            </div>
                                        </div>
                                        <p>
                                            <input class="with-gap" name="group1" type="radio" id="opc1"  />
                                            <label for="opc1">Administrador</label>    
                                        </p>
                                        <p>
                                            <input class="with-gap" name="group1" type="radio" id="opc2"  />
                                            <label for="opc2">Empleado</label>    
                                        </p>
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
                                
                                <table class="bordered highlight responsive-table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Nombre de usuario</td>
                                        <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nombre de usuario</td>
                                        <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nombre de usuario</td>
                                        <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nombre de usuario</td>
                                        <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nombre de usuario</td>
                                        <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nombre de usuario</td>
                                        <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nombre de usuario</td>
                                        <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>
                                    </tr>
                                    </tbody>
                                </table>

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


            <!-- Modal de usuario nueva -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h4>Agregar nuevo usuario</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <div class="row">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="nombre" type="text" class="validate">
                                                <label for="nombree" class="blue-grey-text text-darken-4">Nombre completo</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="usuario" type="text" class="validate">
                                                <label for="usuario" class="blue-grey-text text-darken-4">Nombre de usuario</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="contrasena" type="text" class="validate">
                                                <label for="contrasena" class="blue-grey-text text-darken-4">Contraseña</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="correo" type="email" class="validate">
                                                <label for="correo" class="blue-grey-text text-darken-4">Correo electr&oacute;nico</label>
                                            </div>
                                        </div>
                                        <p>
                                            <input class="with-gap" name="group1" type="radio" id="opc1"  />
                                            <label for="opc1">Administrador</label>    
                                        </p>
                                        <p>
                                            <input class="with-gap" name="group1" type="radio" id="opc2"  />
                                            <label for="opc2">Empleado</label>    
                                        </p>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Descartar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Guardar</a>
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