<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Archivo maestro que contiene las referencias-->
        <?php
            include('../app/view/referencias.php');
        ?>
        <title>Dashboard-Usuarios</title>
    </head>
    <body>
        <header>
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../app/view/nav_dash.php');
            ?>
        </header>

        <main>

            <!--Boton fijo en la pantalla para agregar nuevos usuarios-->
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo usuario" href="#modal2">
                    <i class="large material-icons">add</i>
                </a>
            </div>

            <div class="container">
                <!--Mitad de la pantalla donde solo se mostrara la informacion del usuario-->
                <div class="row">

                    <!--muestra la lista de usuarios existentes-->
                    <div class="col s12">

                        <div class="">
                            <div class="input-field">
                            <i class="material-icons blue-grey-text text-darken-4 prefix">search</i>
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input" class="blue-grey-text text-darken-4">Buscar usuario</label>
                            </div>
                        </div>
                            
                            <table class="bordered highlight responsive-table z-depth-2">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="modal-trigger espacio" href="#modal5">Nombre de usuario</td>
                                    <td><a class="waves-effect waves-light modal-trigger " href="#modal1"><i class="material-icons red-text text-darken-3 prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar usuario">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td class="modal-trigger espacio" href="#modal5">Nombre de usuario</td>
                                    <td><a class="waves-effect waves-light modal-trigger " href="#modal1"><i class="material-icons red-text text-darken-3 prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar usuario">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td class="modal-trigger espacio" href="#modal5">Nombre de usuario</td>
                                    <td><a class="waves-effect waves-light modal-trigger " href="#modal1"><i class="material-icons red-text text-darken-3 prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar usuario">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td class="modal-trigger espacio" href="#modal5">Nombre de usuario</td>
                                    <td><a class="waves-effect waves-light modal-trigger " href="#modal1"><i class="material-icons red-text text-darken-3 prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar usuario">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td class="modal-trigger espacio" href="#modal5">Nombre de usuario</td>
                                    <td><a class="waves-effect waves-light modal-trigger " href="#modal1"><i class="material-icons red-text text-darken-3 prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar usuario">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td class="modal-trigger espacio" href="#modal5">Nombre de usuario</td>
                                    <td><a class="waves-effect waves-light modal-trigger " href="#modal1"><i class="material-icons red-text text-darken-3 prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar usuario">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td class="modal-trigger espacio" href="#modal5">Nombre de usuario</td>
                                    <td><a class="waves-effect waves-light modal-trigger " href="#modal1"><i class="material-icons red-text text-darken-3 prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar usuario">delete</i></a></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal de eliminacion de usuarios -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Eliminar usuario</h4>
                    <p>&iquest;Esta seguro que desea eliminar este usuario&#63;</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Eliminar</a>
                </div>
            </div>


            <!-- Modal de usuario nuevo -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h4>Agregar nuevo usuario</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario para ingresar nuevo usuario-->
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
                                                <label for="contrasena" class="blue-grey-text text-darken-4">Contrase&ntilde;a</label>
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
            

            <!-- Modal informacion de usuarios -->
            <div id="modal5" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>Informaci&oacute;n del usuario</h4>
                    <!--Imagen de perfil del usuario-->
                    <div class="card horizontal">
                        <div class="card-image">
                            <img class="responsive-img" src="../web/img/usuario.png">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario ineditable donde se muestra la informacion del usuario-->
                                <div class="">
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
                                                <label for="email" class="blue-grey-text text-darken-4">Correo electr&oacute;nico</label>
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
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
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