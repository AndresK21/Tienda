 <!--SLIDER-->
 <div class="slider hide-on-small-only	">
    <ul class="slides">
        <li>
            <!-- IMAGEN 1 -->
            <img class="responsive-img" src="../../web/img/slider/slider1.jpg"> 
            <div class="caption left-align">
            <h3 class="pink-text">Pintura SV</h3>
            </div>
        </li>
        <li>
            <!-- IMAGEN 2 -->
            <img src="../../web/img/slider/slider2.jpg">
            <div class="caption right-align">
            <h3 class="white-text"></h3>
            </div>
        </li>
        <li>
            <!-- IMAGEN 3 -->
            <img src="../../web/img/slider/slider3.jpg">
            <div class="caption center-align">
                <h3 class="yellow-text">Calidad Garantizada</h3>
            </div>
        </li>
    </ul>
</div>
<div class='container row'>
<?php
    if(isset($_SESSION['id_cliente_p'])){
        foreach($productos as $productob){
            print("
            <div class='col s12 m6 l4'>
                <div class='card sticky-action'>
                    <div class='card-image waves-effect waves-block waves-light'>
                        <img src='../../web/img/productos/$productob[imagen]' class='materialboxed'>
                    </div>
                    <div class='card-content'>
                            <span class='card-title'>$productob[nombre]</span>
                            <p>Precio (US$) $productob[precio]</p>
                            <p>$productob[presentacion]</p>
                            <p>Categoria: $productob[categoria]</p>
                        <!-- BOTON DE COMPRA -->
                        <a href='../categorias/detalle_producto.php?id=$productob[id_producto]' class='blue waves-effect waves-light btn modal-trigger'><i class='material-icons right'>shopping_cart</i>A&ntilde;adir </a>
    
                        <!-- ESPACIO -->
                        <div class='white-text'>.</div>
                    </div>
                </div>
            </div>
            ");
        }
    }else{
        foreach($productos as $productob){
            print("
            <div class='col s12 m6 l4'>
                <div class='card sticky-action'>
                    <div class='card-image waves-effect waves-block waves-light'>
                        <img src='../../web/img/productos/$productob[imagen]' class='materialboxed'>
                    </div>
                    <div class='card-content'>
                            <span class='card-title'>$productob[nombre]</span>
                            <p>Precio (US$) $productob[precio]</p>
                            <p>$productob[presentacion]</p>
                            <p>Categoria: $productob[categoria]</p>
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