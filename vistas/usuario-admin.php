<?php
    session_start();
    if ($_SESSION['rol'] != 'admin') {
        header("Location: index.php");
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
        <div class="row bg-dark rounded my-1">
            <?php tablaUsuarios(); ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row bg-dark rounded my-1">
            <div class="col p-2 d-grid gap-2">
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#formModalCrearUsuario">Crear un usuario</button>
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#formModalEditarUsuario">Editar un usuario</button>
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#formModalEliminarUsuario">Eliminar un usuario</button>
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#formModalTodosUsuarios">Ver todos los usuarios</button>
            </div>
        </div>
    </div>
    
    <?php modalCerrar(); ?>
    <?php formModalCrearUsuario(); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>
</body>