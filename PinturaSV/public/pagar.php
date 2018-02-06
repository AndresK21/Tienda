<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="../web/css/icon.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Carrito</title>
    </head>
    <body>

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
                        <li><a href="#!">Nosotros</a></li>
                        <li><a href="iniciar_sesion.php">Iniciar Sesi&oacute;n</a></li>
                        <li><a href="#!"><i class="material-icons">shopping_cart</i></a></li>
                    </ul>
                </div>
            </div>
            </nav>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="#!">Nosotros</a></li>
                        <li><a href="contactanos.php">Contactanos</a></li>
                        <li><a href="iniciar_sesion.php">Contactanos</a></li>
                        <li><a href="#!"> <i class="material-icons new badge">shopping_cart</i>Añadido<span class="new badge">1</span></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>

            
        <!--Fila de orden-->
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card horizontal nav-wrapper  blue">
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p style="color:white">Imagen</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p style="color:white">Descripcion</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p style="color:white">Cantidad</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p style="color:white">Precio</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p style="color:white">Sub-total</p>
                                </div>
                            </div>
                        </div>

                        <div class="col s1">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            <!--Productos-->
            <div class="row">
                <div class="col s12">
                    <div class="card horizontal">
                        <div class="col s2">
                            <div class="card-image" style="max-height: 100%; max-width: 100%;">
                                <img src="../web/img/producto1.jpg">
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Pintura látex blanco ostra high standard.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <input placeholder="2" id="cantidad" type="number" class="validate">
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>$25.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>$50.00</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col s1">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col s12">
                    <div class="card horizontal">
                        <div class="col s2">
                            <div class="card-image" style="max-height: 100%; max-width: 100%;">
                                <img src="../web/img/producto2.jpg">
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Pintura pro látex blanco hueso.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <input placeholder="1" id="cantidad" type="number" class="validate">
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>$25.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>$25.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col s1">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col s12">
                    <div class="card horizontal">
                        <div class="col s2">
                            <div class="card-image" style="max-height: 100%; max-width: 100%;">
                                <img src="../web/img/producto3.jpg">
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Pintura pro látex marfil.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <input placeholder="2" id="" type="number" class="validate">
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>$25.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>$50.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col s1">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="right-align">
                <h5 style="text-decoration: underline;">Total a pagar:  $150.00</h5>
                <a class="waves-effect waves-light btn" style="margin-bottom: 128px;"><i class="material-icons right">shopping_cart</i>Hacer compra</a>
            </div>

        </div>
            

        <!-- Modal de eliminacion de productos -->
        <div id="modal_eliminar" class="modal">
            <div class="modal-content">
                <h4>Eliminar producto</h4>
                <p>¿Esta seguro que desea eliminar este producto?</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Eliminar</a>
            </div>
        </div>

        
        <footer class="page-footer  blue" >
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
        </footer>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>