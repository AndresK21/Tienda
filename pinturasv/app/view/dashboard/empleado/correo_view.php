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
            <textarea id="mensaj" type="text" name="mensaje" class="materialize-textarea" required></textarea>
            <label for="mensaj" class="black-text">Mensaje</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 right-align">
            <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
            <button type='submit' name='enviar' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>mail</i>Enviar</button>
        </div>
    </div>
<form>