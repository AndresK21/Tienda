<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="../web/css/icon.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Iniciar Sesion</title>
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
      <li><a href="../public/categoria_aceite.php">Aceite</a></li>
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
            <li><a href="contactanos.php">Contactanos</a></li>
            <li><a href="#!"><i class="material-icons">shopping_cart</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="../public/nosotros.php">Nosotros</a></li>
      <li><a href="contactanos.php">Contactanos</a></li>
      <li><a href="#!"> <i class="material-icons new badge">shopping_cart</i>Añadido<span class="new badge">1</span></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
    <!-- CONTENEDOR DE LA TABLA -->
    <div class="container">
        <div>
          <h3 class="center-align">Disfruta de multiples beneficios</h3>
        </div>
      <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width">
        <li class="tab col s3"><a class="active" href="#test-swipe-1">Iniciar Sesion</a></li>
        <li class="tab col s3"><a href="#test-swipe-2">Registrarse</a></li>
      </ul>
      <!-- PESTAÑA DE INICIAR SESION -->
      <div id="test-swipe-1" class="col s12">
        <!-- CONTENEDOR DEl LOGIN -->
          <div class="container">
              <div class="row">
                  <!-- FORMULARIO DE USUARIO -->
                  <form class="col s12">
                    <!-- INGRESAR DE USUARIO -->
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">person_pin</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix"> Usuario</label>
                      </div>
                      <!-- INGRESAR DE CLAVE -->
                    <div class="row">
                      <div class="input-field col s9">
                          <i class="material-icons prefix">lock</i>
                        <input id="password icon_prefix" type="password" class="validate">
                        <label for="password icon_prefix">Contraseña</label>
                      </div>
                      <!-- VER CONTRASEÑA -->
                      <div class="input-field col s3">
                        <a class="waves-effect waves-teal btn-flat"><i class="large material-icons">remove_red_eye</i></a>
                      </div>
                    </div>
                    <!-- BOTON DE INICIAR SESION -->
                    <div class="input-field col s12">
                      <a class="blue waves-effect waves-light btn ">Iniciar Sesion</a>
                    </div>
                  </form>
                </div>
            </div>
          </div>
      </div>
      <!-- PESTAÑA DE REGISTRO -->
      <div id="test-swipe-2" class="col s12">
        <!-- CONTENEDOR DEL REGISTRO -->
        <div class="container">
          <!-- PRIMER REGISTRO -->
          <div class="row">
              <form class="col s12">
                <div class="row">
                  <!-- INGRESAR NOMBRES -->
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Nombres</label>
                  </div>
                  <!-- INGRESAR CORREO -->
                  <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email icon_prefix" type="email" class="validate">
                    <label for="email icon_prefix">Email</label>
                  </div>
                  <div>
                  <!-- INGRESAR APELLIDOS -->
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Apellidos</label>
                  </div>
                <!-- SEGUNDA FILA -->  
                <div class="row">
                  <!-- INGRESAR CONTRASEÑA -->
                  <div class="input-field col s6">
                      <i class="material-icons prefix">lock</i>
                    <input id="password icon_prefix" type="password" class="validate">
                    <label for="password icon_prefix">Contraseña</label>
                  </div>
                  <!-- INGRESAR NOMBRE DE USUARIO -->
                  <div class="input-field col s6">
                      <i class="material-icons prefix">person_pin</i>
                    <input id="email icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Usuario</label>
                  </div>
                  <!-- INGRESAR CONTRASEÑA2 -->
                  <div class="input-field col s6">
                      <i class="material-icons prefix">security</i>
                    <input id="password icon_prefix" type="password" class="validate">
                    <label for="password icon_prefix">Repetir Contraseña</label>
                  </div>
                  <!-- BOTON INICIAR SESION -->
                  <div class="input-field col s6">
                    <a class="blue waves-effect waves-light btn">Iniciar Sesion</a>
                  </div>
                </div>
                <!-- TERMINOS Y CONDICIONES -->
                <p class="right">
                  <div class="card-action ">
                    <input type="checkbox" id="indeterminate-checkbox" />
                    <form action="#">
                      <!-- CHECKBOX -->
                    <label for="indeterminate-checkbox">Acepto los
                      <!-- LINK PARA ABRIR EL MODAL -->
                      <a class="modal-trigger" href="#modal1">terminos y condiciones
                          <!-- MODAL -->
                          <div id="modal1" class="modal modal-fixed-footer">
                            <div class="modal-content">
                              <h4>Terminos y Condiciones</h4>
                              <p class="black-text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, ratione amet, facilis voluptatibus 
                                aspernatur enim accusamus incidunt repellat assumenda adipisci nulla molestiae obcaecati qui ex cumque. Ut pariatur dolorem harum!
                              </p>
                            </div>
                            <div class="modal-footer">
                              <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">No, gracias</a>
                              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Acepto</a>
                            </div>
                          </div>
                      </a>
                  </div>
                </form>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>   
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../web/js/main.js"></script>
    <script type="text/javascript" src="../web/js/ini.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../web/js/fontawesom.js"></script>
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
      </footer>
  </body>
</html>