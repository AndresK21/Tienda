<div class='container'>
    <div class='row'>
        <form method='post'>
        <?php
        print("
            <h3 class='header'>".$producto->getNombre()."</h3>
            <div class='card horizontal'>
                <div class='card-image'>
                <img src='../../web/img/productos/".$producto->getImagen()."'>
                </div>
                <div class='card-stacked'>
                    <div class='card-content'>
                        <p><b>Presentacion ".$producto->getpresentacion()."</b></p>
                        <p><b>Precio (US$) ".$producto->getPrecio()."</b></p>
        ");
        ?>
                        <div class='input-field col s12 m6 l4 offset-l5'>
                            <i class='material-icons prefix'>list</i>
                            <input id='cantida' type='number' name='cantidad' min='1' max="<?php print($producto->getExistencias()) ?>" step='any' class='validate' value='<?php print($detalle->getCantidad()) ?>' required />
                            <label for='cantida'>Cantidad</label>
                        </div>
                    </div>
                    <button type='submit' name='agregar' class='btn waves-effect waves-light blue tooltipped' data-tooltip='Realizar Compra'><i class='material-icons'>add_shopping_cart</i>Añadir al Carrito</button>
                </div>
            </div>
        </form>

        <!-- ESTRELLAS -->
        <?php
        foreach($valoracion3 as $valoracionesE){
        print("  
            <div class='card-reveal'>
                <h5><p class='center'>Valoración Actual: $valoracionesE[Estrellas] estrellas</p></h5>
            </div>
        ");
        }
        ?>
        
        <!-- COMENTARIOS -->
        <h5><p class="center">Comentarios</p></h5>
        <?php
            foreach($valoracion2 as $valoracionesR){
            print("  
            <ul class='collection'>
                <li class='collection-header'><h5></h5></li>
                <li class='collection-item avatar'>
                <i class='material-icons circle'>comment</i>
                <span class='card-title'>$valoracionesR[nombre_usuario]</span>
                <p>$valoracionesR[comentario]</p>
                </li>
            </ul>
            ");
            }
        ?>
        <?php
            //seleccionar todo de la tabla usuarios
            $resultado=$valoraciones->getValoracionesProducto();

            //Contar el total de registros
            $total_registros = count($resultado);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas = ceil($total_registros / $por_pagina);  

            //link a primera pagina
            print("<ul class='pagination center'><a href='detalle_producto.php?id=".$producto->getId_producto()."&pagina=1'>".''."<i class='material-icons'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='detalle_producto.php?id=".$producto->getId_producto()."&pagina=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='detalle_producto.php?id=".$producto->getId_producto()."&pagina=$total_paginas'>".''."<i class='material-icons'>last_page</i></a></li>");
        ?>
    </div>
</div>