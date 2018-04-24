<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
    <li><a href='categoria_aceite.php'>Aceite</a></li>
    <li class='divider'></li>
    <li><a href='categoria_agua.php'>Agua</a></li>
</ul>
<!-- Dropdown Structure Mobile -->
<ul id='dropdown2' class='dropdown-content'>
    <li><a href='categoria_aceite.php'>Aceite</a></li>
    <li class='divider'></li>
    <li><a href='categoria_agua.php'>Agua</a></li>
</ul>
<!--Navbar Fijo-->
<div class='navbar-fixed'>
<nav>
    <!--Navbar Color Azul-->
    <div class='nav-wrapper  blue'>
        <img class='brand-logo' src='../../web/img/mipintura.png'>
        <a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
        <ul class='right hide-on-med-and-down'>
        <li><a href='index.php'>Inicio</a></li>
        <li><a class='dropdown-button' href='#!' data-activates='dropdown1'>Categor&iacute;as<i class='material-icons right'>arrow_drop_down</i></a></li>
        <li><a href='nosotros.php'>Nosotros</a></li>
        <li><a href='contactanos.php'>Cont&aacute;ctanos</a></li>
        <li><a href='iniciar_sesion.php'>Iniciar Sesi&oacute;n</a></li>
        <li><a href='pagar.php'><i class='material-icons'>shopping_cart</i></a></li>
        </ul>
    </div>
    </div>
</nav>
<!--Navbar Mobil-->
<ul class='side-nav' id='mobile-demo'>
    <li><a href='index.php'>Inicio</a></li>
    <li><a href='iniciar_sesion.php'>Iniciar Sesi&oacute;n</a></li>
    <li><a href='nosotros.php'>Nosotros</a></li>
    <li><a href='contactanos.php'>Cont&aacute;ctanos</a></li>
    <li><a href='pagar.php'> <i class='material-icons new badge'>shopping_cart</i>Añadido<span class='new badge'>1</span></a></li>
    <li><a class='dropdown-button' href='#!' data-activates='dropdown2'>Categor&iacute;as<i class='material-icons right'>arrow_drop_down</i></a></li>
</ul>