<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="editar_perfil.php">Editar perfil</a></li>
    <li class="divider"></li>
    <li><a href="inicio.php">Cerrar sesi&oacute;n</a></li>
</ul>
<!-- Dropdown Structure Mobile -->
<ul id="dropdown2" class="dropdown-content">
    <li><a href="editar_perfil.php">Editar perfil</a></li>
    <li class="divider"></li>
    <li><a href="inicio.php">Cerrar sesi&oacute;n</a></li>
</ul>

<div class="navbar-fixed">  
    <nav>
    <!--Navbar Color gris azulado-->
        <div class="nav-wrapper  blue-grey darken-4">
        <img class="brand-logo" src="../web/img/mipintura.png">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Bienvenido "Usuario"<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        </div>
    </nav>
</div>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Bienvenido "Usuario"<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>