<div class="white-text">.</div>

<div class="center-align"><h4>Cambiar contrase&ntilde;a</h4></div>

<div class="container">
    <form method='post'>
        <div class='row center-align'>
            <label>CLAVE ACTUAL</label>
        </div>
        <div class='row'>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>lock</i>
                <input id='clave_actual_1' type='password' name='clave_actual_1' class='validate' required/>
                <label for='clave_actual_1' class="black-text">Clave</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>security</i>
                <input id='clave_actual_2' type='password' name='clave_actual_2' class='validate' required/>
                <label for='clave_actual_2' class="black-text">Confirmar clave</label>
            </div>
        </div>
        <div class='row center-align'>
            <label>CLAVE NUEVA</label>
        </div>
        <div class='row'>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>lock</i>
                <input id='clave_nueva_1' type='password' name='clave_nueva_1' class='validate' required/>
                <label for='clave_nueva_1' class="black-text">Clave</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>security</i>
                <input id='clave_nueva_2' type='password' name='clave_nueva_2' class='validate' required/>
                <label for='clave_nueva_2' class="black-text">Confirmar clave</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='cambiar' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Guardar'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>