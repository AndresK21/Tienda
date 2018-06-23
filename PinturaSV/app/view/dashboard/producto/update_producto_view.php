<div class="white-text">.</div>

<div class="center-align"><h4>Editar producto</h4></div>

<!--Formulario para insertar los productos-->
<div class="row container">
    <form class="col s12" method="post" enctype='multipart/form-data'>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="nombre" type="text" name="nombre" class="validate" value='<?php print($producto->getNombre())?>' required>
                <label for="nombre" class="black-text">Nombre</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="cantidad" type="number" name="cantidad" class="validate" min="1" max="999" value='<?php print($producto->getCantidad())?>' required>
                <label for="Cantidad" class="black-text">Cantidad</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="precio" type="number" name="precio"class="validate" max="999.9" min="0.01" step="any" value='<?php print($producto->getPrecio())?>' required>
                <label for="Precio" class="black-text">Precio</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="color" type="text" name="color" class="validate" value='<?php print($producto->getColor())?>' required>
                <label for="color" class="black-text">Color</label>
            </div>
        </div>
        <div class="row">
            <div class='file-field input-field col s12 m6 l6'>
                <div class='waves-effect waves-light btn blue-grey darken-4'>
                    <span><i class='material-icons blue-gray-text text-darken-4'>image</i></span>
                    <input type='file' name='archivo' value='<?php print($producto->getImagen())?>' />
                </div>
                <div class='file-path-wrapper'>
                    <input type='text' class='file-path validate' placeholder='Seleccione una imagen' value='<?php print($producto->getImagen())?>' />
                </div>
            </div>
            <div class="input-field col s12 m6 l6">
                <?php
                    Page::showSelect("Categoria", "categoria", $producto->getId_categoria(), $producto->getCategorias());
                ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <?php
                    Page::showSelect("Presentacion", "presentacion", $producto->getId_presentacion(), $producto->getPresentaciones());
                ?>
            </div>
            <div class="col s12 m6 l6">

                <p>
                    <div class='switch'>
                        <span>Estado:</span>
                        <label class="black-text">
                            <i>Sin existencias</i>
                            <input type='checkbox' name='estado' <?php print($producto->getId_estado()?"checked":"") ?>/>
                            <span class='lever'></span>
                            <i>En existencia</i>
                        </label>
                    </div>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <?php
                    Page::showSelect("Marca", "marca", $producto->getId_marca(), $producto->getMarcas());
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>