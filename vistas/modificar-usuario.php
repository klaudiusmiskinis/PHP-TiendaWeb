<?php

    session_start();
    if ($_SESSION['rol'] != 'admin') {
        header("Location: index.php");
    }
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    $id = $_GET['id'];
?>
<body>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>
</body>