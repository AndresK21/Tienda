<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="../web/css/icon.css" rel="stylesheet">
        <link href="../web/css/googlemaps.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Pintura de Agua</title>
    </head>
    <body>
        <header>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
            <li><a href="../public/categoria_aceite.php">Aceite</a></li>
            <li class="divider"></li>
            <li><a href="../public/categoria_agua.php">Agua</a></li>
            </ul>
            <!-- Dropdown Structure Mobile -->
            <ul id="dropdown2" class="dropdown-content">
            <li><a href="../public/categoria_agua.php">Aceite</a></li>
            <li class="divider"></li>
            <li><a href="../public/categoria_agua.php">Agua</a></li>
            </ul>
            <div class="navbar-fixed">
            <nav>
                <!--Navbar Color Azul-->
                <div class="nav-wrapper  blue">
                <img class="brand-logo" src="../web/img/mipintura.png">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="../public/nosotros.php">Nosotros</a></li>
                        <li><a href="iniciar_sesion.php">Iniciar Sesi&oacute;n</a></li>
                        <li><a href="#!"><i class="material-icons">shopping_cart</i></a></li>
                    </ul>
                </div>
            </div>
            </nav>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../public/nosotros.php">Nosotros</a></li>
                    <li><a href="contactanos.php">Contactanos</a></li>
                    <li><a href="iniciar_sesion.php">Contactanos</a></li>
                    <li><a href="#!"> <i class="material-icons new badge">shopping_cart</i>Añadido<span class="new badge">1</span></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
        </header>   
        <main>
                <!-- PARALAX DE DIVISION -->
                <div class="parallax-container">
                    <div class="parallax"><img src="../web/img/paralaxagua.jpg"></div>
                </div>
            <!-- CONTENEDOR PRINCIPAL -->
            <div class="container"> 
                <!--CATEGORIA -->
                <h4 class="left-align">Pintura de Agua</h4>
                <!-- BUSQUEDA -->
                <div class="row">
                        <div class="col s8">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar producto</label>
                                </div>
                            </div>
                        </div>
                    <!--COMBOBOX DE PRESENTACIONES -->
                    <div class="input-field col s4">
                        <select>
                            <option value="" disabled selected>Presentaciones</option>
                            <option value="1">Medio Galon</option>
                            <option value="2">Galon</option>
                            <option value="3">Cubeta</option>
                        </select>   
                        <label>Escoja una presentacion</label>
                    </div>
                </div>
                <div class="row">
                <!-- PRIMER PRODUCTO -->
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image ">
                            <img src="../web/img/producto1.jpg">
                            <span class="card-title grey-text">CUB</span>
                        </div>
                        <div class="card-content">
                        <p>Pintura látex blanco ostra high standard.</p>
                        </div>
                        <div class="card-action">
                        <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
                            <!-- Modal Structure -->
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <div class="col s12 m12 l12">
                                        <h4 class="header">Producto agregado a su carrito con exito</h4>
                                        <div class="card horizontal">
                                            <div class="card-image">
                                            <img src="../web/img/producto1.jpg">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <p>Pintura látex blanco ostra high standard</p><br>
                                                    <!-- PENDIENTE AñADIR SUMA -->
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                    <p>Sub-total: $25.00</p><br>
                                                </div>
                                                <div class="card-action">
                                                    <a class="blue-text" href="#">Seguir Comprando</a>
                                                    <a class="green-text" href="../public/pagar.php">Relizar Pago</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SEGUNDO PRODUCTO -->
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image ">
                            <img src="../web/img/producto2.jpg">
                            <span class="card-title grey-text">GAL</span>
                        </div>
                        <div class="card-content">
                            <p>Pintura pro látex blanco hueso.</p>
                        </div>
                        <div class="card-action">
                            <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
                            <!-- Modal Structure -->
                            <div id="modal2" class="modal">
                                <div class="modal-content">
                                    <div class="col s12 m12 l12">
                                            <h4 class="header">Producto agregado a su carrito con exito</h4>
                                        <div class="card horizontal">
                                            <div class="card-image">
                                            <img src="../web/img/producto2.jpg">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <p>Pintura pro látex blanco hueso.</p><br>
                                                    <!-- PENDIENTE AñADIR SUMA -->
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                    <p>Sub-total: $25.00</p><br>
                                                </div>
                                                <div class="card-action">
                                                    <a class="blue-text" href="#">Seguir Comprando</a>
                                                    <a class="green-text" href="../public/pagar.php">Relizar Pago</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TERCER PRODUCTO -->
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image ">
                        <img src="../web/img/producto3.jpg">
                        <span class="card-title grey-text">CUB</span>
                        </div>
                        <div class="card-content">
                        <p>Pintura pro látex marfil.</p>
                        </div>
                        <div class="card-action">
                            <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
                        <!-- Modal Structure -->
                            <div id="modal3" class="modal">
                                <div class="modal-content">
                                    <div class="col s12 m12 l12">
                                        <h4 class="header">Producto agregado a su carrito con exito</h4>
                                        <div class="card horizontal">
                                            <div class="card-image">
                                                <img src="../web/img/producto3.jpg">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <p>Pintura pro látex marfil.</p><br>
                                                    <!-- PENDIENTE AñADIR SUMA -->
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                    <p>Sub-total: $25.00</p><br>
                                                </div>
                                                <div class="card-action">
                                                    <a class="blue-text" href="#">Seguir Comprando</a>
                                                    <a class="green-text" href="../public/pagar.php">Relizar Pago</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CUARTO PRODUCTO -->
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image ">
                        <img src="../web/img/producto4.jpg">
                        <span class="card-title grey-text">CUB</span>
                        </div>
                        <div class="card-content">
                        <p>Pintura pro látex marfil.</p>
                        </div>
                        <div class="card-action">
                            <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal4"><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
                        <!-- Modal Structure -->
                            <div id="modal4" class="modal">
                                <div class="modal-content">
                                    <div class="col s12 m12 l12">
                                        <h4 class="header">Producto agregado a su carrito con exito</h4>
                                        <div class="card horizontal">
                                            <div class="card-image">
                                                <img src="../web/img/producto4.jpg">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <p>Pintura pro plus latex invierno</p><br>
                                                    <!-- PENDIENTE AñADIR SUMA -->
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                    <p>Sub-total: $25.00</p><br>
                                                </div>
                                                <div class="card-action">
                                                    <a class="blue-text" href="#">Seguir Comprando</a>
                                                    <a class="green-text" href="../public/pagar.php">Relizar Pago</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- SEGUNDA FILA -->
                <div class="row">
                <!-- PRIMER PRODUCTO -->
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image ">
                            <img src="../web/img/producto1.jpg">
                            <span class="card-title grey-text">CUB</span>
                        </div>
                        <div class="card-content">
                        <p>Pintura látex blanco ostra high standard.</p>
                        </div>
                        <div class="card-action">
                        <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
                            <!-- Modal Structure -->
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <div class="col s12 m12 l12">
                                        <h4 class="header">Producto agregado a su carrito con exito</h4>
                                        <div class="card horizontal">
                                            <div class="card-image">
                                            <img src="../web/img/producto1.jpg">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <p>Pintura látex blanco ostra high standard</p><br>
                                                    <!-- PENDIENTE AñADIR SUMA -->
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                    <p>Sub-total: $25.00</p><br>
                                                </div>
                                                <div class="card-action">
                                                    <a class="blue-text" href="#">Seguir Comprando</a>
                                                    <a class="green-text" href="../public/pagar.php">Relizar Pago</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SEGUNDO PRODUCTO -->
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image ">
                            <img src="../web/img/producto2.jpg">
                            <span class="card-title grey-text">GAL</span>
                        </div>
                        <div class="card-content">
                            <p>Pintura pro látex blanco hueso.</p>
                        </div>
                        <div class="card-action">
                            <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
                            <!-- Modal Structure -->
                            <div id="modal2" class="modal">
                                <div class="modal-content">
                                    <div class="col s12 m12 l12">
                                            <h4 class="header">Producto agregado a su carrito con exito</h4>
                                        <div class="card horizontal">
                                            <div class="card-image">
                                            <img src="../web/img/producto2.jpg">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <p>Pintura pro látex blanco hueso.</p><br>
                                                    <!-- PENDIENTE AñADIR SUMA -->
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                    <p>Sub-total: $25.00</p><br>
                                                </div>
                                                <div class="card-action">
                                                    <a class="blue-text" href="#">Seguir Comprando</a>
                                                    <a class="green-text" href="../public/pagar.php">Relizar Pago</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TERCER PRODUCTO -->
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image ">
                        <img src="../web/img/producto3.jpg">
                        <span class="card-title grey-text">CUB</span>
                        </div>
                        <div class="card-content">
                        <p>Pintura pro látex marfil.</p>
                        </div>
                        <div class="card-action">
                            <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
                        <!-- Modal Structure -->
                            <div id="modal3" class="modal">
                                <div class="modal-content">
                                    <div class="col s12 m12 l12">
                                        <h4 class="header">Producto agregado a su carrito con exito</h4>
                                        <div class="card horizontal">
                                            <div class="card-image">
                                                <img src="../web/img/producto3.jpg">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <p>Pintura pro látex marfil.</p><br>
                                                    <!-- PENDIENTE AñADIR SUMA -->
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                    <p>Sub-total: $25.00</p><br>
                                                </div>
                                                <div class="card-action">
                                                    <a class="blue-text" href="#">Seguir Comprando</a>
                                                    <a class="green-text" href="../public/pagar.php">Relizar Pago</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CUARTO PRODUCTO -->
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image ">
                        <img src="../web/img/producto4.jpg">
                        <span class="card-title grey-text">CUB</span>
                        </div>
                        <div class="card-content">
                        <p>Pintura pro látex marfil.</p>
                        </div>
                        <div class="card-action">
                            <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal4"><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
                        <!-- Modal Structure -->
                            <div id="modal4" class="modal">
                                <div class="modal-content">
                                    <div class="col s12 m12 l12">
                                        <h4 class="header">Producto agregado a su carrito con exito</h4>
                                        <div class="card horizontal">
                                            <div class="card-image">
                                                <img src="../web/img/producto4.jpg">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                    <p>Pintura pro plus latex invierno</p><br>
                                                    <!-- PENDIENTE AñADIR SUMA -->
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                    <p>Sub-total: $25.00</p><br>
                                                </div>
                                                <div class="card-action">
                                                    <a class="blue-text" href="#">Seguir Comprando</a>
                                                    <a class="green-text" href="../public/pagar.php">Relizar Pago</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
                <!-- PAGINAS -->
                <ul class="pagination center">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="blue white-text ligactive"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
            <footer class="page-footer  blue darken-2" >
                <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                    <h5 class="white-text center-align">Comun&iacute;cate con nosotros</h5>
                    <p class="grey-text text-lighten-4 center-align">Tienes alguna duda o comentario&#63;</p>
                    <p class="grey-text text-lighten-4 center-align">Llamanos</p>
                    <p class="grey-text text-lighten-4 center-align">(503) 2278-3033</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Correo electronico</h5>
                    <ul>
                        <li><i class="small  material-icons">email</i><a class="grey-text text-lighten-3 valign-wrapper"  href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blanck"> mipintura@gmail.com</a></li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright DDS
                </div>
                </div>
            </main>  
            </footer>
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="../web/js/main.js"></script>
            <script type="text/javascript" src="../web/js/ini.js"></script>
            <script type="text/javascript" src="../js/materialize.min.js"></script>
            <script type="text/javascript" src="../web/js/fontawesom.js"></script>   
    </body>
</html>