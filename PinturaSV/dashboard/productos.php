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
        <title>Dashboard-Productos</title>
    </head>
    <body>
    <header>
        <div class="navbar-fixed">  
            <nav>
            <!--Navbar Color gris azulado-->
                <div class="nav-wrapper  blue-grey darken-4">
                <img class="brand-logo" src="../web/img/mipintura.png">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="perfiles.html">Usuarios</a></li>
                    <li class="active"><a href="#">Productos</a></li>
                    <li><a class="modal-trigger" href="#modal1Regis">Iniciar Sesi&oacute;n</a></li>
                </ul>
                </div>
            </nav>
        </div>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="perfiles.html">Usuarios</a></li>
                    <li class="active"><a href="#">Productos</a></li>
                    <li><a class="modal-trigger" href="#modal1Regis">Iniciar Sesi&oacute;n</a></li>
                </ul>
    </header>

    <main>
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Buscar producto</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <a class="btn-floating btn-large waves-effect modal-trigger waves-light blue-grey darken-4 right-align espacio_inf" href="#modalProduc"><i class="material-icons ">add</i></a>

            <table class="bordered highlight responsive-table espacio_inf">
                <thead class="blue-grey darken-4 white-text">
                <tr>
                    <th>Imagen</th>
                    <th>Descripci&oacute;n</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><img class="imagen circle" src="../web/img/producto1.jpg"></td>
                    <td>Pintura látex blanco ostra high standard.</td>
                    <td>25</td>
                    <td>$25.</td>
                    <td><i class="material-icons prefix">visibility</i>
                        <a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                        <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                    </td>
                </tr>

                <tr>
                    <td><img class="imagen circle" src="../web/img/producto2.jpg"></td>
                    <td>Pintura pro látex blanco hueso.</td>
                    <td>50</td>
                    <td>$25.00</td>
                    <td><i class="material-icons prefix">visibility</i>
                        <a class="waves-effect waves-light modal-trigger espacio" href="#modal2"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                        <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                    
                    </td>
                </tr>

                <tr>
                    <td><img class="imagen circle" src="../web/img/producto3.jpg"></td>
                    <td>Pintura pro látex marfil.</td>
                    <td>$125</td>
                    <td>$25.00</td>
                    <td><i class="material-icons prefix">visibility</i>
                        <a class="waves-effect waves-light modal-trigger espacio" href="#modal3"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                        <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                    
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

   

        <!-- Modal de producto  nuevo -->
        <div id="modalProduc" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Agregar producto</h4>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="">
                        <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">


                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura látex blanco ostra high standard." id="descripcion" type="text" class="validate">
                                            <label for="Descripcion" class="blue-grey-text text-darken-4">Descripcion</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="25" id="cantidad" type="number" class="validate">
                                            <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="$25.00" id="precio" type="number" class="validate">
                                            <label for="Precio" class="blue-grey-text text-darken-4">Precio</label>
                                        </div>
                                    </div>
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


        <!-- Modal de eliminacion de productos -->
        <div id="modal_eliminar" class="modal">
            <div class="modal-content">
                <h4>Eliminar producto</h4>
                <p>¿Esta seguro que desea eliminar este producto?</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Eliminar</a>
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
                                <label for="nombres" class="blue-grey-text text-darken-4">Nombres</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Perez Gonzales" id="apellidos" type="text" class="validate">
                                <label for="apellidos" class="blue-grey-text text-darken-4">Apellidos</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="35" id="edad" type="number" class="validate">
                                <label for="edad" class="blue-grey-text text-darken-4">Edad</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Administrador" id="cargo" type="text" class="validate">
                                <label for="cargo" class="blue-grey-text text-darken-4">Cargo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Nombre de usuario" id="usuario" type="text" class="validate">
                                <label for="usuario" class="blue-grey-text text-darken-4">Nombre de usuario</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Contraseña" id="contrasena" type="password" class="validate">
                                <label for="contrasena" class="blue-grey-text text-darken-4">Contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="correo@electronico.com" id="email" type="email" class="validate">
                                <label for="email" class="blue-grey-text text-darken-4">Correo electronico</label>
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



        <!-- Modal para prodcuto 1 -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Editar producto</h4>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="../web/img/producto1.jpg">
                        <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">


                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura látex blanco ostra high standard." id="descripcion" type="text" class="validate">
                                            <label for="Descripcion" class="blue-grey-text text-darken-4">Descripcion</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="25" id="cantidad" type="number" class="validate">
                                            <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="$25.00" id="precio" type="number" class="validate">
                                            <label for="Precio" class="blue-grey-text text-darken-4">Precio</label>
                                        </div>
                                    </div>
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


        <!-- Modal para producto 2 -->
        <div id="modal2" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Editar producto</h4>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="../web/img/producto2.jpg">
                        <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">


                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura pro látex blanco hueso." id="descripcion" type="text" class="validate">
                                            <label for="Descripcion" class="blue-grey-text text-darken-4">Descripcion</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="50" id="cantidad" type="number" class="validate">
                                            <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="$25.00" id="precio" type="number" class="validate">
                                            <label for="Precio" class="blue-grey-text text-darken-4">Precio</label>
                                        </div>
                                    </div>
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


        <!-- Modal para producto 3 -->
        <div id="modal3" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Editar producto</h4>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="../web/img/producto3.jpg">
                        <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">


                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura pro látex marfil." id="descripcion" type="text" class="validate">
                                            <label for="Descripcion" class="blue-grey-text text-darken-4">Descripcion</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="125" id="cantidad" type="number" class="validate">
                                            <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="$25.00" id="precio" type="number" class="validate">
                                            <label for="Precio" class="blue-grey-text text-darken-4">Precio</label>
                                        </div>
                                    </div>
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