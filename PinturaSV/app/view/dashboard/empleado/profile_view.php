<!--Formulario de editar perfil-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">person</i>
                <input id="nombre" name="nombre_completo" type="text" class="validate" value='<?php print($empleado->getNombre()) ?>' required />
                <label for="Nombre_completo">Nombre completo</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">email</i>    
                <input id="email" name="correo_electronico" type="email" class="validate" value='<?php print($empleado->getCorreo()) ?>' required />
                <label for="email">Correo electr&oacute;nico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="usuario" name="nombre_usuario" type="text" class="validate" value='<?php print($empleado->getUsuario()) ?>' required />
                <label for="usuario">Usuario</label>
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
            <div class="input-field col s12 right-align">
                <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Guardar'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>