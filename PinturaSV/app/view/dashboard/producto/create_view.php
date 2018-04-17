<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>

<!--Formulario para insertar los productos-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="nombre" type="text" class="validate" value='<?php print($producto->getNombre())?>' required>
                <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="cantidad" type="number" class="validate" value='<?php print($producto->getCantidad())?>' required>
                <label for="Cantidad">Cantidad</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="precio" type="number" class="validate" max="999.9" min="0.01" step="any" value='<?php print($producto->getPrecio())?>' required>
                <label for="Precio">Precio</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="color" type="text" class="validate" value='<?php print($producto->getPrecio())?>' required>
                <label for="color">Color</label>
            </div>
        </div>
        <div class="row">
            <div class='file-field input-field col s12 m6 l6'>
                <div class='waves-effect waves-light btn blue-grey darken-4'>
                    <span><i class='material-icons blue-gray-text text-darken-4'>image</i></span>
                    <input type='file' name='archivo' required/>
                </div>
                <div class='file-path-wrapper'>
                    <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
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
                    <input class="with-gap" name="group1" type="radio" id="opc1"  />
                    <label for="opc1">En existencia</label>    
                </p>
                <p>
                    <input class="with-gap" name="group1" type="radio" id="opc2"  />
                    <label for="opc2">Sin existencias</label>    
                </p>
            </div>
        </div>
    </form>
</div>