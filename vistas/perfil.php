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
                        <img src="<?php echo $usuario -> getAvatar(); ?>" class="img-fluid" style="width: 5em;" alt="profile picture image">
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

            <div class="col-8">
                <div class="row">
                    <form action="nombre-usuario.php" method="POST">
                        <div class="d-grid col-11 mx-auto">
                        <div class="input-group my-3">
                                <input type="text" name="nombre-nuevo" id="nombre-nuevo" class="form-control my-1" placeholder="<?php echo $_SESSION['nombre']; ?>" autocomplete="off" required>
                                <button type="submit" class="btn btn-color my-1">Cambiar nombre</button>
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="row">
                    <form action="password-usuario.php" method="POST">
                        <div class="d-grid col-11 mx-auto">
                            <input type="password" name="password-one" id="password-one" class="form-control my-1" placeholder="Introduce la nueva contraseña" autocomplete="off" required>
                            <div class="input-group">
                                <input type="password" name="password-two" id="password-two" class="form-control my-1" placeholder="Vuelve a introducir tu nueva contraseña" autocomplete="off" required>
                                <button type="submit" id="form-password-user" class="btn btn-color my-1" >Cambiar contraseña</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form action="../php/update-perfil.php" method="POST" enctype="multipart/form-data">
                        <div class="d-grid col-11 mx-auto">
                            <div class="input-group my-3">
                                <input accept="image/png" type="file" name="imagenPerfil" id="imagenPerfil" class="form-control" required>
                                <button type="submit" name="form-img-user" class="input-group-text btn btn-color">Cambiar imagen</button>
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