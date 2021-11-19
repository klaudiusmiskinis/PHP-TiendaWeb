<?php
    session_start();
    if ($_SESSION['rol'] != 'admin') {
        header("Location: index.php");
    }
    include('../componentes/background.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/popups.php');
    include('../componentes/tabla.php');
    componenteHead('ADMIN | Usuario');
?>
<body>
    <?php componenteBackground(); ?>
    <?php componenteNavbar($_SESSION['nombre']); ?>
    
    <!-- TABLA PARA TODOS LOS USUARIOS -->
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
    <?php formModalCrearUsuario(); ?>
    <?php formModalTodosUsuarios(); ?>
    <?php popupCerrar(); ?>
    <?php componentePanel($_SESSION['nombre'], $_SESSION['rol']); ?>
    <?php componenteScripts(); ?>
</body>