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
                            if($productos){
                                foreach($productos as $producto){
									print("
									<tr>
										<td><img src='../../web/img/productos/$producto[imagen]' class='materialboxed' width='50' height='50'></td>
										<td>$producto[nombre]</td>
										<td>$producto[cantidad]</td>
										<td>$producto[precio]</td>
										<td>$producto[presentacion]</td>
										<td><i class='material-icons'>".($producto['id_estado']?"check":"")."</i></td>
										<td>
											<i class='material-icons'>".($producto['id_estado']?"visibility":"visibility_off")."</i>
											<a href='update.php?id=$producto[id_producto]' class='blue-text text-darken-3'><i class='material-icons'>edit</i></a>
											<a href='delete.php?id=$producto[id_producto]' class='red-text text-darken-3'><i class='material-icons'>delete</i></a>
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

                            <?php
								foreach($marcas as $marca){
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
							?>








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