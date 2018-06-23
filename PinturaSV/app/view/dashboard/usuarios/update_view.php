<div class="white-text">.</div>

<div class="center-align"><h4>Editar empleado</h4></div>

<div class="container">
<!--Formulario para insertar los productos-->
<div class="row">
    <form class="col s12" method="post" enctype='multipart/form-data'>
    <!--Formulario para ingresar nuevo usuario-->
    <div class="row">
        <form class="">
            <div class="row">
                <div class="input-field ">
                    <i class="material-icons prefix">person</i>
                    <input name="nombre_completo" id="nombre" type="text" class="validate" value='<?php print($empleado->getNombre())?>' required>
                    <label for="nombre" class="black-text">Nombre completo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field ">
                    <i class="material-icons prefix">email</i> 
                    <input name="correo_electronico" id="email" type="email" class="validate" value='<?php print($empleado->getCorreo()) ?>' required />
                    <label for="email" class="black-text">Correo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field ">
                    <i class="material-icons prefix">account_circle</i>
                    <input name="nombre_usuario" id="usuario" type="text" class="validate" value='<?php print($empleado->getUsuario())?>' required>
                    <label for="usuario" class="black-text">Usuario</label>
                </div>
            </div>

            <div class="row">
                    <div class='col s12 m6'>
                            <p>
                                <div class='switch'>
                                    <span>Permiso:</span>
                                    <label>
                                        <i>Usuario</i>
                                        <input type='checkbox' name="id_permiso" <?php print($empleado->getId_permiso()?"":"checked") ?>/>
                                        <span class='lever'></span>
                                        <i>Administrador</i>
                                    </label>
                                </div>
                            </p>
                        </div>
                <div class='file-field input-field col s12 m6 l6'>
                    <div class='waves-effect waves-light btn blue-grey darken-4'>
                        <span><i class='material-icons blue-gray-text text-darken-4'>image</i></span>
                        <input type='file' name='archivo'/>
                    </div>
                    <div class='file-path-wrapper'>
                        <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </div>
    </form>
</div>
</div>