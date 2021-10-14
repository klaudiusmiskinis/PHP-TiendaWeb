<?php
    session_start();
    include('../database/conexion.php');
    include('../componentes/head.php');
    include('../componentes/background.php');
    componenteHead('Perfil');
    componenteBackground();
?>

<body>
    <div class="container-md sticky">
        <div class="row">
            <div class="col-sm-auto navbar navbar-light bg-light mx-5 mt-3 p-2 blur">
                <p class="m-2"><?php echo 'Bienvenido '.$_SESSION['nombre'] ?></p>            
            </div>
            <nav class="col-md navbar navbar-light bg-light mx-5 mt-3 p-2 blur">
                <div class="m-2">Esto es una pagina temporal</div>
                <div class="m-2"><?php echo 'Tu id es el: '.$_SESSION['id'] ?></div>
                <div class="m-2"><?php echo 'Tu email es el: '.$_SESSION['email'] ?></div>
                <div class="m-2"><?php echo 'Tu rol es el: '.$_SESSION['rol'] ?></div>
            </nav>
        </div>
    </div>
</body>