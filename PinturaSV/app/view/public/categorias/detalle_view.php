<div class='container'>
    <div class='row'>
        <div class='col s12'>
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
                        <form method='post'>
                            <div class='input-field col s12 m6'>
                                <i class='material-icons prefix'>list</i>
                                <input id='cantida' type='number' name='cantidad' min='1' max='999' step='any' class='validate' value='<?php print($detalle->getCantidad()) ?>' required />
                                <label for='cantida'>Cantidad</label>
                            </div>
                        </div>
                        <button type='submit' name='agregar' class='btn waves-effect waves-light blue tooltipped' data-tooltip='Realizar Compra'><i class='material-icons'>add_shopping_cart</i>Añadir al Carrito</button>
                    </div>
                </div>
            </form>
        
        </div>
    </div>
</div>