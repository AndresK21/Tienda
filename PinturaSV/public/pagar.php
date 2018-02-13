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
        <title>Carrito</title>
    </head>
    <body>
        <header>
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../app/view/nav_public.php');
            ?>
        </header>
        <main>
            <!--Divs para dar un espacio arriba de la tabla-->
            <div class="white-text">.</div>
            <div class="white-text">.</div>
            <div class="white-text">.</div>

            <div class="container">
                <!--Parte de clasificacion de la tabla-->
                <table class="bordered highlight responsive-table espacio_sup espacio_inf">
                    <thead class="blue white-text">
                    <tr>
                        <th>Imagen</th>
                        <th>Descripci&oacute;n</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    <!--Producto de ejemplo 1-->
                    <tr>
                        <td><img class="imagen circle" src="../web/img/producto1.jpg"></td>
                        <td>Pintura l&aacute;tex blanco ostra high standard.</td>
                        <td><input placeholder="2" id="cantidad" type="number" class="validate"></td>
                        <td>$25.00</td>
                        <td>$50.00</td>
                        <td><a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                        </td>
                    </tr>
                    <!--Producto de ejemplo 2-->
                    <tr>
                        <td><img class="imagen circle" src="../web/img/producto2.jpg"></td>
                        <td>Pintura pro l&aacute;tex blanco hueso.</td>
                        <td><input placeholder="1" id="cantidad" type="number" class="validate"></td>
                        <td>$25.00</td>
                        <td>$25.00</td>
                        <td><a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                        
                        </td>
                    </tr>
                    <!--Producto de ejemplo 3-->
                    <tr>
                        <td><img class="imagen circle" src="../web/img/producto3.jpg"></td>
                        <td>Pintura pro l&aacute;tex marfil.</td>
                        <td><input placeholder="2" id="cantidad" type="number" class="validate"></td>
                        <td>$25.00</td>
                        <td>$50.00</td>
                        <td><a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                        
                        </td>
                    </tr>

                    </tbody>
                </table>

                <!--Espacio donde se muestra el costo total de la compra y proceder a pagar-->
                <div class="right-align">
                    <h5 style="text-decoration: underline;">Total a pagar:  $150.00</h5>
                    <a class="waves-effect waves-light btn espacio_inf"><i class="material-icons right">shopping_cart</i>Hacer compra</a>
                </div>
            </div>
                

            <!-- Modal de eliminacion de productos -->
            <div id="modal_eliminar" class="modal">
                <div class="modal-content">
                    <h4>Eliminar producto</h4>
                    <p>&iquest;Esta seguro que desea eliminar este producto&#63;</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Eliminar</a>
                </div>
            </div>
        </main>
        <!--Archivo maestro que contiene el footer-->
        <?php
            include('../app/view/footer_public.php');
        ?>  
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>