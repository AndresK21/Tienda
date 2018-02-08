<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="../web/css/icon.css" rel="stylesheet">
        <link href="../web/css/googlemaps.css" rel="stylesheet">
        <link href="../web/css/valoraciones.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Pintura de Agua</title>
    </head>
    <body>
        <header>
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../controllers/view/nav_public.php');
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
                            <span class="card-title activator grey-text text-darken-4">CUB<i class="material-icons right">more_vert</i></span>
                            <p>Pintura l&aacute;tex blanco ostra high standard.</p>
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
                                                        <p>Pintura l&aacute;tex blanco ostra high standard</p><br>
                                                        <p>Cantidad:1</p><br>
                                                        <p>Precio Unitario: $25.00</p><br>
                                                    </div>
                                                    <!-- BOTONES -->
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
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
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
                            <span class="card-title activator grey-text text-darken-4">GAL<i class="material-icons right">more_vert</i></span>
                            <p>Pintura pro l&aacute;tex blanco hueso</p>
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
                                                        <p>Pintura pro l&aacute;tex blanco hueso</p><br>
                                                        <p>Cantidad:1</p><br>
                                                        <p>Precio Unitario: $25.00</p><br>
                                                    </div>
                                                    <!-- BOTONES -->
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
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
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
                            <span class="card-title activator grey-text text-darken-4">CUB<i class="material-icons right">more_vert</i></span>
                            <p>Pintura pro l&aacute;tex marfil.</p>
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
                                                        <p>Pintura pro l&aacute;tex marfil.</p><br>
                                                        <p>Cantidad:1</p><br>
                                                        <p>Precio Unitario: $25.00</p><br>
                                                    </div>
                                                    <!-- BOTONES -->
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
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
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
                            <span class="card-title activator grey-text text-darken-4">CUB<i class="material-icons right">more_vert</i></span>
                            <p>Pintura pro l&aacute;tex marfil.</p>
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
                                                        <p>Pintura pro l&aacute;tex marfil.</p><br>
                                                        <p>Cantidad:1</p><br>
                                                        <p>Precio Unitario: $25.00</p><br>
                                                    </div>
                                                    <!-- BOTONES -->
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
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
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
                        <span class="card-title activator grey-text text-darken-4">CUB<i class="material-icons right">more_vert</i></span>
                        <p>Pintura l&aacute;tex blanco ostra high standard.</p>
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
                                                    <p>Pintura l&aacute;tex blanco ostra high standard</p><br>
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                </div>
                                                <!-- BOTONES -->
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
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
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
                        <span class="card-title activator grey-text text-darken-4">GAL<i class="material-icons right">more_vert</i></span>
                        <p>Pintura pro l&aacute;tex blanco hueso</p>
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
                                                    <p>Pintura pro l&aacute;tex blanco hueso</p><br>
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                </div>
                                                <!-- BOTONES -->
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
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
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
                        <span class="card-title activator grey-text text-darken-4">CUB<i class="material-icons right">more_vert</i></span>
                        <p>Pintura pro l&aacute;tex marfil.</p>
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
                                                    <p>Pintura pro l&aacute;tex marfil.</p><br>
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                </div>
                                                <!-- BOTONES -->
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
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
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
                        <span class="card-title activator grey-text text-darken-4">CUB<i class="material-icons right">more_vert</i></span>
                        <p>Pintura pro l&aacute;tex marfil.</p>
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
                                                    <p>Pintura pro l&aacute;tex marfil.</p><br>
                                                    <p>Cantidad:1</p><br>
                                                    <p>Precio Unitario: $25.00</p><br>
                                                </div>
                                                <!-- BOTONES -->
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
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
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
                include('../controllers/view/footer_public.php');
            ?> 
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="../web/js/main.js"></script>
            <script type="text/javascript" src="../web/js/ini.js"></script>
            <script type="text/javascript" src="../js/materialize.min.js"></script>
            <script type="text/javascript" src="../web/js/fontawesom.js"></script>   
    </body>
</html>