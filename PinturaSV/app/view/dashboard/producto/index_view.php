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
                <form method='post'>
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_producto' class="autocomplete">
                                <label for="buscar_label">Buscar producto</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_producto' class='btn waves-effect blue-gray tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>

        <!--Boton fijo en la pantalla para agregar nuevos productos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo producto" href="create.php">
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
                    <?php
                    if($data_productos){
                        foreach($data_productos as $producto){
                            print("
                            <tr>
                                <td><img src='../../web/img/productos/$producto[imagen]' class='materialboxed' width='50' height='50'></td>
                                <td>$producto[nombre]</td>
                                <td>$producto[cantidad]</td>
                                <td>$producto[precio]</td>
                                <td>$producto[presentacion]</td>
                                <td><i class='material-icons'>".($producto['id_estado']?"check":"")."</i></td>
                                <td>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Ver comentarios' href='comentarios.php?id=$producto[id_producto]'><i class='material-icons blue-grey-text text-darken-4 prefix'>comment</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Editar producto' href='update.php?id=$producto[id_producto]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar producto' href='delete.php?id=$producto[id_producto]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                </td>
                            </tr>
                            ");
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>

    </div>
    
    
    <!--Contenido del tab de marcas-->
    <div id="test2" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" name="busqueda_marca" class="autocomplete">
                                <label for="autocomplete-input">Buscar marca</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_marca' class='btn waves-effect blue-gray tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevos marcas-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva marca" href="create_marca.php">
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
                    <?php
                    if($data_marcas){
                        foreach($data_marcas as $marca){
                            print("
                            <tr>
                                <td>$marca[marca]</td>
                                <td>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Editar marca' href='update_marca.php?id=$marca[id_marca]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar marca' href='delete_marca.php?id=$marca[id_marca]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                </td>
                            </tr>
                            ");
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>


    <!--Contenido del tab de categorias-->
    <div id="test3" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="categoria" name="busqueda_categoria">
                                <label for="categoria">Buscar categor&iacute;a</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_categoria' class='btn waves-effect blue-gray tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevas categorias-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva categoria" href="create_categoria.php">
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

                    <?php
                    if($data_categorias){
                        foreach($data_categorias as $categoria){
                            print("
                            <tr>
                                <td>$categoria[categoria]</td>
                                <td>$categoria[marca]</td>
                                <td>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Editar categoria' href='update_categoria.php?id=$categoria[id_categoria]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar categoria' href='delete_categoria.php?id=$categoria[id_categoria]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                </td>
                            </tr>
                            ");
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    
    </div>


    <!--Contenido del tab de presentacioness-->
    <div id="test4" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="presen" name="busqueda_presentacion">
                                <label for="presen">Buscar presentaci&oacute;n</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_presentacion' class='btn waves-effect blue-gray tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevas presentaciones-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva presentación" href="create_presentacion.php">
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

                    <?php
                    if($data_presentaciones){
                        foreach($data_presentaciones as $presentacion){
                            print("
                            <tr>
                                <td>$presentacion[presentacion]</td>
                                <td>$presentacion[tipo_p]</td>
                                <td>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Editar presentacion' href='update_presentacion.php?id=$presentacion[id_presentacion]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar presentacion' href='delete_presentacion.php?id=$presentacion[id_presentacion]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                </td>
                            </tr>
                            ");
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    
    </div>


    <!--Contenido del tab de tipo de producto-->
    <div id="test5" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="tipo_" name="busqueda_tipo">
                                <label for="tipo_">Buscar tipo de producto</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_tipo' class='btn waves-effect blue-gray tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevos tipos de productos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de producto" href="create_tipo.php">
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

                    <?php
                    if($data_tipo){
                        foreach($data_tipo as $tipo){
                            print("
                            <tr>
                                <td>$tipo[tipo_p]</td>
                                <td>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Editar tipo' href='update_tipo.php?id=$tipo[id_tipo]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar tipo' href='delete_tipo.php?id=$tipo[id_tipo]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                </td>
                            </tr>
                            ");
                        }
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    
    </div>

</div>