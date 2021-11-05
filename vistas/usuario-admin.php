<?php
    session_start();
    if ($_SESSION['rol'] != 'admin') {
        header("Location: index.php");
    }
    include('../componentes/background.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/popups.php');
    include('../componentes/tabla.php');
    componenteHead('ADMIN | Usuario');
?>
<body>
    <?php componenteBackground(); ?>
    <?php componenteNavbar($_SESSION['nombre']); ?>
    
    <!-- TABLA PARA TODOS LOS USUARIOS -->
    <div class="container-fluid">
        <div class="row bg-dark text-light rounded p-2">
            <h4 class="px-2">Todos los usuarios</h4>
            <?php tablaUsuarios(); ?> 
        </div>
    </div>

    <?php popupCerrar(); ?>
    <?php componentePanel($_SESSION['nombre'], $_SESSION['rol']); ?>
    <?php componenteScripts(); ?>
</body>