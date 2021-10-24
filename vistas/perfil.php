<?php
    session_start();
    if (empty($_SESSION['nombre'])) {
        header("Location: index.php");
    }
    include('../database/conexion.php');
    include('../componentes/head.php');
    include('../componentes/background.php');
    include('../componentes/navbar.php');
    include('../componentes/scripts.php');
    componenteHead('Perfil');
    componenteBackground();
?>

<body>
    <?php componenteNavbar($_SESSION['nombre']); ?>
    <?php componenteScripts(); ?>
</body>