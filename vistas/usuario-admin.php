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
<body class="bg-secondary">
    <?php componenteNavbar($usuario -> getNombre()); ?>

    <div class="container-fluid">
        <?php tablaUsuarios(); ?>
    </div>

    <div class="container-fluid">
        <div class="row gap-2 my-2">
            <div class="col d-grid p-2">
                <button class="btn btn-color" data-bs-toggle="modal" data-bs-target="#formModalCrearUsuario">
                    <i class="bi bi-person-plus-fill icono"></i>
                    Crear un usuario
                </button>
            </div>
        </div>
    </div> 
    
    <?php modalCerrar(); ?>
    <?php formModalCrearUsuario(); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>
</body>