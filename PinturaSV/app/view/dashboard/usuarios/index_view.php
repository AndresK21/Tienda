<div class="white-text">.</div>
<div class="white-text">.</div>

<!--Boton fijo en la pantalla para agregar nuevos usuarios-->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo usuario" href="create.php">
        <i class="large material-icons">add</i>
    </a>
</div>
<div class="container">
    <div class="row">
        <form class="col s12" method="post" enctype='multipart/form-data'>
            <!--muestra la lista de usuarios existentes-->
            <div class="col s10">
                <div class="input-field">
                    <i class="material-icons black-text prefix">search</i>
                    <input type="text" id="autocomplete-input" name='busqueda_usuario' class="autocomplete">
                    <label for="autocomplete-input" class="black-text">Buscar usuario</label>
                </div>
            </div>
            <div class="input-field col s2">
                <button type='submit' name='buscar_usuario' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
            </div>
        </form>
    </div>
</div>
<div class="container">
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
    <?php
        print("
        <div class='right-align'>
            <a href='../../app/view/dashboard/usuarios/reporte.php' target='_blank' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Generar reporte de empleados'><i class='material-icons'>content_paste</i>    Generar reporte</a>
        </div>
        ");
    ?>
</div>
<?php
    //seleccionar todo de la tabla usuarios
    $resultado=$usuario->getEmpleados();

    //Contar el total de registros
    $total_registros = count($resultado);

    //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
    $total_paginas = ceil($total_registros / $por_pagina);  

    //link a primera pagina
    print("<ul class='pagination center'><a href='index.php?id=".$usuario->getId_empleado()."&pagina=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
    for ($i=1; $i<=$total_paginas; $i++) {
    print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$usuario->getId_empleado()."&pagina=".$i."'>".$i."</a></li>");
    };
    // link a la ultima pagina
    print("<a href='index.php?id=".$usuario->getId_empleado()."&pagina=$total_paginas'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
?>