<?php
    session_start();
    if (empty($_SESSION['nombre'])) {
        header("Location: index.php");
    }
    include('../componentes/background.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../database/conexion.php');
    include('../componentes/head.php');
    componenteHead('Home');
    componenteBackground();
    componenteNavbar($_SESSION['nombre']);
    componenteScripts();
?>
