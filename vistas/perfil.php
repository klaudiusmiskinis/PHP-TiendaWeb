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
                    <div class="col">
                        <form action="nombre-usuario.php" method="POST">
                            <div class="d-grid col-11 mx-auto">
                            <div class="input-group my-3">
                                    <input type="text" name="nombre-nuevo" id="nombre-nuevo" class="form-control my-1" placeholder="<?php echo $_SESSION['nombre']; ?>" autocomplete="off">
                                    <button class="btn btn-color my-1" type="submit">Cambiar nombre</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form class="row" action="password-usuario.php" method="POST">
                            <div class="d-grid col-11 mx-auto">
                                <input type="password" name="password-one" id="password-one" class="form-control my-1" placeholder="Introduce la nueva contraseña" autocomplete="off">
                                <div class="input-group">
                                    <input type="password" name="password-two" id="password-two" class="form-control my-1" placeholder="Vuelve a introducir tu nueva contraseña" autocomplete="off">
                                    <button class="btn btn-color my-1" type="submit">Cambiar contraseña</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form class="row" action="imagen-usuario.php" enctype="multipart/form-data">
                            <div class="d-grid col-11 mx-auto">
                                <div class="input-group my-3">
                                    <input type="file" name="imagenPerfil" id="imagenPerfil" class="form-control">
                                    <button type="submit" class="input-group-text btn btn-color" for="imagenPerfil">Cambiar imagen</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    
    <?php componentePanel($_SESSION['nombre'], $_SESSION['rol']); ?>
    <?php modalCerrar(); ?>
    <?php componenteScripts(); ?>
</body>