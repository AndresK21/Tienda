<div class="white-text">.</div>
<div class="white-text">.</div>

<!--Formulario para insertar las categorias-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="categoria1" name="categoria" type="text" class="validate" value='<?php print($categoria->getCategoria())?>' required />
                <label for="categoria1" class="blue-grey-text text-darken-4">Categoria</label>
            </div>
        </div>
        <div class="input-field col s12">
        <?php
            Page::showSelect("Marca", "marca", $categoria->getId_Marca(), $categoria->getMarcas());
        ?>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='crear_categoria' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>