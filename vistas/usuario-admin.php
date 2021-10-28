<?php
    session_start();
    if (empty($_SESSION['nombre'])) {
        header("Location: index.php");
    }
    include('../database/conexion.php');
    include('../componentes/background.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/productos.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/popup-salir.php');
    componenteHead('Home');
    componenteBackground();
?>
<body>
    
<?php componentePanel($_SESSION['nombre'], $_SESSION['rol']); ?>
<?php componenteScripts(); ?>
<?php popupCerrar(); ?>
</body>