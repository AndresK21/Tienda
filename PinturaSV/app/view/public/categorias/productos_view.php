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
        if(isset($_SESSION['id_cliente_p'])){
            foreach($data_productos as $productob2){
                print("
                <div class='col s12 m6 l3'>
                    <div class='card sticky-action'>
                        <div class='card-image waves-effect waves-block waves-light'>
                            <img src='../../web/img/productos/$productob2[imagen]' class='materialboxed'>
                        </div>
                        <div class='card-content'>
                                <span class='card-title'>$productob2[nombre]</span>
                                <p>Precio (US$) $productob2[precio]</p>
                                <p>Presentacion $productob2[presentacion]</p>
                            <!-- BOTON DE COMPRA -->
                            <a href='detalle_producto.php?id=$productob2[id_producto]' class='blue waves-effect waves-light btn modal-trigger'><i class='material-icons right'>shopping_cart</i>A&ntilde;adir </a>
                            <!-- ESPACIO -->
                            <div class='white-text'>.</div>
                        </div>
                    </div>
                </div>
                ");
            }
        }else{
            foreach($data_productos as $productob2){
                print("
                <div class='col s12 m6 l3'>
                    <div class='card sticky-action'>
                        <div class='card-image waves-effect waves-block waves-light'>
                            <img src='../../web/img/productos/$productob2[imagen]' class='materialboxed'>
                        </div>
                        <div class='card-content'>
                                <span class='card-title'>$productob2[nombre]</span>
                                <p>Precio (US$) $productob2[precio]</p>
                                <p>Presentacion $productob2[presentacion]</p>

                            <!-- ESPACIO -->
                            <div class='white-text'>.</div>
    
                        </div>
                    </div>
                </div>
                ");
            }
        }
        
        ?>

         
</div>
        <?php
            //seleccionar todo de la tabla usuarios
            $resultado=$productob->getCategoriaProductos();

            //Contar el total de registros
            $total_registros = count($resultado);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas = ceil($total_registros / $por_pagina);  

            //link a primera pagina
            print("<ul class='pagination center'><a href='productos_categorias.php?id=".$productob->getId_categoria()."&pagina=1'>".''."<i class='material-icons'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='productos_categorias.php?id=".$productob->getId_categoria()."&pagina=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='productos_categorias.php?id=".$productob->getId_categoria()."&pagina=$total_paginas'>".''."<i class='material-icons'>last_page</i></a></li>");
        ?>