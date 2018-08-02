<div class="white-text">.</div>

<div class="center-align"><h4>Editar marca</h4></div>

<!--Formulario para insertar marcas-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="marca1" name="marca" type="text" class="validate" autocomplete="off" value='<?php print($marca->getMarca())?>' required />
                <label for="marca1" class="black-text">Marca</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='actualizar_marca' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>