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
    componenteHead('ADMIN | Usuario');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
?>
<body>
    <?php componenteNavbar($usuario -> getNombre()); ?>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-auto bg-color rounded-top">
                <div class="d-flex">
                    <i class="bi bi-people-fill text-light py-2 px-2 icono"></i>
                    <h5 class="px-2 py-2 text-light">Todos los usuarios</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col bg-color rounded-end rounded-bottom d-grid p-2">
                <?php tablaUsuarios(); ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row gap-2 my-2">
            <div class="col-sm-auto bg-color rounded d-grid px-2 py-2 text-center">
            <button class="btn btn-outline-color">
                <i class="bi bi-person-plus-fill mt-2 icono"></i>
            </button>
            </div>
            <div class="col bg-color rounded d-grid p-2">
                <button class="btn btn-outline-color" data-bs-toggle="modal" data-bs-target="#formModalCrearUsuario">Crear un usuario</button>
            </div>
        </div>
    </div>

    <?php modalCerrar(); ?>
    <?php formModalCrearUsuario(); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>
</body>