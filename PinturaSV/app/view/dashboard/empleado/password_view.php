<div class="white-text">.</div>
<div class="white-text">.</div>

<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">lock</i>
                <input id="contrasena_antigua" type="password" name='clave_actual_1' class="validate">
                <label for="contrasena_antigua">Contrase&ntilde;a antigua</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">security</i>
                <input id="confirmar_antigua" type="password" name='clave_actual_2' class="validate">
                <label for="confirmar_antigua">Confirmar contrase&ntilde;a antigua</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">lock</i>
                <input id="contra_nueva" type="password" name='clave_nueva_1' class="validate">
                <label for="contra_nueva">Nueva contrase&ntilde;a</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">security</i>
                <input id="confirm_contra" type="password" name='clave_nueva_2' class="validate">
                <label for="confirm_contra">Confirmar nueva contrase&ntilde;a</label>
            </div>
        </div>

        <div class="white-text">.</div>
        <div class="white-text">.</div>

        <div class="row">
            <div class="col s12 right-align">
                <a href='index.php' class='btn waves-effect red darken4 tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i>    Cancelar</a>
                <button type='submit' name='cambiar' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Cambiar'><i class='material-icons'>save</i>   Guardar cambios</button>
            </div>
        </div>
    </form>
</div>