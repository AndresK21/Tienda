<!DOCTYPE html>
<html lang="es">
  <head>
      <?php
        include('../app/view/referencias.php');
      ?>
    <title>Iniciar Sesi&oacute;n</title>
  </head>
  <body>
      <header>
        <!--Archivo maestro que contiene la barra de navegacion-->
        <?php
          include('../app/view/nav_public.php');
        ?>
      </header>
      <main>
      <!-- CONTENEDOR DE LA TABLA -->
      <div class="container">
          <div>
            <h3 class="center-align">Disfruta de multiples beneficios</h3>
          </div>
        <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width">
          <li class="tab col s3"><a class="active" href="#test-swipe-1">Iniciar Sesi&oacute;n</a></li>
          <li class="tab col s3"><a href="#test-swipe-2">Registrarse</a></li>
        </ul>
        <!-- PESTAÑA DE INICIAR Sesi&oacute;n -->
        <div id="test-swipe-1" class="col s12">
          <!-- CONTENEDOR DEl LOGIN -->
            <div class="container">
                <div class="row">
                    <!-- FORMULARIO DE USUARIO -->
                    <form class="col s12">
                      <!-- INGRESAR DE USUARIO -->
                      <div class="row">
                        <div class="input-field col l10 m9 s12">
                          <i class="material-icons prefix">person_pin</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix"> Usuario</label>
                        </div>
                      </div>
                        <!-- INGRESAR DE CLAVE -->
                      <div class="row">
                        <div class="input-field col s9">
                            <i class="material-icons prefix">lock</i>
                          <input id="password icon_prefix" type="password" class="validate">
                          <label for="password icon_prefix">Contrase&ntilde;a</label>
                        </div>
                        <!-- VER CONTRASEÑA -->
                        <div class="input-field col s3">
                          <a class="waves-effect waves-teal"><i class="material-icons black-text">visibility</i></a>
                        </div>
                      </div>
                      <!-- BOTON DE INICIAR Sesi&oacute;n -->
                      <div class="row">
                        <div class="input-field col s12">
                          <a class="blue waves-effect waves-light btn ">Iniciar Sesi&oacute;n</a>
                        </div>
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
                    <div class="input-field col l6 m6 s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Nombres</label>
                    </div>
                    <!-- INGRESAR CORREO -->
                    <div class="input-field col l6 m6 s12">
                      <i class="material-icons prefix">email</i>
                      <input id="email icon_prefix" type="email" class="validate">
                      <label for="email icon_prefix">Email</label>
                    </div>
                  </div>
                  <!-- SEGUNDA FILA -->
                  <div class="row">
                    <!-- INGRESAR APELLIDOS -->
                    <div class="input-field col l6 m6 s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Apellidos</label>
                    </div>  
                    <!-- INGRESAR CONTRASEÑA -->
                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">lock</i>
                      <input id="password icon_prefix" type="password" class="validate">
                      <label for="password icon_prefix">Contrase&ntilde;a</label>
                    </div>
                  </div>
                  <div class="row">
                    <!-- INGRESAR NOMBRE DE USUARIO -->
                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">person_pin</i>
                      <input id="email icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Usuario</label>
                    </div>
                    <!-- INGRESAR CONTRASEÑA2 -->
                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">security</i>
                      <input id="password icon_prefix" type="password" class="validate">
                      <label for="password icon_prefix">Repetir Contrase&ntilde;a</label>
                    </div>
                  </div>
                    <!-- BOTON INICIAR Sesi&oacute;n -->
                    <div class="input-field col l6 m6 s12">
                      <a class="blue waves-effect waves-light btn">Iniciar Sesi&oacute;n</a>
                    </div>
                    <div class="white-text">.</div>
                    <div class="white-text">.</div>
                  
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
    </main>
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