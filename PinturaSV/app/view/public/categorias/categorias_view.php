<div class='container'>
    <h4 class='center'>Categorias</h4>
    <div class='row'>
    <?php
    foreach($categorias as $categoria){
        print("
            <div class='col s12 m6 l4'>
                <div class='card hoverable'>
                    <div class='card-image waves-effect waves-block waves-light'>
                    <img  src='../../web/img/categoria.jpg'>
                    </div>
                    <div class='card-content'>
                        <span class='card-title center activator grey-text text-darken-4'>$categoria[categoria]</span>
                        <p class='center'><a href='productos_categorias.php?id=$categoria[id_categoria]' class='tooltipped' data-tooltip='Ver más'><i class='small material-icons'>format_paint</i></a></p>
                    </div>
                </div>
            </div>
        ");
    }
    ?>
    </div>
</div>