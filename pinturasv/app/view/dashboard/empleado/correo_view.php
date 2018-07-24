<div class="white-text">.</div>
<div class="center-align"><h4>Recuperar contrase&ntilde;a</h4></div>

<!--Formulario de recuperacion de contraseña-->
<form method="post" enctype='multipart/form-data'>
    <div class="row">
        <div class="input-field col s12">
            <input id="nombr" type="text" name="nombre" class="validate" required>
            <label for="nombr" class="black-text">Nombre</label>
        </div>
        <div class="input-field col s12">
            <input id="cmail" type="email" name="correo" class="validate" required>
            <label for="cmail" class="black-text">Correo electr&oacute;nico</label>
        </div>
        <div class="input-field col s12">
            <input id="tel" type="number" name="telefono" min="70000000" step="any" class="validate" required>
            <label for="tel" class="black-text">Tel&eacute;fono</label>
        </div>
        <div class="input-field col s12">
            <textarea id="mensaj" type="text" name="mensaje" class="materialize-textarea" required></textarea>
            <label for="mensaj" class="black-text">Mensaje</label>
        </div>
    </div>
<form>