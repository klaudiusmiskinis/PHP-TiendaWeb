<?php
    session_start();
    if ($_SESSION['rol'] != 'admin') {
        header("Location: index.php");
        exit();
    }
    include('../clases/usuario.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/formularios.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/modal.php');
    include('../componentes/tabla.php');
    include('../database/conexion.php');
    componenteHead('ADMIN | Productos');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
?>
<body>

    <?php componenteNavbar($usuario -> getNombre()); ?>

    <div class="container-fluid mt-2">
        <div class="row text-end">
            <div class="col">
                <button class="btn btn-color" data-bs-toggle="modal" data-bs-target="#formModalCrearProducto">
                    <i class="bi bi-boxes"></i>
                    Crear un Producto
                </button>
            </div>
        </div>
    </div> 

    <div class="container-fluid">
        <div class="row rounded my-1">
            <?php tablaProducto($conexion); ?>
        </div>
    </div>

    <?php modalCerrar(); ?>
    <?php formModalCrearProducto($conexion); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>

</body>