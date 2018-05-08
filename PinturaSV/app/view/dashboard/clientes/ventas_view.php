<div class="white-text">.</div> <!--Espacio de margen-->

<div class="center-align"><h4>Compras del cliente</h4></div> <!--Titulo de la pagina-->

<div class="container">
    <!--Parte de clasificacion de la tabla-->
    <table class="bordered highlight responsive-table espacio_inf"> <!--Tabla donde se mostraran las ventas realizadas-->
        <thead class="blue-grey darken-4 white-text"> <!--Indices de la tablas-->
            <tr>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Subtotal</th>
                <th></th>
            </tr>
        </thead>

        <tbody> <!--Contenido de la tabla-->
            <?php
                foreach($data as $row){
                    print("
                    <tr>
                        <td>$row[fecha]</td>
                        <td>$row[cantidad]</td>
                        <td>$row[nombre]</td>
                        <td>$row[subtotal]</td>
                    </tr>
                    ");
                }
            ?>

        </tbody>
    </table>

    <div class="row right-align">
        <a class='btn waves-effect green darken-3' href="index.php"><i class='material-icons'></i>Entendido</a> <!--Boton que regresa al inicio-->
    </div>

</div>