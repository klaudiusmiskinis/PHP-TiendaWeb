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
        <div class="row">
            <div class="col-4">
                <div class="d-grid text-center">
                    <div class="card mt-3 text-center">
                        <div class="text-center m-1">
                            <img src="<?php echo $usuario -> getAvatar(); ?>" class="img-fluid rounded-circle" style="width: 65px;" alt="profile picture image">
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo $usuario -> getNombre(); ?></li>
                                <li class="list-group-item"><?php echo $usuario -> getRol(); ?></li>
                                <li class="list-group-item"><?php echo $usuario -> getEmail(); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8 mt-3">
                <div class="row">
                    <form action="nombre-usuario.php" method="POST">
                        <div class="d-grid col-11 mx-auto">
                        <label class="text-color">Cambio de contraseña</label>
                        <div class="input-group mb-3">
                                <input type="text" name="nombre-nuevo" id="nombre-nuevo" class="form-control my-1" placeholder="<?php echo $_SESSION['nombre']; ?>" autocomplete="off" required>
                                <button type="submit" name="cambiarNombre" class="btn btn-color my-1">Cambiar nombre</button>
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="row">
                    <form action="../php/update-perfil.php" method="POST">
                        <div class="d-grid col-11 mx-auto">
                            <label class="text-color">Cambio de contraseña</label>
                            <input type="hidden" name="id" value="<?php echo $usuario -> getId(); ?>">
                            <input type="password" name="password-one" id="password-one" minlength="4" maxlength="70" class="form-control my-1" placeholder="Introduce la nueva contraseña" autocomplete="off" required>
                            <div class="input-group">
                                <input type="password" name="password-two" id="password-two" minlength="4" maxlength="70" class="form-control my-1" placeholder="Vuelve a introducir tu nueva contraseña" autocomplete="off" required>
                                <button type="submit" name="form-password-user" class="btn btn-color my-1">Cambiar contraseña</button>
                            </div>
                            <label class="text-color mb-3"><i class="bi bi-info-circle-fill me-2"></i>Las contraseñas deben coincidir y tener mínimo 4 caracteres</label>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form action="../php/update-perfil.php" method="POST" enctype="multipart/form-data">
                        <div class="d-grid col-11 mx-auto">
                            <label class="text-color">Cambio de imagen de perfil</label>
                            <div class="row">
                                <div class="col">
                                    <input accept="image/png, image/jpeg" type="file" name="imagenPerfil" id="imagenPerfil" class="hide" required>
                                    <label for="imagenPerfil" class="btn btn-color d-grid rounded-0" required>Seleccionar archivo</label>
                                </div>
                                <div class="col-auto d-grid mb-1">
                                    <button type="submit" name="form-img-user" class="input-group-text btn btn-color rounded-0">Cambiar imagen</button>
                                </div>
                                <label class="text-color mb-3"><i class="bi bi-info-circle-fill me-2"></i>Solo se aceptan JPG, JPEG y PNG</label>
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