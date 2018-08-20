<form method="post" enctype='multipart/form-data'>
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
            <form class="col s12 ">
                <!-- INGRESAR DE USUARIO -->
                <div class="row">
                <div class="input-field col l9 offset-l1 m9 offset-m1 s12">
                    <i class="material-icons prefix">person_pin</i>
                    <input name="nombre_usuario" id="usuario" type="text" class="validate" autocomplete="off" value='<?php print($cliente->getNombre_usuario()) ?>' required />
                    <label for="icon_prefix"> Usuario</label>
                </div>
                </div>
                <!-- INGRESAR DE CLAVE -->
                <div class="row">
                    <div class="input-field col l9 offset-l1 m9 offset-m1 s12">
                    <i class="material-icons prefix">lock</i>
                    <input name="contrasena" id="contrasena" type="password" class="validate" autocomplete="off" value='<?php print($cliente->getContrasena()) ?>' required />
                    <label for="password icon_prefix">Contrase&ntilde;a</label>
                </div>
                </div>
                <!-- RECUPERACION -->
                <div class="col l9 offset-l1 m9 offset-m1 s12">
                    <a href="correo_cliente.php">&iquest;Olvido su contrase&ntilde;a&#63;</a>
                </div>
                <!-- BOTON DE INICIAR Sesi&oacute;n -->
                <div class="row">
                    <div class="input-field col l9 offset-l4 m9 offset-m4 s12 offset-s3">
                    <button type='submit' name='iniciar' class="blue waves-effect waves-light btn ">Iniciar Sesi&oacute;n</button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
    </form>


    <form method="post" enctype='multipart/form-data'>
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
                        <input name="nombres" id="nombres" type="text" class="validate" autocomplete="off" value='<?php print($cliente->getNombres()) ?>' required />
                        <label for="icon_prefix">Nombres</label>
                    </div>
                    <!-- INGRESAR APELLIDOS -->
                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="apellidos" id="apellidos" type="text" class="validate" autocomplete="off" value='<?php print($cliente->getApellidos()) ?>' required />
                        <label for="icon_prefix">Apellidos</label>
                    </div>
                </div>
                <!-- SEGUNDA FILA -->
                <div class="row">
                <!-- INGRESAR NOMBRE DE USUARIO -->
                <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">person_pin</i>
                        <input name="nombre_usuarior" id="nombre_usuarior" type="text" class="validate" autocomplete="off" value='<?php print($cliente->getNombre_usuario()) ?>' required />
                        <label for="icon_prefix">Usuario</label>
                    </div>
                    <!-- INGRESAR CORREO -->
                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">email</i>
                        <input name="email" id="email" type="email" class="validate" autocomplete="off" value='<?php print($cliente->getEmail()) ?>' required />
                        <label for="email icon_prefix">Email</label>
                    </div>
                </div>
                <div class="row">
                    <!-- INGRESAR CONTRASEÑA1 -->
                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">lock</i>
                        <input name="contrasena1" id="contrasena1" type="password" class="validate" autocomplete="off" value='<?php print($cliente->getContrasena()) ?>' required />
                        <label for="password icon_prefix">Contrase&ntilde;a</label>
                    </div>
                    <!-- INGRESAR CONTRASEÑA2 -->
                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">security</i>
                        <input name="contrasena2" id="contrasena2" type="password" class="validate" autocomplete="off" required />
                        <label for="password icon_prefix">Repetir Contrase&ntilde;a</label>
                    </div>
                </div>
                <!-- TERMINOS Y CONDICIONES -->
                <p class="right">
                    <div class="card-action ">
                        <div class="col s12 m12 l4 offset-l2">
                            <div class="g-recaptcha"  data-sitekey="6Lcba2oUAAAAAC-tJxoJ4P-fh_T3A51rkijPaPu3"></div>
                        </div>
                        <div class="white-text">.</div>
                    <input type="checkbox" id="indeterminate-checkbox" required/>
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
                    <!-- BOTON INICIAR Sesi&oacute;n -->
                    <div class="input-field col l9 offset-l5 m9 offset-m4 s2 offset-s3">
                        <button type='submit' name='crear' class="blue waves-effect waves-light btn ">Iniciar Sesi&oacute;n</button>
                    </div>
                    <div class="white-text">.</div>
                    <div class="white-text">.</div>
                </form>
            </div>
        </div>
    </div>
</form>