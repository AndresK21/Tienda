<div class="white-text">.</div> <!--Espacio de margen-->

<div class="center-align"><h4>Comentarios del producto</h4></div> <!--Titulo de la pagina-->

<div class="container">
    <!--Parte de clasificacion de la tabla-->
    <table class="bordered highlight responsive-table espacio_inf"> <!--Tabla donde se mostraran los comentarios del producto-->
        <thead class="blue-grey darken-4 white-text"> <!--Indices de la tabla-->
            <tr>
                <th>Comentario</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody> <!--Contenido de la tabla-->
        <!--Producto de ejemplo 1-->
            <?php
            if($data){
                foreach($data as $row){
                    print("
                    <tr>
                        <td>$row[comentario]</td>
                        <td>
                            <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar comentario' href='delete_comentario.php?id=$row[id_valoracion]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                        </td>
                    </tr>
                    ");
                }
            }
            ?>

        </tbody>
    </table>
    <div class="row right-align">
        <a class='btn waves-effect green darken-3' href="index.php"><i class='material-icons'></i>Entendido</a> <!--Boton que lleva a inicio-->
    </div>
</div>