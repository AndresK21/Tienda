<div class="white-text">.</div>

<div class="center-align"><h4>Crear tipo de producto</h4></div>

<!--Formulario para insertar los tipos de productos-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="tip" type="text" name="tipo_p" class="validate" value='<?php print($tipo_p->getTipo_p())?>' required />
                <label for="tip" class="black-text">Tipo de producto</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='crear' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>