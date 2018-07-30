<div class="white-text">.</div>
<div class="white-text">.</div>

<!--Formulario de inicio de sesion-->
<form method="post" enctype='multipart/form-data'>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6 offset-l3 offset-m3">
				<div class="card grey lighten-4">
					<div class="card-content">
						<span class="card-title"><h4>Iniciar sesi&oacute;n</h4></span>
						<div class="center-align">
							<div class="row">
								<img class="responsive-img circle" src="../../web/img/pintura.jpg">
								<div class="input-field col s12">
									<input name="nombre_usuario" id="usuario" type="text" class="validate" value='<?php print($object->getUsuario()) ?>' required />
									<label class="black-text" for="usuario">Nombre de usuario</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input name="contrasena" id="contrasena" type="password" class="validate" '<?php print($object->getContrasena()) ?>' required />
									<label class="black-text" for="contrasena">Contrase&ntilde;a</label>
								</div>
							</div>
						</div>
						<div class="left-align">
							<a href="correo.php">&iquest;Olvido su contrase&ntilde;a&#63;</a>
						</div>
						<div class="white-text">.</div>
						<div class="right-align blue-grey-text">
							<button type='submit' name='iniciar' class='btn blue-grey darken-4 waves-effect'>Iniciar sesi&oacute;n</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<form>