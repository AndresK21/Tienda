<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="../web/css/icon.css" rel="stylesheet">
        <link href="../web/css/style.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Dashboard</title>
    </head>
    <body>
        <header>
            <?php
                include('../controllers/view/nav_dash.php');
            ?>
        </header>

        <main>
            <div class="row">
                <div class="col s12 m3 l3"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas2.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas3.jpg" alt="estadistica"></a></div>
                <div class="col s12 m3 l3"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas4.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas5.jpg" alt="estadistica"></a></div>
            </div>
            <div class="row">
                <div class="col s12 m3 l3"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas5.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas4.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas3.jpg" alt="estadistica"></a></div>
                <div class="col s12 m3 l3"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas2.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas.jpg" alt="estadistica"></a></div>
            </div>
            <div class="row">
                <div class="col s12 m3 l3"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas2.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas3.jpg" alt="estadistica"></a></div>
                <div class="col s12 m3 l3"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas4.jpg" alt="estadistica"></a></div>
                <div class="col s12 m2 l2"><a class="modal-trigger" href="#modal1"><img class="responsive-img" src="../web/img/estadisticas5.jpg" alt="estadistica"></a></div>
            </div>



            <!-- Modal Structure -->
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                <h4>Estadisticas de visitas</h4>
                    <img class="responsive-img" src="../web/img/estadisticas.jpg" alt="estadistica">
                </div>
                <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Salir</a>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
                </div>
            </div>


            <?php
                include('../controllers/view/ini_sesion.php');
            ?>

        </main>

        <?php
            include('../controllers/view/footer_dash.php');
        ?>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>