<!--Formulario de editar perfil-->
<div class="row">
    <form class="col s12" method="post" enctype='multipart/form-data'>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">person</i>
                <input id="nombre" type="text" class="validate" value='<?php print($empleado->getNombre()) ?>' required />
                <label for="Nombre_completo">Nombre completo</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">email</i>    
                <input id="email" type="email" class="validate" value='<?php print($empleado->getCorreo()) ?>' required />
                <label for="email">Correo electr&oacute;nico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="usuario" type="text" class="validate" value='<?php print($empleado->getUsuario()) ?>' required />
                <label for="usuario">Usuario</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">security</i>
                <input id="contrasena" type="password" class="validate" value='<?php print($empleado->getContrasena()) ?>' required />
                <label for="contrasena">Contrase&ntilde;a</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">accessibility</i>
                <input id="permiso" type="number" min="2" max="3" step="any" class="validate" value='<?php print($empleado->getNombre()) ?>' required>
                <label for="permiso">Permiso</label>
            </div>
            <div class='file-field input-field col s12 m6 l6'>
                <div class='waves-effect waves-light btn blue-grey darken-4'>
                    <span><i class='material-icons blue-gray-text text-darken-4'>image</i></span>
                    <input type='file' name='archivo' required/>
                </div>
                <div class='file-path-wrapper'>
                    <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
                </div>
            </div>
        </div>
        

        <div class="white-text">.</div>
        <div class="white-text">.</div>

        <div class="row">
            <div class="col s12 right-align">
            <button type='submit' name='crear' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar</button>
            </div>
        </div>
    </form>
</div>