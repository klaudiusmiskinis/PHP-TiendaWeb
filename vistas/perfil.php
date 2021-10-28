<?php
    session_start();
    if (empty($_SESSION['nombre'])) {
        header("Location: index.php");
    }
    include('../componentes/panel-lateral.php');
    include('../componentes/background.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/popup-salir.php');
    componenteHead('Perfil');
    componenteBackground();
?>

<body>
    <?php componenteNavbar($_SESSION['nombre']); ?>
    <div class="container-fluid">

        <!-- CAMBIAR NOMBRE -->
        <form class="row bg-dark text-light rounded mb-2" action="nombre-usuario.php" method="POST">
            <div class="d-grid col-11 mx-auto">
            <h3 class="mx-1 mt-3">Cambiar nombre de usuario</h3>
            <div class="input-group mb-3">
                    <input type="text" name="nombre-nuevo" id="nombre-nuevo" class="form-control my-1" placeholder="<?php echo $_SESSION['nombre']; ?>" autocomplete="off">
                    <button class="btn btn-outline-light my-1" type="submit">Cambiar nombre</button>
                </div>
            </div>
        </form>

        <!-- CAMBIAR CONTRASEÑA -->
        <form class="row bg-dark text-light rounded mb-2" action="password-usuario.php" method="POST">
            <div class="d-grid col-11 mx-auto">
            <h3 class="mx-1 mt-3">Cambiar contraseña</h3>
                <input type="password" name="password-one" id="password-one" class="form-control my-1" placeholder="Introduce la nueva contraseña" autocomplete="off">
                <div class="input-group mb-3">
                    <input type="password" name="password-two" id="password-two" class="form-control my-1" placeholder="Vuelve a introducir tu nueva contraseña" autocomplete="off">
                    <button class="btn btn-outline-light my-1" type="submit">Cambiar contraseña</button>
                </div>
            </div>
        </form>

        <!-- CAMBIAR FOTO DE PERFIL -->
        <form class="row bg-dark text-light rounded" action="imagen-usuario.php" enctype="multipart/form-data">
            <div class="d-grid col-11 mx-auto">
                <h3 class="mx-1 mt-3">Cambiar imagen de perfil</h3>
                <div class="input-group mb-3">
                    <input type="file" name="imagenPerfil" id="imagenPerfil" class="form-control">
                    <button type="submit" class="input-group-text btn btn-outline-light" for="imagenPerfil">Cambiar imagen</button>
                </div>
            </div>
        </form>

    </div>
    <?php componentePanel($_SESSION['nombre'], $_SESSION['rol']); ?>
    <?php popupCerrar() ?>
    <?php componenteScripts(); ?>
</body>