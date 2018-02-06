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
        <?php
            include('../controllers/view/nav_dash.php');
        ?>
    </header>

    <main>
        

        <div class="row">
            <div class="col s12">
                <ul class="tabs blue-grey-text text-darken-4">
                    <li class="tab col s3"><a class="active blue-grey-text text-darken-4" href="#test1">Productos</a></li>
                    <li class="tab col s3"><a class="blue-grey-text text-darken-4" href="#test2">Marca</a></li>
                    <li class="tab col s3"><a class="blue-grey-text text-darken-4" href="#test3">Categoria</a></li>
                    <li class="tab col s3"><a class="blue-grey-text text-darken-4" href="#test4">Color</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
            
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


            </div>
            <div id="test2" class="col s12">
            
            
            
            
            
            
            
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar marca</label>
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
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                            </td>
                        </tr>

                        <tr>
                            <td><img class="imagen circle" src="../web/img/producto2.jpg"></td>
                            <td>Pintura pro látex blanco hueso.</td>
                            <td>50</td>
                            <td>$25.00</td>
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal2"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                            
                            </td>
                        </tr>

                        <tr>
                            <td><img class="imagen circle" src="../web/img/producto3.jpg"></td>
                            <td>Pintura pro látex marfil.</td>
                            <td>$125</td>
                            <td>$25.00</td>
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal3"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            
            
            
            
            
            
            
            
            
            
            </div>
            <div id="test3" class="col s12">
            
            
            
            
            
            
            
            
            
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar categoria</label>
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
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                            </td>
                        </tr>

                        <tr>
                            <td><img class="imagen circle" src="../web/img/producto2.jpg"></td>
                            <td>Pintura pro látex blanco hueso.</td>
                            <td>50</td>
                            <td>$25.00</td>
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal2"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                            
                            </td>
                        </tr>

                        <tr>
                            <td><img class="imagen circle" src="../web/img/producto3.jpg"></td>
                            <td>Pintura pro látex marfil.</td>
                            <td>$125</td>
                            <td>$25.00</td>
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal3"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            
            
            
            
            
            
            
            
            
            </div>
            <div id="test4" class="col s12">
            
            
            
            
            
            
            
            
            
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar color</label>
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
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal1"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                            </td>
                        </tr>

                        <tr>
                            <td><img class="imagen circle" src="../web/img/producto2.jpg"></td>
                            <td>Pintura pro látex blanco hueso.</td>
                            <td>50</td>
                            <td>$25.00</td>
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal2"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                            
                            </td>
                        </tr>

                        <tr>
                            <td><img class="imagen circle" src="../web/img/producto3.jpg"></td>
                            <td>Pintura pro látex marfil.</td>
                            <td>$125</td>
                            <td>$25.00</td>
                            <td><a class="waves-effect waves-light modal-trigger espacio" href="#modal3"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                <a class="waves-effect waves-light modal-trigger espacio" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            
            
            
            
            
            
            
            
            
            
            </div>
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
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una marca</option>
                                                <option value="1">Marca 1</option>
                                                <option value="2">Marca 2</option>
                                                <option value="3">Marca 3</option>
                                            </select>
                                            <label class="blue-grey-text text-darken-4">Marca</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una categoria</option>
                                                <option value="1">Categoria 1</option>
                                                <option value="2">Categoria 2</option>
                                                <option value="3">Categoria 3</option>
                                            </select>
                                            <label class="blue-grey-text text-darken-4">Categoria</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija un color</option>
                                                <option value="1">Color 1</option>
                                                <option value="2">Color 2</option>
                                                <option value="3">Color 3</option>
                                            </select>
                                            <label class="blue-grey-text text-darken-4">Color</label>
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