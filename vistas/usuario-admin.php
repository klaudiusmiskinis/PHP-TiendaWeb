<?php
    session_start();
    if ($_SESSION['rol'] != 'admin') {
        header("Location: index.php");
        exit();
    }
    include('../clases/usuario.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/stats.php');
    include('../componentes/head.php');
    include('../componentes/formularios.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/modal.php');
    include('../componentes/tabla.php');
    include('../database/conexion.php');
    componenteHead('ADMIN | Usuario');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
?>
<body>
    <?php componenteNavbar($usuario -> getNombre()); ?>
    <div class="container-fluid mt-2">
        <div class="row text-end">
            <div class="col">
                <button class="btn btn-color" data-bs-toggle="modal" data-bs-target="#formModalCrearUsuario">
                    <i class="bi bi-person-plus-fill icono"></i>
                    Crear un usuario
                </button>
            </div>
        </div>
    </div> 

    <div class="container-fluid">
    
    <div class="row bg-color p-2 rounded my-2">
        <h5 class="text-center text-light">Estadísticas generales de los usuarios</h5>
    </div>
        <div class="row gap-2">
            <div class="col text-center">
                <?php countRolUsers($conexion); ?>
            </div>
            <div class="col text-center">
                <?php countRolAdmins($conexion); ?>
            </div>
            <div class="col text-center">
                <?php countUsers($conexion); ?>
            </div>
        </div>
        <div class="row gap-2">
            <div class="col text-center">
                <?php maxIdStats($conexion); ?>
            </div>
            <div class="col text-center">
                <?php usuariosOff($conexion); ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <?php tablaUsuarios($conexion); ?>
    </div>
    
    <?php modalCerrar(); ?>
    <?php formModalCrearUsuario(); ?>
    <?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
    <?php componenteScripts(); ?>
</body>