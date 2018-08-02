<div class="white-text">.</div>

<div class="center-align"><h4>Editar perfil</h4></div>

<!--Formulario de editar perfil-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">person</i>
                <input id="nombre" name="nombre_completo" type="text" class="validate" autocomplete="off" value='<?php print($empleado->getNombre()) ?>' required />
                <label for="Nombre_completo" class="black-text">Nombre completo</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">email</i>    
                <input id="email" name="correo_electronico" type="email" class="validate" autocomplete="off" value='<?php print($empleado->getCorreo()) ?>' required />
                <label for="email" class="black-text">Correo electr&oacute;nico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="usuario" name="nombre_usuario" type="text" class="validate" autocomplete="off" value='<?php print($empleado->getUsuario()) ?>' required />
                <label for="usuario" class="black-text">Usuario</label>
            </div>
        </div>        

        <div class="white-text">.</div>
        <div class="white-text">.</div>

        <div class="row">
            <div class="input-field col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='editar' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Guardar'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>