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
                        <label for="buscar_label" class="black-text">Buscar cliente</label>
                    </div>
                    <div class="input-field col s2">
                        <button type='submit' name='buscar_cliente' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
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
<?php
            //seleccionar todo de la tabla usuarios
            $resultado=$cliente->getClientes();

            //Contar el total de registros
            $total_registros = count($resultado);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas = ceil($total_registros / $por_pagina);  

            //link a primera pagina
            print("<ul class='pagination center'><a href='index.php?id=".$cliente->getId_cliente()."&pagina=1'>".''."<i class='material-icons'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$cliente->getId_cliente()."&pagina=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$cliente->getId_cliente()."&pagina=$total_paginas'>".''."<i class='material-icons'>last_page</i></a></li>");
        ?>