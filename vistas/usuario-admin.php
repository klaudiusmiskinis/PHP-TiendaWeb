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
    include('../componentes/popup-salir.php');
    include('../componentes/tabla.php');
    componenteHead('ADMIN | Usuario');
?>
<body>
<?php componenteBackground(); ?>
<?php componenteNavbar($_SESSION['nombre']); ?>
<div class="container-fluid">
    <div class="row bg-dark text-light rounded p-2">
        <?php generarTablaAllUsers(); ?>
    </div>
</div>

<?php popupCerrar(); ?>
<?php componentePanel($_SESSION['nombre'], $_SESSION['rol']); ?>
<?php componenteScripts(); ?>
</body>