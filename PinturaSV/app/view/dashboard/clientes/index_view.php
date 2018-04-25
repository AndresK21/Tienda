<div class="white-text">.</div>
<div class="white-text">.</div>

<!-- Barra de busqueda -->
<div class="container">
    <div class="row">
        <form method='post'>
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s10">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="buscar_label" name='busqueda_cliente' class="autocomplete">
                        <label for="buscar_label">Buscar cliente</label>
                    </div>
                    <div class="input-field col s2">
                        <button type='submit' name='buscar_cliente' class='btn waves-effect blue-gray tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                    </div>
                </div>
            </div>
        <form>
    </div>
</div>

<div class="container">
    <!--Parte de clasificacion de la tabla-->
    <table class="bordered highlight responsive-table espacio_inf">
        <thead class="blue-grey darken-4 white-text">
            <tr>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Usuario</th>
                <th>Correo electr&oacute;nico</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        <!--Producto de ejemplo 1-->
            <?php
                foreach($data as $row){
                    print("
                    <tr>
                        <td>$row[apellidos]</td>
                        <td>$row[nombres]</td>
                        <td>$row[nombre_usuario]</td>
                        <td>$row[email]</td>
                        <td>
                            <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Visualizar ventas' href='ventas.php?id=$row[id_cliente]'><i class='material-icons blue-text text-darken-3 prefix'>shopping_basket</i></a>
                            <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar cliente' href='delete.php?id=$row[id_cliente]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                        </td>
                    </tr>
                    ");
                }
            ?>

        </tbody>
    </table>
</div>