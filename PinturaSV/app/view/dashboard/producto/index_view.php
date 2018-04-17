<div class='row'>   
    <form method='post'>
        <div class='input-field col s6 m4'>
            <i class='material-icons prefix'>search</i>
            <input id='buscar' type='text' name='busqueda'/>
            <label for='buscar'>Buscador</label>
        </div>
        <div class='input-field col s6 m4'>
            <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='Buscar por nombre o descripción'><i class='material-icons'>check_circle</i></button>
        </div>
    </form>
    <div class='input-field center-align col s12 m4'>
        <a href='create.php' class='btn waves-effect indigo tooltipped' data-tooltip='Crear producto'><i class='material-icons'>add_circle</i></a>
    </div>
</div>
<table class='highlight'>
	<thead>
		<tr>
			<th>IMAGEN</th>
			<th>NOMBRE</th>
			<th>PRECIO (US$)</th>
			<th>CATEGORÍA</th>
			<th>ESTADO</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td><img src='../../web/img/productos/$row[imagen_producto]' class='materialboxed' width='100' height='100'></td>
			<td>$row[nombre_producto]</td>
			<td>$row[precio_producto]</td>
			<td>$row[nombre_categoria]</td>
			<td><i class='material-icons'>".($row['estado_producto']?"visibility":"visibility_off")."</i></td>
			<td>
				<a href='update.php?id=$row[id_producto]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[id_producto]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>







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
							<input type="text" id="buscar_label" class="autocomplete">
							<label for="buscar_label">Buscar producto</label>
						</div>
						<div class="input-field col s2">
							<button type='submit' name='buscar' class='btn waves-effect blue-gray tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
						</div>
					</div>
				</div>
			<form>
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