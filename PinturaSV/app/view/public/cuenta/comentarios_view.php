<form method="post"  class="col s12">
    <div class="container">
        <div class="white-text">.</div>
        <div class="white-text">.</div>
        <!-- MODAL DE VALORACIONES -->
        <div class="card-reveal">
        <div class="row">
            <!-- TITUOLO -->
            <div class="col s12 l6">
            <h4><span class="card-title grey-text text-darken-4">Realiza una puntuación:</span></h4>
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
                <input id="radio5" type="radio" name="estrellas" value="1">
                <label for="radio5">★</label>
                </p>
            </div>
            <!-- COMENTARIOS -->
            <h4><span class="card-title grey-text text-darken-4">Realiza un comentario:</span></h4>
            <!-- TEXT AREA PARA COMENTAR -->
            <div class="row">
                <div class="input-field col s12 l6">
                    <input id="hola" type="text" name="comentario" autocomplete="off">
                    <label for="hola">Comentar</label>
                    <button class="btn tooltipped waves-effect waves-light" type="submit" name="valorar" data-position="botton" data-delay="50" data-tooltip="Enviar Comentario">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>