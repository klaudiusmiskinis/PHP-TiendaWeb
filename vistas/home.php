<?php
    session_start();
    if (empty($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }
    include('../clases/usuario.php');
    
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/modal.php');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
    componenteHead('Home');
?>
<body>
<?php  ?>
<?php componenteNavbar($usuario -> getNombre()); ?>
<div class="container-fluid">
    <div class="row text-center rounded p-2">
        <div class="col">Prueba</div>
    </div>
</div>
<?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
<?php modalCerrar(); ?>
<?php componenteScripts(); ?>
</body>