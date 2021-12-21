<?php
    session_start();

    if(isset($_POST['add'])) {
        $id = $_POST['id'];
        array_push($_SESSION['carrito'], $id);
        header("Location: ../vistas/productos.php");
    } elseif (isset($_POST['limpiar'])) {
        $_SESSION['carrito'] = [];
        header("Location: ../vistas/productos.php");
    }
?>