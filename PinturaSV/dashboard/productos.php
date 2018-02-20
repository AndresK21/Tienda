<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Archivo maestro que contiene las referencias-->
        <?php
            include('../app/view/referencias.php');
        ?>
        <title>Dashboard-Productos</title>
    </head>
    <body>
    <header>
        <!--Archivo maestro que contiene la barra de navegacion-->
        <?php
            include('../app/view/nav_dash.php');
        ?>
    </header>

    <main>
        
        <!--Tabs para separar cada categoria en la que se puede ingresar informacion-->
        <div class="row">
            <div class="col s12">
                <ul class="tabs blue-grey-text text-darken-4">
                    <li class="tab col s3"><a class="active blue-grey-text text-darken-4" href="#test1">Productos</a></li>
                    <li class="tab col s2"><a class="blue-grey-text text-darken-4" href="#test2">Marca</a></li>
                    <li class="tab col s2"><a class="blue-grey-text text-darken-4" href="#test3">Categor&Iacute;a</a></li>
                    <li class="tab col s3"><a class="blue-grey-text text-darken-4" href="#test4">Presentaciones</a></li>
                    <li class="tab col s2"><a class="blue-grey-text text-darken-4" href="#test5">Tipo de producto</a></li>
                </ul>
            </div>

            <!--Contenido del tab de productos-->
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
            
                <!--Boton fijo en la pantalla para agregar nuevos productos-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo producto" href="#modalProduc">
                        <i class="large material-icons">add</i>
                    </a>
                </div>


                <div class="container">
                    <!--Parte de clasificacion de la tabla-->
                    <table class="bordered highlight responsive-table espacio_inf">
                        <thead class="blue-grey darken-4 white-text">
                            <tr>
                                <th>Imagen</th>
                                <th>Descripci&oacute;n</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Presentaci&oacute;n</th>
                                <th>Existencias</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                        <!--Producto de ejemplo 1-->
                            <tr>
                                <td><img class="imagen circle" src="../web/img/producto1.jpg"></td>
                                <td>Pintura l&aacute;tex blanco ostra high standard.</td>
                                <td>25</td>
                                <td>$25.00</td>
                                <td>Cubeta</td>
                                <td>
                                    <p>
                                        <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                                        <label class="white-text" for="test7">.</label>
                                    </p>
                                </td>
                                <td><i class="material-icons prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Visible/Invisible">visibility</i>
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar producto" href="#modal1"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td><img class="imagen circle" src="../web/img/producto2.jpg"></td>
                                <td>Pintura pro l&aacute;tex blanco hueso.</td>
                                <td>50</td>
                                <td>$25.00</td>
                                <td>Cubeta</td>
                                <td></td>
                                <td><i class="material-icons prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Visible/Invisible">visibility</i>
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar producto" href="#modal2"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                            <!--Producto de ejemplo 3-->
                            <tr>
                                <td><img class="imagen circle" src="../web/img/producto3.jpg"></td>
                                <td>Pintura pro l&aacute;tex marfil.</td>
                                <td>125</td>
                                <td>$25.00</td>
                                <td>Cubeta</td>
                                <td>
                                    <p>
                                        <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                                        <label class="white-text" for="test7">.</label>
                                    </p>
                                </td>
                                <td><i class="material-icons prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Visible/Invisible">visibility</i>
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar producto" href="#modal3"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            
            
            <!--Contenido del tab de marcas-->
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
            
                <!--Boton fijo en la pantalla para agregar nuevos marcas-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva marca" href="#modal_marca">
                        <i class="large material-icons">add</i>
                    </a>
                </div>

                <div class="container">
                    <!--Parte de clasificacion de la tabla-->
                    <table class="bordered highlight responsive-table espacio_inf">
                        <thead class="blue-grey darken-4 white-text">
                            <tr>
                                <th>Nombre de marca</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!--Producto de ejemplo 1-->
                            <tr>
                                <td>Benjamin Moore.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar marca" href="#modal_marca_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar marca" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td>Ace royal.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar marca" href="#modal_marca_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar marca" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                            <!--Producto de ejemplo 3-->
                            <tr>
                                <td>Freshaire choice.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar marca" href="#modal_marca_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar marca" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>


            <!--Contenido del tab de categorias-->
            <div id="test3" class="col s12">
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar categor&iacute;a</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!--Boton fijo en la pantalla para agregar nuevas categorias-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva categoria" href="#modal_categoria">
                        <i class="large material-icons">add</i>
                    </a>
                </div>

                <div class="container">
                    <!--Parte de clasificacion de la tabla-->
                    <table class="bordered highlight responsive-table espacio_inf">
                        <thead class="blue-grey darken-4 white-text">
                            <tr>
                                <th>Categor&iacute;a</th>
                                <th>Marca</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!--Producto de ejemplo 1-->
                            <tr>
                                <td>Premium</td>
                                <td>Benjamin Moore.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar categoría" href="#modal_categoria_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar categoría" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td>Est&aacute;ndar.</td>
                                <td>Ace royal.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar categoría" href="#modal_categoria_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar categoría" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                            <!--Producto de ejemplo 3-->
                            <tr>
                                <td>Impermeable</td>
                                <td>Freshaire choice</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar categoría" href="#modal_categoria_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar categoría" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>


            <!--Contenido del tab de presentacioness-->
            <div id="test4" class="col s12">
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar presentaci&oacute;n</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!--Boton fijo en la pantalla para agregar nuevas presentaciones-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva presentación" href="#modal_presen">
                        <i class="large material-icons">add</i>
                    </a>
                </div>

                <div class="container">
                    <!--Parte de clasificacion de la tabla-->
                    <table class="bordered highlight responsive-table espacio_inf">
                        <thead class="blue-grey darken-4 white-text">
                            <tr>
                                <th>Presentaci&oacute;n</th>
                                <th>Tipo de producto</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!--Producto de ejemplo 1-->
                            <tr>
                                <td>Cubeta</td>
                                <td>Pintura</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar presentación" href="#modal_presen_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar presentación" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td>Galones</td>
                                <td>Pintura</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar presentación" href="#modal_presen_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar presentación" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                            <!--Producto de ejemplo 3-->
                            <tr>
                                <td>Litros</td>
                                <td>Pintura</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar presentación" href="#modal_presen_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar presentación" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>


            <!--Contenido del tab de tipo de producto-->
            <div id="test5" class="col s12">
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar tipo de producto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!--Boton fijo en la pantalla para agregar nuevos tipos de productos-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de producto" href="#modal_tipo_produc">
                        <i class="large material-icons">add</i>
                    </a>
                </div>

                <div class="container">
                    <!--Parte de clasificacion de la tabla-->
                    <table class="bordered highlight responsive-table espacio_inf">
                        <thead class="blue-grey darken-4 white-text">
                            <tr>
                                <th>Tipo de producto</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!--Producto de ejemplo 1-->
                            <tr>
                                <td>Pintura.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar tipo de producto" href="#modal_tipo_produc_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar tipo de producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td>Brochas.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar tipo de producto" href="#modal_tipo_produc_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar tipo de producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                            <!--Producto de ejemplo 3-->
                            <tr>
                                <td>Contenedores.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar tipo de producto" href="#modal_tipo_produc_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar tipo de producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>

        </div>




        <!-- Modal de agregar nuevo -->
        <div id="modalProduc" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Agregar producto</h4>
                <div class="card horizontal">
                    <!--Lugar donde se insertara la imagen del producto-->
                    <div class="card-image">
                        <img src="">
                        <a class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para insertar los productos-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura látex blanco ostra high standard." id="descripcion" type="text" class="validate">
                                            <label for="Descripcion" class="blue-grey-text text-darken-4">Descripci&oacute;n</label>
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
                                            <input placeholder="Rojo" id="color" type="text" class="validate">
                                            <label for="color" class="blue-grey-text text-darken-4">Color</label>
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
                                                <option value="" disabled selected>Elija una categor&iacute;a</option>
                                                <option value="1">Categor&iacute;a 1</option>
                                                <option value="2">Categor&iacute;a 2</option>
                                                <option value="3">Categor&iacute;a 3</option>
                                            </select>
                                            <label class="blue-grey-text text-darken-4">Categor&iacute;a</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                                                <option value="1">Presentaci&oacute;n 1</option>
                                                <option value="2">Presentaci&oacute;n 2</option>
                                                <option value="3">Presentaci&oacute;n 3</option>
                                            </select>
                                            <label class="blue-grey-text text-darken-4">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="opc1"  />
                                        <label for="opc1">En existencia</label>    
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="opc2"  />
                                        <label for="opc2">Sin existencias</label>    
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


        <!-- Modal de marca nueva -->
        <div id="modal_marca" class="modal">
            <div class="modal-content">
                <h4>Agregar marca</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para insertar marcas-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Comex" id="marca" type="text" class="validate">
                                            <label for="marca" class="blue-grey-text text-darken-4">Marca</label>
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


        <!-- Modal de categoria nueva -->
        <div id="modal_categoria" class="modal">
            <div class="modal-content">
                <h4>Agregar categor&iacute;a</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para insertar las categorias-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Premium" id="categoria" type="text" class="validate">
                                            <label for="categoria" class="blue-grey-text text-darken-4">Categoria</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una marca</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Marca</label>
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


        <!-- Modal de presentacion nueva -->
        <div id="modal_presen" class="modal">
            <div class="modal-content">
                <h4>Agregar presentaci&oacute;n</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">
                            
                            <!--Formulario para insertar las presentaciones-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Cubeta" id="presen" type="text" class="validate">
                                            <label for="presen" class="blue-grey-text text-darken-4">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija un tipo de producto</option>
                                            <option value="1">Tipo de producto 1</option>
                                            <option value="2">Tipo de producto 2</option>
                                            <option value="3">Tipo de producto 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Tipo de producto</label>
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


        <!-- Modal de tipo de producto nueva -->
        <div id="modal_tipo_produc" class="modal">
            <div class="modal-content">
                <h4>Agregar tipo de producto</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para insertar los tipos de productos-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura" id="tipo" type="text" class="validate">
                                            <label for="tipo" class="blue-grey-text text-darken-4">Tipo de producto</label>
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


        <!-- Modal de eliminacion de elementos -->
        <div id="modal_eliminar" class="modal">
            <div class="modal-content">
                <h4>Eliminar elemento</h4>
                <p>&iquest;Esta seguro que desea eliminar este elemento&#63;</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Eliminar</a>
            </div>
        </div>


        <!-- Modal para editar prodcuto 1 -->
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

                            <!--Formulario para editar el producto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura látex blanco ostra high standard." id="descripcion" type="text" class="validate">
                                            <label for="Descripcion" class="blue-grey-text text-darken-4">Descripci&oacute;n</label>
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
                                            <input placeholder="Rojo" id="color" type="text" class="validate">
                                            <label for="color" class="blue-grey-text text-darken-4">Color</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una marca</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Marca</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una categor&iacute;a</option>
                                            <option value="1">Categor&iacute;a 1</option>
                                            <option value="2">Categor&iacute;a 2</option>
                                            <option value="3">Categor&iacute;a 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Categor&iacute;a</label>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                                                <option value="1">Presentaci&oacute;n 1</option>
                                                <option value="2">Presentaci&oacute;n 2</option>
                                                <option value="3">Presentaci&oacute;n 3</option>
                                            </select>
                                            <label class="blue-grey-text text-darken-4">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="with-gap" name="group2" type="radio" id="opc3"  />
                                        <label for="opc3">En existencia</label>    
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group2" type="radio" id="opc4"  />
                                        <label for="opc4">Sin existencias</label>    
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

                            <!--Formulario para editar el producto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura pro látex blanco hueso." id="descripcion" type="text" class="validate">
                                            <label for="Descripcion" class="blue-grey-text text-darken-4">Descripci&oacute;n</label>
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
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Rojo" id="color" type="text" class="validate">
                                            <label for="color" class="blue-grey-text text-darken-4">Color</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una marca</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Marca</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una categor&iacute;a</option>
                                            <option value="1">Categor&iacute;a 1</option>
                                            <option value="2">Categor&iacute;a 2</option>
                                            <option value="3">Categor&iacute;a 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Categor&iacute;a</label>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                                                <option value="1">Presentaci&oacute;n 1</option>
                                                <option value="2">Presentaci&oacute;n 2</option>
                                                <option value="3">Presentaci&oacute;n 3</option>
                                            </select>
                                            <label class="blue-grey-text text-darken-4">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="with-gap" name="group3" type="radio" id="opc5"  />
                                        <label for="opc5">En existencia</label>    
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group3" type="radio" id="opc6"  />
                                        <label for="opc6">Sin existencias</label>    
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

                            <!--Formulario para editar el producto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura pro látex marfil." id="descripcion" type="text" class="validate">
                                            <label for="Descripcion" class="blue-grey-text text-darken-4">Descripci&oacute;n</label>
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
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Rojo" id="color" type="text" class="validate">
                                            <label for="color" class="blue-grey-text text-darken-4">Color</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una marca</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Marca</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una categor&iacute;a</option>
                                            <option value="1">Categor&iacute;a 1</option>
                                            <option value="2">Categor&iacute;a 2</option>
                                            <option value="3">Categor&iacute;a 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Categor&iacute;a</label>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                                                <option value="1">Presentaci&oacute;n 1</option>
                                                <option value="2">Presentaci&oacute;n 2</option>
                                                <option value="3">Presentaci&oacute;n 3</option>
                                            </select>
                                            <label class="blue-grey-text text-darken-4">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="with-gap" name="group4" type="radio" id="opc7"  />
                                        <label for="opc7">En existencia</label>    
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group4" type="radio" id="opc8"  />
                                        <label for="opc8">Sin existencias</label>    
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


        <!-- Modal de editar marca -->
        <div id="modal_marca_edit" class="modal">
            <div class="modal-content">
                <h4>Editar marca</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar la marca-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Comex" id="marca" type="text" class="validate">
                                            <label for="marca" class="blue-grey-text text-darken-4">Marca</label>
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


        <!-- Modal de editar categoria -->
        <div id="modal_categoria_edit" class="modal">
            <div class="modal-content">
                <h4>Editar categor&iacute;a</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar la categoria-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Premium" id="categoria" type="text" class="validate">
                                            <label for="categoria" class="blue-grey-text text-darken-4">Categor&iacute;a</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una marca</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Marca</label>
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


        <!-- Modal de editar presentacion -->
        <div id="modal_presen_edit" class="modal">
            <div class="modal-content">
                <h4>Editar presentaci&oacute;n</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar la presentacion-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Cubeta" id="presen" type="text" class="validate">
                                            <label for="presen" class="blue-grey-text text-darken-4">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija un tipo de producto</option>
                                            <option value="1">Tipo de producto 1</option>
                                            <option value="2">Tipo de producto 2</option>
                                            <option value="3">Tipo de producto 3</option>
                                        </select>
                                        <label class="blue-grey-text text-darken-4">Tipo de producto</label>
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


        <!-- Modal de editar tipo de producto -->
        <div id="modal_tipo_produc_edit" class="modal">
            <div class="modal-content">
                <h4>Editar tipo de producto</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar el tipo de producto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Pintura" id="tipo" type="text" class="validate">
                                            <label for="tipo" class="blue-grey-text text-darken-4">Tipo de producto</label>
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