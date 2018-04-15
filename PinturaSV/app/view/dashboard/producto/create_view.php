<form class="col s12" method='post' enctype='multipart/form-data'>
    <div class="row">
        <div class="input-field col s12">
            <input id="nombre" type="text" class="validate" value='<?php print($producto->getNombre())?>' required>
            <label for="nombre" class="blue-grey-text text-darken-4">Nombre</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="cantidad" type="number" class="validate" value='<?php print($producto->getCantidad())?>' required>
            <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="precio" type="number" class="validate" max="999.9" min="0.01" step="any" value='<?php print($producto->getPrecio())?>' required>
            <label for="Precio" class="blue-grey-text text-darken-4">Precio</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="color" type="text" class="validate" value='<?php print($producto->getColor())?>' required>
            <label for="color" class="blue-grey-text text-darken-4">Color</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">

            <?php
                Page::showSelect("Marca", "marca", $producto->getMarca(), $producto->getMarcas());
            ?>

            <select>
                <option value="" disabled selected>Elija una marca</option>
                <option value="1">Marca 1</option>
                <option value="2">Marca 2</option>
                <option value="3">Marca 3</option>
            </select>
            <label class="blue-grey-text text-darken-4">Marca</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <select>
                <option value="" disabled selected>Elija una categor&iacute;a</option>
                <option value="1">Categor&iacute;a 1</option>
                <option value="2">Categor&iacute;a 2</option>
                <option value="3">Categor&iacute;a 3</option>
            </select>
            <label class="blue-grey-text text-darken-4">Categor&iacute;a</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <select>
                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                <option value="1">Presentaci&oacute;n 1</option>
                <option value="2">Presentaci&oacute;n 2</option>
                <option value="3">Presentaci&oacute;n 3</option>
            </select>
            <label class="blue-grey-text text-darken-4">Presentaci&oacute;n</label>
        </div>
    </div>
    <p>
        <input class="with-gap" name="group1" type="radio" id="opc1"  />
        <label for="opc1">En existencia</label>    
    </p>
    <p>
        <input class="with-gap" name="group1" type="radio" id="opc2"  />
        <label for="opc2">Sin existencias</label>    
    </p>
</form>