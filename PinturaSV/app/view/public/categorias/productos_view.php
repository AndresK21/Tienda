<!-- PARALAX DE DIVISION -->
<div class='parallax-container'>
    <div class='parallax'><img src='../../web/img/paralaxagua.jpg'></div>
</div>
<div class='row container'>
    <form class="col s12" method="post" enctype='multipart/form-data'>
        <!-- BUSQUEDA -->
        <div class="col s6">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input type="text" id="autocomplete-input"  name='busqueda_producto' class="autocomplete">
                    <label for="autocomplete-input">Buscar producto</label> 
                </div>
                
            </div>
        </div>
        <!--COMBOBOX DE Presentaci&oacute;nES -->
        <div class="input-field col s4">
        <?php
            Page::showSelect("Presentacion", "presentacion", $productob->getId_presentacion(), $productob->getPresentaciones());
        ?>
        </div>
        <div class="input-field col s2">
            <button type='submit' name='buscar_producto' class='btn waves-effect blue tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
        </div>
    </form>


        <?php
        $categoria = $data_productos[0]['categoria'];
        print("<h4 class='center blue-text'>$categoria</h4>");
        print("<div class='row'>");
        foreach($data_productos as $productob){
            print("
            <div class='col s12 m6 l3'>
                <div class='card sticky-action'>
                    <div class='card-image waves-effect waves-block waves-light'>
                        <img src='../../web/img/productos/$productob[imagen]' class='materialboxed'>
                    </div>
                    <div class='card-content'>
                            <span class='card-title'>$productob[nombre]</span>
                            <p>Precio (US$) $productob[precio]</p>
                            <p>Presentacion $productob[presentacion]</p>
                        <!-- BOTON DE COMPRA -->
                        <a href='detalle_producto.php?id=$productob[id_producto]' class='blue waves-effect waves-light btn modal-trigger'><i class='material-icons right'>shopping_cart</i>A&ntilde;adir </a>

                        <!-- ESPACIO -->
                        <div class='white-text'>.</div>

                        <!-- BOTON DE COMENTARIOS -->
                        <a class='blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab'  href='#' type='submit' name='action' data-position='bottom' data-delay='50' data-tooltip='Ver Comentarios'>Rese&ntilde;as
                            <i class='material-icons'>comment</i>
                        </a>
                    </div>
                </div>
            </div>
            ");
        }
        ?>
</div>