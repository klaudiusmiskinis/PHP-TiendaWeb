<?php
    session_start();
    if (empty($_SESSION['nombre'])) {
        header("Location: index.php");
    }
    include('../componentes/background.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/popups.php');
    componenteHead('Home');
    componenteBackground();
?>
<body>
<?php componenteNavbar($_SESSION['nombre']); ?>
<div class="container-fluid">
    <div class="row text-center rounded p-2">
        <div class="col">Prueba</div>
    </div>
</div>
<?php componentePanel($_SESSION['nombre'], $_SESSION['rol']); ?>
<?php componenteScripts(); ?>
<?php popupCerrar(); ?>
</body>

