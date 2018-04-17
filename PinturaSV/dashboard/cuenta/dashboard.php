<!DOCTYPE html>
<html lang='es'>
    <head>
        <?php
            include('../../app/view/public/referencias.php');
        ?>
        <title>Dashboard</title>
    </head>
    <body>
        <header>
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../../app/view/dashboard/nav_dash.php');
            ?>
        </header>

        <main>
            <div class='row'>
                <div class='col s12 m3 l3'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas2.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas3.jpg' alt='estadistica'></a></div>
                <div class='col s12 m3 l3'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas4.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas5.jpg' alt='estadistica'></a></div>
            </div>
            <div class='row'>
                <div class='col s12 m3 l3'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas5.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas4.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas3.jpg' alt='estadistica'></a></div>
                <div class='col s12 m3 l3'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas2.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas.jpg' alt='estadistica'></a></div>
            </div>
            <div class='row'>
                <div class='col s12 m3 l3'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas2.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas3.jpg' alt='estadistica'></a></div>
                <div class='col s12 m3 l3'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas4.jpg' alt='estadistica'></a></div>
                <div class='col s12 m2 l2'><a class='modal-trigger' href='#modal1'><img class='responsive-img' src='../../web/img/estadisticas5.jpg' alt='estadistica'></a></div>
            </div>



            <!-- Modal de especificacion de estadisticas -->
            <div id='modal1' class='modal modal-fixed-footer'>
                <div class='modal-content'>
                <h4>Estad&iacute;sticas de visitas</h4>
                    <img class='responsive-img' src='../web/img/estadisticas.jpg' alt='estadistica'>
                </div>
                <div class='modal-footer'>
                <a href='#!' class=' modal-action modal-close waves-effect waves-red btn-flat'>Salir</a>
                <a href='#!' class=' modal-action modal-close waves-effect waves-green btn-flat'>Aceptar</a>
                </div>
            </div>

        </main>

        <!--Archivo maestro que contiene el footer-->
        <?php
            include('../../app/view/dashboard/footer_dash.php');
        ?>
        
        <!--Import jQuery before materialize.js-->
        <script type='text/javascript' src='../../web/js/main.js'></script>
        <script type='text/javascript' src='../../web/js/ini.js'></script>
        <script type='text/javascript' src='../../js/materialize.min.js'></script>
    </body>
</html>