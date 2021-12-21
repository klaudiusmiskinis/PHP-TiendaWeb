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
    componenteHead('ADMIN | Subcategoria');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
?>
<body>

    <?php componenteNavbar($usuario -> getNombre()); ?>

    <div class="container-fluid mt-2">
        <div class="row text-end">
            <div class="col">
                <button class="btn btn-color" data-bs-toggle="modal" data-bs-target="#formModalCrearSubcategoria">
                    <i class="bi bi-boxes"></i>
                    Crear una subcategoria
                </button>
            </div>
        </div>
    </div> 

    <div class="container-fluid">
        <div class="row rounded my-1">
            <?php tablaSubcategoria($conexion); ?>
        </div>
    </div>

    <?php modalCerrar(); ?>
    <?php formCrearSubcategoria(); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>

</body>