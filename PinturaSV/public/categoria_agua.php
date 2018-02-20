<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
            include('../app/view/referencias.php');
        ?>
        <link href="../web/css/googlemaps.css" rel="stylesheet">
        <link href="../web/css/valoraciones.css" rel="stylesheet">
        <title>Pintura de Agua</title>
    </head>
    <body>
        <header>
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../app/view/nav_public.php');
            ?>
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
                    <!--COMBOBOX DE Presentaci&oacute;nES -->
                    <div class="input-field col s4">
                        <select>
                            <option value="" disabled selected>Presentaciones</option>
                            <option value="1">Medio Gal&oacute;n</option>
                            <option value="2">Gal&oacute;n</option>
                            <option value="3">Cubeta</option>
                        </select>   
                        <label>Escoja una Presentaci&oacute;n</label>
                    </div>
                </div>
                <div class="row">
                    <!-- PRIMER PRODUCTO -->
                    <div class="col s12 m6 l3">
                        <div class="card sticky-action">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../web/img/producto1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="tooltipped card-title activator blue-text text-darker-1" data-position="top"  data-delay="50" data-tooltip="A&ntilde;adir Valoraci&oacute;n">&#36;25.00<i class="material-icons right">more_vert</i></span>
                                <p>CUB</p>
                                <p>Pintura l&aacute;tex blanco ostra high standard.</p>
                                <!-- BOTON DE COMPRA -->
                                <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons right">shopping_cart</i>A&ntilde;adir </a>
                                <!-- MODAL DE COMPRA -->
                                <div id="modal1" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <div class="col s12 m12 l12">
                                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../web/img/producto1.jpg">
                                                </div>
                                                <div class="card-stacked">
                                                    <div class="card-content">
                                                        <p>Pintura l&aacute;tex blanco ostra high standard</p><br>
                                                        <p>Presentaci&oacute;n&#58; Cubeta</p><br>
                                                        <div class="input-field">
                                                        <input placeholder="1" id="cantidad" type="number" class="validate">
                                                        <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                                        </div>
                                                        <p>Precio Unitario&#58; &#36;25.00</p><br>
                                                        <p>Sub-total&#58; &#36;25.00</p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                                    </div>
                                </div>    

                                <!-- ESPACIO -->
                                <div class="white-text">.</div>

                                <!-- BOTON DE COMENTARIOS -->
                                <a class="blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab"  href="#modal5" type="submit" name="action" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios">Rese&ntilde;as
                                    <i class="material-icons">comment</i>
                                </a>
                                <!-- MODAL DE COMENTARIOS -->
                                <div id="modal5" class="modal bottom-sheet">
                                    <div class="modal-content">
                                        <!-- COMENTARIOS -->
                                        <ul class="collection">
                                        <li class="collection-header"><h5>Comentarios</h5></li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">Andres Gomez</span>
                                            <p>Excelente<br>
                                            Nunca habia comprado productos de gran calidad
                                            </p>
                                        </li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">David Mejia</span>
                                            <p>Buena Pintura<br>
                                            Lo mejor
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DE VALORACIONES -->
                            <div class="card-reveal">
                                <!-- TITUOLO -->
                                <span class="card-title grey-text text-darken-4">Valorar<i class="material-icons right">close</i></span>
                                <!-- ESTRELLAS -->
                                <div class="ec-stars-wrapper">
                                <p class="center">Valoracion</p><br>
                                    <!-- 5 ESTRELLAS PARA VALORAR -->
                                    <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                                </div>
                                <!-- COMENTARIOS -->
                                <div class="card-action">
                                    <div class="row">
                                        <form class="col s12">
                                            <!-- TEXT AREA PARA COMENTAR -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Comentarios</label>
                                                <button class="btn tooltipped waves-effect waves-light" type="submit" name="action" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar
                                                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SEGUNDO PRODUCTO -->
                    <div class="col s12 m6 l3">
                        <div class="card sticky-action">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../web/img/producto2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="tooltipped card-title activator blue-text text-darker-1" data-position="top"  data-delay="50" data-tooltip="A&ntilde;adir Valoraci&oacute;n">&#36;25.00<i class="material-icons right">more_vert</i></span>
                                <p>GAL</p>
                                <p>Pintura pro l&aacute;tex blanco hueso.</p>
                                <!-- BOTON DE COMPRA -->
                                <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">shopping_cart</i>A&ntilde;adir </a>
                                <!-- MODAL DE COMPRA -->
                                <div id="modal2" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <div class="col s12 m12 l12">
                                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../web/img/producto2.jpg">
                                                </div>
                                                <div class="card-stacked">
                                                    <div class="card-content">
                                                        <p>Pintura pro l&aacute;tex blanco hueso.</p><br>
                                                        <p>Presentaci&oacute;n&#58; Gal&ioacute;n</p><br>
                                                        <div class="input-field">
                                                        <input placeholder="1" id="cantidad" type="number" class="validate">
                                                        <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                                        </div>
                                                        <p>Precio Unitario&#58; &#36;25.00</p><br>
                                                        <p>Sub-total&#58; &#36;25.00</p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                                    </div>
                                </div>    

                                <!-- ESPACIO -->
                                <div class="white-text">.</div>

                                <!-- BOTON DE COMENTARIOS -->
                                <a class="blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab"  href="#modal5" type="submit" name="action" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios">Rese&ntilde;as
                                    <i class="material-icons">comment</i>
                                </a>
                                <!-- MODAL DE COMENTARIOS -->
                                <div id="modal5" class="modal bottom-sheet">
                                    <div class="modal-content">
                                        <!-- COMENTARIOS -->
                                        <ul class="collection">
                                        <li class="collection-header"><h5>Comentarios</h5></li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">Andres Gomez</span>
                                            <p>Excelente<br>
                                            Nunca habia comprado productos de gran calidad
                                            </p>
                                        </li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">David Mejia</span>
                                            <p>Buena Pintura<br>
                                            Lo mejor
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DE VALORACIONES -->
                            <div class="card-reveal">
                                <!-- TITUOLO -->
                                <span class="card-title grey-text text-darken-4">Valorar<i class="material-icons right">close</i></span>
                                <!-- ESTRELLAS -->
                                <div class="ec-stars-wrapper">
                                <p class="center">Valoracion</p><br>
                                    <!-- 5 ESTRELLAS PARA VALORAR -->
                                    <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                                </div>
                                <!-- COMENTARIOS -->
                                <div class="card-action">
                                    <div class="row">
                                        <form class="col s12">
                                            <!-- TEXT AREA PARA COMENTAR -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Comentarios</label>
                                                <button class="btn tooltipped waves-effect waves-light" type="submit" name="action" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar
                                                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TERCER PRODUCTO -->
                    <div class="col s12 m6 l3">
                        <div class="card sticky-action">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../web/img/producto3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="tooltipped card-title activator blue-text text-darker-1" data-position="top"  data-delay="50" data-tooltip="A&ntilde;adir Valoraci&oacute;n">&#36;25.00<i class="material-icons right">more_vert</i></span>
                                <p>CUB</p>
                                <p>Pintura pro l&aacute;tex marfil</p>
                                <!-- BOTON DE COMPRA -->
                                <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons right">shopping_cart</i>A&ntilde;adir </a>
                                <!-- MODAL DE COMPRA -->
                                <div id="modal3" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <div class="col s12 m12 l12">
                                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../web/img/producto3.jpg">
                                                </div>
                                                <div class="card-stacked">
                                                    <div class="card-content">
                                                        <p>Pintura pro l&aacute;tex marfil</p><br>
                                                        <p>Presentaci&oacute;n&#58; Cubeta</p><br>
                                                        <div class="input-field">
                                                        <input placeholder="1" id="cantidad" type="number" class="validate">
                                                        <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                                        </div>
                                                        <p>Precio Unitario&#58; &#36;25.00</p><br>
                                                        <p>Sub-total&#58; &#36;25.00</p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                                    </div>
                                </div>    

                                <!-- ESPACIO -->
                                <div class="white-text">.</div>

                                <!-- BOTON DE COMENTARIOS -->
                                <a class="blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab"  href="#modal5" type="submit" name="action" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios">Rese&ntilde;as
                                    <i class="material-icons">comment</i>
                                </a>
                                <!-- MODAL DE COMENTARIOS -->
                                <div id="modal5" class="modal bottom-sheet">
                                    <div class="modal-content">
                                        <!-- COMENTARIOS -->
                                        <ul class="collection">
                                        <li class="collection-header"><h5>Comentarios</h5></li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">Andres Gomez</span>
                                            <p>Excelente<br>
                                            Nunca habia comprado productos de gran calidad
                                            </p>
                                        </li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">David Mejia</span>
                                            <p>Buena Pintura<br>
                                            Lo mejor
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DE VALORACIONES -->
                            <div class="card-reveal">
                                <!-- TITUOLO -->
                                <span class="card-title grey-text text-darken-4">Valorar<i class="material-icons right">close</i></span>
                                <!-- ESTRELLAS -->
                                <div class="ec-stars-wrapper">
                                <p class="center">Valoracion</p><br>
                                    <!-- 5 ESTRELLAS PARA VALORAR -->
                                    <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                                </div>
                                <!-- COMENTARIOS -->
                                <div class="card-action">
                                    <div class="row">
                                        <form class="col s12">
                                            <!-- TEXT AREA PARA COMENTAR -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Comentarios</label>
                                                <button class="btn tooltipped waves-effect waves-light" type="submit" name="action" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar
                                                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CUARTO PRODUCTO -->
                    <div class="col s12 m6 l3">
                        <div class="card sticky-action">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../web/img/producto4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="tooltipped card-title activator blue-text text-darker-1" data-position="top"  data-delay="50" data-tooltip="A&ntilde;adir Valoraci&oacute;n">&#36;25.00<i class="material-icons right">more_vert</i></span>
                                <p>CUB</p>
                                <p>Pintura pro l&aacute;tex azul </p>
                                <!-- BOTON DE COMPRA -->
                                <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal4"><i class="material-icons right">shopping_cart</i>A&ntilde;adir </a>
                                <!-- MODAL DE COMPRA -->
                                <div id="modal4" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <div class="col s12 m12 l12">
                                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../web/img/producto4.jpg">
                                                </div>
                                                <div class="card-stacked">
                                                    <div class="card-content">
                                                        <p>Pintura l&aacute;tex azul</p><br>
                                                        <p>Presentaci&oacute;n&#58; Cubeta</p><br>
                                                        <div class="input-field">
                                                        <input placeholder="1" id="cantidad" type="number" class="validate">
                                                        <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                                        </div>
                                                        <p>Precio Unitario&#58; &#36;25.00</p><br>
                                                        <p>Sub-total&#58; &#36;25.00</p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                                    </div>
                                </div>    

                                <!-- ESPACIO -->
                                <div class="white-text">.</div>

                                <!-- BOTON DE COMENTARIOS -->
                                <a class="blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab"  href="#modal5" type="submit" name="action" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios">Rese&ntilde;as
                                    <i class="material-icons">comment</i>
                                </a>
                                <!-- MODAL DE COMENTARIOS -->
                                <div id="modal5" class="modal bottom-sheet">
                                    <div class="modal-content">
                                        <!-- COMENTARIOS -->
                                        <ul class="collection">
                                        <li class="collection-header"><h5>Comentarios</h5></li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">Andres Gomez</span>
                                            <p>Excelente<br>
                                            Nunca habia comprado productos de gran calidad
                                            </p>
                                        </li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">David Mejia</span>
                                            <p>Buena Pintura<br>
                                            Lo mejor
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DE VALORACIONES -->
                            <div class="card-reveal">
                                <!-- TITUOLO -->
                                <span class="card-title grey-text text-darken-4">Valorar<i class="material-icons right">close</i></span>
                                <!-- ESTRELLAS -->
                                <div class="ec-stars-wrapper">
                                <p class="center">Valoracion</p><br>
                                    <!-- 5 ESTRELLAS PARA VALORAR -->
                                    <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                                </div>
                                <!-- COMENTARIOS -->
                                <div class="card-action">
                                    <div class="row">
                                        <form class="col s12">
                                            <!-- TEXT AREA PARA COMENTAR -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Comentarios</label>
                                                <button class="btn tooltipped waves-effect waves-light" type="submit" name="action" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar
                                                </button>
                                                </div>
                                            </div>
                                        </form>
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
                        <div class="card sticky-action">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../web/img/producto1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="tooltipped card-title activator blue-text text-darker-1" data-position="top"  data-delay="50" data-tooltip="A&ntilde;adir Valoraci&oacute;n">&#36;25.00<i class="material-icons right">more_vert</i></span>
                                <p>CUB</p>
                                <p>Pintura l&aacute;tex blanco ostra high standard.</p>
                                <!-- BOTON DE COMPRA -->
                                <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons right">shopping_cart</i>A&ntilde;adir </a>
                                <!-- MODAL DE COMPRA -->
                                <div id="modal1" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <div class="col s12 m12 l12">
                                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../web/img/producto1.jpg">
                                                </div>
                                                <div class="card-stacked">
                                                    <div class="card-content">
                                                        <p>Pintura l&aacute;tex blanco ostra high standard</p><br>
                                                        <p>Presentaci&oacute;n&#58; Cubeta</p><br>
                                                        <div class="input-field">
                                                        <input placeholder="1" id="cantidad" type="number" class="validate">
                                                        <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                                        </div>
                                                        <p>Precio Unitario&#58; &#36;25.00</p><br>
                                                        <p>Sub-total&#58; &#36;25.00</p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                                    </div>
                                </div>    

                                <!-- ESPACIO -->
                                <div class="white-text">.</div>

                                <!-- BOTON DE COMENTARIOS -->
                                <a class="blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab"  href="#modal5" type="submit" name="action" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios">Rese&ntilde;as
                                    <i class="material-icons">comment</i>
                                </a>
                                <!-- MODAL DE COMENTARIOS -->
                                <div id="modal5" class="modal bottom-sheet">
                                    <div class="modal-content">
                                        <!-- COMENTARIOS -->
                                        <ul class="collection">
                                        <li class="collection-header"><h5>Comentarios</h5></li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">Andres Gomez</span>
                                            <p>Excelente<br>
                                            Nunca habia comprado productos de gran calidad
                                            </p>
                                        </li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">David Mejia</span>
                                            <p>Buena Pintura<br>
                                            Lo mejor
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DE VALORACIONES -->
                            <div class="card-reveal">
                                <!-- TITUOLO -->
                                <span class="card-title grey-text text-darken-4">Valorar<i class="material-icons right">close</i></span>
                                <!-- ESTRELLAS -->
                                <div class="ec-stars-wrapper">
                                <p class="center">Valoracion</p><br>
                                    <!-- 5 ESTRELLAS PARA VALORAR -->
                                    <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                                </div>
                                <!-- COMENTARIOS -->
                                <div class="card-action">
                                    <div class="row">
                                        <form class="col s12">
                                            <!-- TEXT AREA PARA COMENTAR -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Comentarios</label>
                                                <button class="btn tooltipped waves-effect waves-light" type="submit" name="action" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar
                                                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SEGUNDO PRODUCTO -->
                    <div class="col s12 m6 l3">
                        <div class="card sticky-action">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../web/img/producto2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="tooltipped card-title activator blue-text text-darker-1" data-position="top"  data-delay="50" data-tooltip="A&ntilde;adir Valoraci&oacute;n">&#36;25.00<i class="material-icons right">more_vert</i></span>
                                <p>GAL</p>
                                <p>Pintura pro l&aacute;tex blanco hueso.</p>
                                <!-- BOTON DE COMPRA -->
                                <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">shopping_cart</i>A&ntilde;adir </a>
                                <!-- MODAL DE COMPRA -->
                                <div id="modal2" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <div class="col s12 m12 l12">
                                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../web/img/producto2.jpg">
                                                </div>
                                                <div class="card-stacked">
                                                    <div class="card-content">
                                                        <p>Pintura pro l&aacute;tex blanco hueso.</p><br>
                                                        <p>Presentaci&oacute;n&#58; Gal&ioacute;n</p><br>
                                                        <div class="input-field">
                                                        <input placeholder="1" id="cantidad" type="number" class="validate">
                                                        <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                                        </div>
                                                        <p>Precio Unitario&#58; &#36;25.00</p><br>
                                                        <p>Sub-total&#58; &#36;25.00</p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                                    </div>
                                </div>    

                                <!-- ESPACIO -->
                                <div class="white-text">.</div>

                                <!-- BOTON DE COMENTARIOS -->
                                <a class="blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab"  href="#modal5" type="submit" name="action" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios">Rese&ntilde;as
                                    <i class="material-icons">comment</i>
                                </a>
                                <!-- MODAL DE COMENTARIOS -->
                                <div id="modal5" class="modal bottom-sheet">
                                    <div class="modal-content">
                                        <!-- COMENTARIOS -->
                                        <ul class="collection">
                                        <li class="collection-header"><h5>Comentarios</h5></li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">Andres Gomez</span>
                                            <p>Excelente<br>
                                            Nunca habia comprado productos de gran calidad
                                            </p>
                                        </li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">David Mejia</span>
                                            <p>Buena Pintura<br>
                                            Lo mejor
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DE VALORACIONES -->
                            <div class="card-reveal">
                                <!-- TITUOLO -->
                                <span class="card-title grey-text text-darken-4">Valorar<i class="material-icons right">close</i></span>
                                <!-- ESTRELLAS -->
                                <div class="ec-stars-wrapper">
                                <p class="center">Valoracion</p><br>
                                    <!-- 5 ESTRELLAS PARA VALORAR -->
                                    <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                                </div>
                                <!-- COMENTARIOS -->
                                <div class="card-action">
                                    <div class="row">
                                        <form class="col s12">
                                            <!-- TEXT AREA PARA COMENTAR -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Comentarios</label>
                                                <button class="btn tooltipped waves-effect waves-light" type="submit" name="action" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar
                                                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TERCER PRODUCTO -->
                    <div class="col s12 m6 l3">
                        <div class="card sticky-action">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../web/img/producto3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="tooltipped card-title activator blue-text text-darker-1" data-position="top"  data-delay="50" data-tooltip="A&ntilde;adir Valoraci&oacute;n">&#36;25.00<i class="material-icons right">more_vert</i></span>
                                <p>CUB</p>
                                <p>Pintura pro l&aacute;tex marfil</p>
                                <!-- BOTON DE COMPRA -->
                                <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons right">shopping_cart</i>A&ntilde;adir </a>
                                <!-- MODAL DE COMPRA -->
                                <div id="modal3" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <div class="col s12 m12 l12">
                                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../web/img/producto3.jpg">
                                                </div>
                                                <div class="card-stacked">
                                                    <div class="card-content">
                                                        <p>Pintura pro l&aacute;tex marfil</p><br>
                                                        <p>Presentaci&oacute;n&#58; Cubeta</p><br>
                                                        <div class="input-field">
                                                        <input placeholder="1" id="cantidad" type="number" class="validate">
                                                        <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                                        </div>
                                                        <p>Precio Unitario&#58; &#36;25.00</p><br>
                                                        <p>Sub-total&#58; &#36;25.00</p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                                    </div>
                                </div>    

                                <!-- ESPACIO -->
                                <div class="white-text">.</div>

                                <!-- BOTON DE COMENTARIOS -->
                                <a class="blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab"  href="#modal5" type="submit" name="action" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios">Rese&ntilde;as
                                    <i class="material-icons">comment</i>
                                </a>
                                <!-- MODAL DE COMENTARIOS -->
                                <div id="modal5" class="modal bottom-sheet">
                                    <div class="modal-content">
                                        <!-- COMENTARIOS -->
                                        <ul class="collection">
                                        <li class="collection-header"><h5>Comentarios</h5></li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">Andres Gomez</span>
                                            <p>Excelente<br>
                                            Nunca habia comprado productos de gran calidad
                                            </p>
                                        </li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">David Mejia</span>
                                            <p>Buena Pintura<br>
                                            Lo mejor
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DE VALORACIONES -->
                            <div class="card-reveal">
                                <!-- TITUOLO -->
                                <span class="card-title grey-text text-darken-4">Valorar<i class="material-icons right">close</i></span>
                                <!-- ESTRELLAS -->
                                <div class="ec-stars-wrapper">
                                <p class="center">Valoracion</p><br>
                                    <!-- 5 ESTRELLAS PARA VALORAR -->
                                    <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                                </div>
                                <!-- COMENTARIOS -->
                                <div class="card-action">
                                    <div class="row">
                                        <form class="col s12">
                                            <!-- TEXT AREA PARA COMENTAR -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Comentarios</label>
                                                <button class="btn tooltipped waves-effect waves-light" type="submit" name="action" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar
                                                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CUARTO PRODUCTO -->
                    <div class="col s12 m6 l3">
                        <div class="card sticky-action">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../web/img/producto4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="tooltipped card-title activator blue-text text-darker-1" data-position="top"  data-delay="50" data-tooltip="A&ntilde;adir Valoraci&oacute;n">&#36;25.00<i class="material-icons right">more_vert</i></span>
                                <p>CUB</p>
                                <p>Pintura pro l&aacute;tex azul </p>
                                <!-- BOTON DE COMPRA -->
                                <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal4"><i class="material-icons right">shopping_cart</i>A&ntilde;adir </a>
                                <!-- MODAL DE COMPRA -->
                                <div id="modal4" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                        <div class="col s12 m12 l12">
                                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../web/img/producto4.jpg">
                                                </div>
                                                <div class="card-stacked">
                                                    <div class="card-content">
                                                        <p>Pintura l&aacute;tex azul</p><br>
                                                        <p>Presentaci&oacute;n&#58; Cubeta</p><br>
                                                        <div class="input-field">
                                                        <input placeholder="1" id="cantidad" type="number" class="validate">
                                                        <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                                        </div>
                                                        <p>Precio Unitario&#58; &#36;25.00</p><br>
                                                        <p>Sub-total&#58; &#36;25.00</p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                                    </div>
                                </div>    

                                <!-- ESPACIO -->
                                <div class="white-text">.</div>

                                <!-- BOTON DE COMENTARIOS -->
                                <a class="blue tooltipped waves-effect waves-light btn modal-trigger halfway-fab"  href="#modal5" type="submit" name="action" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios">Rese&ntilde;as
                                    <i class="material-icons">comment</i>
                                </a>
                                <!-- MODAL DE COMENTARIOS -->
                                <div id="modal5" class="modal bottom-sheet">
                                    <div class="modal-content">
                                        <!-- COMENTARIOS -->
                                        <ul class="collection">
                                        <li class="collection-header"><h5>Comentarios</h5></li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">Andres Gomez</span>
                                            <p>Excelente<br>
                                            Nunca habia comprado productos de gran calidad
                                            </p>
                                        </li>
                                        <li class="collection-item avatar">
                                            <i class="material-icons circle">comment</i>
                                            <span class="title">David Mejia</span>
                                            <p>Buena Pintura<br>
                                            Lo mejor
                                            </p>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL DE VALORACIONES -->
                            <div class="card-reveal">
                                <!-- TITUOLO -->
                                <span class="card-title grey-text text-darken-4">Valorar<i class="material-icons right">close</i></span>
                                <!-- ESTRELLAS -->
                                <div class="ec-stars-wrapper">
                                <p class="center">Valoracion</p><br>
                                    <!-- 5 ESTRELLAS PARA VALORAR -->
                                    <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                                    <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                                </div>
                                <!-- COMENTARIOS -->
                                <div class="card-action">
                                    <div class="row">
                                        <form class="col s12">
                                            <!-- TEXT AREA PARA COMENTAR -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Comentarios</label>
                                                <button class="btn tooltipped waves-effect waves-light" type="submit" name="action" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar
                                                </button>
                                                </div>
                                            </div>
                                        </form>
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
            </main>
            <!--Archivo maestro que contiene el footer-->
            <?php
                include('../app/view/footer_public.php');
            ?> 
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="../web/js/main.js"></script>
            <script type="text/javascript" src="../web/js/ini.js"></script>
            <script type="text/javascript" src="../js/materialize.min.js"></script>
            <script type="text/javascript" src="../web/js/fontawesom.js"></script>   
    </body>
</html>