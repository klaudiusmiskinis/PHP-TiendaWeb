<?php
    session_start();
    if ($_SESSION['rol'] != 'admin') {
        header("Location: index.php");
        exit();
    }

    include('../clases/usuario.php');
    include('../database/conexion.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/formularios.php');
    include('../componentes/modal.php');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
    $id = $_GET['id'];
    if (empty($id)){
        header("Location: index.php");
        exit();
    }
    $conexion -> selectProductoById($id);
    componenteHead('ADMIN | Modificar producto');
?>
<body>
    <?php componenteNavbar($usuario -> getNombre()); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php formModificarProducto($conexion -> selectProductoById($id)); ?>
    <?php modalCerrar(); ?>
    <?php modalConfirmarEliminarProducto($conexion -> selectProductoById($id)); ?>
    <?php componenteScripts(); ?>
</body>