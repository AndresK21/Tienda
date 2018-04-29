<div class="white-text">.</div>
<div class="white-text">.</div>

<div class="container">
    <!--Boton fijo en la pantalla para agregar nuevos usuarios-->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo usuario" href="create.php">
            <i class="large material-icons">add</i>
        </a>
    </div>
    <!--Mitad de la pantalla donde solo se mostrara la informacion del usuario-->
    <div class="row">
        <form class="col s12" method="post" enctype='multipart/form-data'>
            <!--muestra la lista de usuarios existentes-->
            <div class="col s10">
                <div class="input-field">
                    <i class="material-icons blue-grey-text text-darken-4 prefix">search</i>
                    <input type="text" id="autocomplete-input" name='busqueda_usuario' class="autocomplete">
                    <label for="autocomplete-input" class="blue-grey-text text-darken-4">Buscar usuario</label>
                </div>
            </div>
            <div class="input-field col s2">
                <button type='submit' name='buscar_usuario' class='btn waves-effect blue-gray tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
            </div>
        </form>
    </div>
    <div class="row">
        <table class="bordered highlight responsive-table z-depth-2">
            <thead class="blue-grey darken-4 white-text">
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Tipo</th>
                    <th>Correo electr&oacute;nico</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $row){
                    print("
                    <tr>
                        <td>$row[nombre_completo]</td>
                        <td>$row[nombre_usuario]</td>
                        <td>$row[permiso]</td>
                        <td>$row[correo_electronico]</td>
                        <td>
                            <a href='update.php?id=$row[id_empleado]' class='blue-text text-darken-3 tooltipped' data-position='right' data-delay='50' data-tooltip='Editar usuario'><i class='material-icons'>edit</i></a>
                            <a href='delete.php?id=$row[id_empleado]' class='red-text text-darken-3 tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar usuario'><i class='material-icons'>delete</i></a>
                        </td>
                    </tr>
                        ");
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>