<!--Divs para dar un espacio arriba de la tabla-->
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>

<div class="container">
    <!--Parte de clasificacion de la tabla-->
    <table class="bordered highlight responsive-table espacio_sup espacio_inf">
        <thead class="blue white-text">
        <tr>
            <th>Imagen</th>
            <th>Descripci&oacute;n</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Subtotal</th>
            <th></th>
            <th></th>
        </tr>
        </thead>

        <tbody>

        <?php
            foreach($data as $row){
                print("
                <tr>
                    <td><img src='../../web/img/productos/$row[imagen]' class='materialboxed' width='50' height='50'></td>
                    <td>$row[nombre]</td>
                    <td>$row[cantidad]</td>
                    <td>$$row[precio]</td>
                    <td>$$row[subtotal]</td>
                    <td>
                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar elemento' href='delete.php?id=$row[id_detalle]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                    </td>
                </tr>
                ");
            }
        ?>
        </tbody>
    </table>
    <!--Espacio donde se muestra el costo total de la compra y proceder a pagar-->
    <div class="right-align">
        <?php
            foreach($data2 as $row2){
                print("
                    <h5 style='text-decoration: underline;'>Total a pagar:  $$row2[total]</h5>
                ");
            }
        ?>
        <form method="post">
            <?php
        print("
        <div class='right-align'>
            <button name='comprar' class='btn waves-effect espacio_inf' data-tooltip='Realizar Compra'><i class='material-icons right'>shopping_cart</i>Hacer compra</button>
        </div>
        ");
    ?>
        </form>
    </div>
</div>
    

<!-- Modal de eliminacion de productos -->
<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h4>Eliminar producto</h4>
        <p>&iquest;Esta seguro que desea eliminar este producto&#63;</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Eliminar</a>
    </div>
</div>