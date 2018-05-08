<form method="post"  class="col s12">
    <div class="container">
        <!-- MODAL DE VALORACIONES -->
        <div class="card-reveal">
            <!-- TITUOLO -->
            <span class="card-title grey-text text-darken-4">Valorar</span>
            <!-- ESTRELLAS -->
            <p class="clasificacion">
                <input id="radio1" type="radio" name="estrellas" value="5">
                <label for="radio1">★</label>
                <input id="radio2" type="radio" name="estrellas" value="4">
                <label for="radio2">★</label>
                <input id="radio3" type="radio" name="estrellas" value="3">
                <label for="radio3">★</label>
                <input id="radio4" type="radio" name="estrellas" value="2">
                <label for="radio4">★</label>
                
                </p>
            <!-- COMENTARIOS -->
            <div class="card-action">
                <div class="row">
                    <!-- TEXT AREA PARA COMENTAR -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="hola" type="text" name="comentario"     >
                            <label for="hola">Comentarios</label>
                            <button class="btn tooltipped waves-effect waves-light" type="submit" name="valorar" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>