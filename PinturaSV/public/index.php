 <!DOCTYPE html>
  <html lang="es">
    <head>
        <?php
            include('../app/view/referencias.php');
        ?>
      <title>Inicio</title>
    </head>
    <body>
      <header>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="categoria_aceite.php">Aceite</a></li>
          <li class="divider"></li>
          <li><a href="categoria_agua.php">Agua</a></li>
        </ul>
        <!-- Dropdown Structure Mobile -->
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="categoria_aceite.php">Aceite</a></li>
          <li class="divider"></li>
          <li><a href="categoria_agua.php">Agua</a></li>
        </ul>
        <div class="navbar-fixed">
        <nav>
          <!--Navbar Color Azul-->
            <div class="nav-wrapper  blue">
              <img class="brand-logo" src="../web/img/mipintura.png">
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="contactanos.php">Contactanos</a></li>
                <li><a href="iniciar_sesion.php">Iniciar Sesi&oacute;n</a></li>
                <li><a class="tooltipped"  data-position="bottom"  data-delay="50" data-tooltip="Ver Carrito" href="#!"><i class="material-icons">shopping_cart</i></a></li>
              </ul>
            </div>
          </div>
        </nav>
        <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="index.php">Inicio</a></li>
          <li><a href="iniciar_sesion.php">Iniciar Sesi&oacute;n</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="contactanos.php">Contactanos</a></li>
          <li><a href="#!"> <i class="material-icons new badge">shopping_cart</i>A&ntilde;adido<span class="new badge">1</span></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </header>
      <!--SLIDER-->
      <div class="slider hide-on-small-only	">
        <ul class="slides">
          <li>
            <!-- IMAGEN 1 -->
            <img class="responsive-img" src="../web/img/slider/slider1.jpg"> 
            <div class="caption center-align">
              <h3 class="pink-text">Pinturas de la mejor calidad</h3>
            </div>
          </li>
          <li>
            <!-- IMAGEN 2 -->
            <img src="../web/img/slider/slider2.jpg">
          </li>
          <li>
            <!-- IMAGEN 3 -->
            <img src="../web/img/slider/slider3.jpg">
            <div class="caption left-align">
            </div>
            </div>
          </li>
        </ul>
      </div>
      <main>
        <!-- CONTENEDOR DE LA PRIMERA CATEGORIA -->
        <div class="container">
          <div>
            <h2 class="center-align">Categorias</h2>
          </div>
          <div>
            <!-- PRIMERA CATEGORIA -->
            <h4 class="left-align">Pintura de Aceite <a href="categoria_aceite.php" target="_blank" class="blue darken-1 waves-effect waves-light btn"><i class="material-icons right">apps</i>Ver m&aacute;s</a></h4>
          </div>
          <div class="row">
            <!-- PRIMER PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image ">
                  <img src="../web/img/producto1.jpg">
                  <span class="card-title black-text">&#36;25.00</span>
                  <!-- MODAL DE VALORACIONES -->
                  <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves-light blue"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">star</i></a>
                  <div id="modal9" class="modal bottom-sheet">
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
                      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    </div>
                  </div>
                </div>
                  <div class="card-content">
                    <p>Pintura l&aacute;tex blanco ostra high standard.</p>
                  </div>
                  <div class="card-action">
                    <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                      <!-- Modal Structure -->
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
                  </div>
              </div>
            </div>
            <!-- SEGUNDO PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                  <div class="card-image ">
                    <img src="../web/img/producto2.jpg">
                    <span class="card-title black-text">&#36;25.00</span>
                    <!-- MODAL DE VALORACIONES -->
                    <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves-light blue"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">star</i></a>
                      <div id="modal9" class="modal bottom-sheet">
                        <div class="modal-content">
                          <h4>Este producto tiene 5 estrellas</h4>
                          <p>Comentarios</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        </div>
                      </div>
                  </div>
                <div class="card-content">
                  <p>Pintura pro l&aacute;tex blanco hueso.</p>
                </div>
                <div class="card-action">
                  <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                    <!-- Modal Structure -->
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
                                <p>Pintura l&aacute;tex blanco hueso</p><br>
                                <p>Presentaci&oacute;n&#58; Gal&oacute;n</p><br>
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
                </div>
              </div>
            </div>
            <!-- TERCER PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                  <div class="card-image ">
                    <img src="../web/img/producto3.jpg">
                    <span class="card-title black-text">&#36;25.00</span>
                    <!-- MODAL DE VALORACIONES -->
                    <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves-light blue"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">star</i></a>
                      <div id="modal9" class="modal bottom-sheet">
                        <div class="modal-content">
                          <h4>Este producto tiene 5 estrellas</h4>
                          <p>Comentarios</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        </div>
                      </div>
                  </div>
                <div class="card-content">
                  <p>Pintura pro l&aacute;tex marfil</p>
                </div>
                <div class="card-action">
                  <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                    <!-- Modal Structure -->
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
                                <p>Pintura l&aacute;tex marfil</p><br>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- PARALAX DE DIVISION -->
        <div class="parallax-container">
          <div class="parallax"><img src="../web/img/paralaxinicio2.jpg"></div>
        </div>
        <!-- CONTENEDOR DE LA SEGUNDA CATEGORIA -->
        <div class="container">
          <div>
            <h4 class="left-align">Pintura de Agua <a href="categoria_agua.php" target="_blank" class="blue darken-1 waves-effect waves-light btn"><i class="material-icons right">apps</i>Ver m&aacute;s</a></h4>
          </div>
          <div class="row">
            <!-- PRIMER PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image ">
                  <img src="../web/img/producto1.jpg">
                  <span class="card-title black-text">&#36;25.00</span>
                  <!-- MODAL DE VALORACIONES -->
                  <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves-light blue"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">star</i></a>
                  <div id="modal9" class="modal bottom-sheet">
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
                      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    </div>
                  </div>
                </div>
                  <div class="card-content">
                    <p>Pintura l&aacute;tex blanco ostra high standard.</p>
                  </div>
                  <div class="card-action">
                    <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                      <!-- Modal Structure -->
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
                  </div>
              </div>
            </div>
            <!-- SEGUNDO PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                  <div class="card-image ">
                    <img src="../web/img/producto2.jpg">
                    <span class="card-title black-text">&#36;25.00</span>
                    <!-- MODAL DE VALORACIONES -->
                    <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves-light blue"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">star</i></a>
                      <div id="modal9" class="modal bottom-sheet">
                        <div class="modal-content">
                          <h4>Este producto tiene 5 estrellas</h4>
                          <p>Comentarios</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        </div>
                      </div>
                  </div>
                <div class="card-content">
                  <p>Pintura pro l&aacute;tex blanco hueso.</p>
                </div>
                <div class="card-action">
                  <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                    <!-- Modal Structure -->
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
                                <p>Pintura l&aacute;tex blanco hueso</p><br>
                                <p>Presentaci&oacute;n&#58; Gal&oacute;n</p><br>
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
                </div>
              </div>
            </div>
            <!-- TERCER PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                  <div class="card-image ">
                    <img src="../web/img/producto3.jpg">
                    <span class="card-title black-text">&#36;25.00</span>
                    <!-- MODAL DE VALORACIONES -->
                    <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves-light blue"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">star</i></a>
                      <div id="modal9" class="modal bottom-sheet">
                        <div class="modal-content">
                          <h4>Este producto tiene 5 estrellas</h4>
                          <p>Comentarios</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        </div>
                      </div>
                  </div>
                <div class="card-content">
                  <p>Pintura pro l&aacute;tex marfil</p>
                </div>
                <div class="card-action">
                  <a class=" blue waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                    <!-- Modal Structure -->
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
                                <p>Pintura l&aacute;tex marfil</p><br>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- PARALAX FINAL -->
        <div class="parallax-container">
          <div class="parallax"><img src="../web/img/paralaxinicio.jpg"></div>
        </div>    
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../web/js/fontawesom.js"></script>
    </main> 
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
                    <li><i class="small  material-icons">email</i><a class="grey-text text-lighten-3 valign-wrapper"  href="https&#58;//mail.google.com/mail/u/0/#inbox?compose=new" target="_blanck"> mipintura@gmail.com</a></li>
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
    </body>
  </html>