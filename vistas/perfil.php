<?php
    session_start();
    if (empty($_SESSION['nombre'])) {
        header("Location: index.php");
        exit();
    }
    include('../componentes/panel-lateral.php');
    include('../componentes/scripts.php');
    include('../clases/usuario.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/modal.php');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
    componenteHead('Perfil');
    
?>

<body>
    <?php componenteNavbar($_SESSION['nombre']); ?>
    <div class="container-fluid">
        <div class="accordion accordion-flush" id="acordeonPadre">
            <!-- CAMBIAR NOMBRE DEL PERFIL -->
            <div class="accordion-item bg-color text-dark rounded mb-2">
                <h2 class="accordion-header" id="flush-nombre">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-colapsar-nombre" aria-expanded="false" aria-controls="flush-colapsar-nombre">
                        Cambiar nombre de usuario
                    </button>
                </h2>
                <div id="flush-colapsar-nombre" class="accordion-collapse collapse" aria-labelledby="flush-nombre" data-bs-parent="#acordeonPadre">
                    <form action="nombre-usuario.php" method="POST">
                        <div class="d-grid col-11 mx-auto">
                        <div class="input-group my-3">
                                <input type="text" name="nombre-nuevo" id="nombre-nuevo" class="form-control my-1" placeholder="<?php echo $_SESSION['nombre']; ?>" autocomplete="off">
                                <button class="btn btn-outline-light my-1" type="submit">Cambiar nombre</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- CAMBIAR CONTRASEÑA -->
            <div class="accordion-item bg-color text-dark rounded mb-2">
                <h2 class="accordion-header" id="flush-password">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-colapsar-password" aria-expanded="false" aria-controls="flush-colapsar-password">
                        Cambiar contraseña
                    </button>
                </h2>
                <div id="flush-colapsar-password" class="accordion-collapse collapse" aria-labelledby="flush-password" data-bs-parent="#acordeonPadre">
                    <form class="row my-3" action="password-usuario.php" method="POST">
                        <div class="d-grid col-11 mx-auto">
                            <input type="password" name="password-one" id="password-one" class="form-control my-1" placeholder="Introduce la nueva contraseña" autocomplete="off">
                            <div class="input-group">
                                <input type="password" name="password-two" id="password-two" class="form-control my-1" placeholder="Vuelve a introducir tu nueva contraseña" autocomplete="off">
                                <button class="btn btn-outline-light my-1" type="submit">Cambiar contraseña</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- CAMBIAR IMAGEN DEL PERFIL -->
            <div class="accordion-item bg-color text-dark rounded">
                <h2 class="accordion-header" id="flush-perfil">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-colapsar-perfil" aria-expanded="false" aria-controls="flush-colapsar-perfil">
                        Cambiar imagen del perfil
                    </button>
                </h2>
                <div id="flush-colapsar-perfil" class="accordion-collapse collapse" aria-labelledby="flush-perfil" data-bs-parent="#acordeonPadre">
                    <form class="row" action="imagen-usuario.php" enctype="multipart/form-data">
                        <div class="d-grid col-11 mx-auto">
                            <div class="input-group my-3">
                                <input type="file" name="imagenPerfil" id="imagenPerfil" class="form-control">
                                <button type="submit" class="input-group-text btn btn-outline-light" for="imagenPerfil">Cambiar imagen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php componentePanel($_SESSION['nombre'], $_SESSION['rol']); ?>
    <?php modalCerrar(); ?>
    <?php componenteScripts(); ?>
</body>