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
    <div class="container-fluid">
        <div class="row bg-color rounded my-1">
            <?php tablaCategoria($conexion -> getConexion()); ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row bg-color rounded my-1">
            <div class="col p-2 d-grid gap-2">
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#formModalCrearUsuario">Crear un usuario</button>
            </div>
        </div>
    </div>

    <?php modalCerrar(); ?>
    <?php formModalCrearUsuario(); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>

</body>