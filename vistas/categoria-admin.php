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
    componenteHead('ADMIN | Categorias');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
?>
<body>

    <?php componenteNavbar($usuario -> getNombre()); ?>

    <div class="container-fluid mt-2">
        <div class="row text-end">
            <div class="col">
                <button class="btn btn-color" data-bs-toggle="modal" data-bs-target="#formModalCrearCategoria">
                    <i class="bi bi-boxes"></i>
                    Crear una categoria
                </button>
            </div>
        </div>
    </div> 

    <div class="container-fluid">
        <div class="row rounded my-1">
            <?php tablaCategoria($conexion); ?>
        </div>
    </div>

    <?php modalCerrar(); ?>
    <?php formCrearCategoria(); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>

</body>