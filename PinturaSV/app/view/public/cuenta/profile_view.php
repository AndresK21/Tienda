<div class="white-text">.</div>

<div class="center-align"><h4>Editar perfil</h4></div>

<!--Formulario de editar perfil-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">person</i>
                <input id="nombre" name="nombres" type="text" class="validate" value='<?php print($cliente->getNombres()) ?>' required />
                <label for="Nombre_completo">Nombres</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">person</i>
                <input id="apellido" name="apellidos" type="text" class="validate" value='<?php print($cliente->getApellidos()) ?>' required />
                <label for="apellido">Apellidos</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">email</i>    
                <input id="emai" name="email" type="email" class="validate" value='<?php print($cliente->getEmail()) ?>' required />
                <label for="emai">Correo electr&oacute;nico</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="usuario" name="nombre_usuario" type="text" class="validate" value='<?php print($cliente->getNombre_usuario()) ?>' required />
                <label for="usuario">Usuario</label>
            </div>
        </div>        

        <div class="white-text">.</div>
        <div class="white-text">.</div>

        <div class="row">
            <div class="input-field col s12 right-align">
                <a class='btn waves-effect red darken-3' href="../index/index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Guardar'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>