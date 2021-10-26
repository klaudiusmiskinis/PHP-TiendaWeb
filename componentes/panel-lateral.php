<?php 
    function componentePanel($nombre, $rol) {
    $nombre = strtok($nombre, ' '); 
?>

<div class="offcanvas offcanvas-start bg-dark text-light" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="panel-lateral">
    <div class="offcanvas-header text-center">
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
        <div class="d-grid gap-2">
            <h5 class="offcanvas-title" id="panel-lateral">Panel de usuario</h5>
            <small class="text-muted"><?php echo '('.$nombre.')'; ?></small>
        </div>
    </div>
    <div class="offcanvas-body">
            <?php if($rol == 'admin') { ?>
            <div class="container-fluid">

            <!-- ADMIN -->
            <div class="row text-center">
                <div class="col d-grid gap-1">
                    <h6 class="mb-2 text-center">Admin</h6>
                </div>
            </div>

            <!-- USUARIOS -->
            <div class="row text-center">
                <div class="col d-grid gap-1">
                    <button class="btn btn-outline-light shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-usuarios" aria-expanded="false" aria-controls="desplegar-usuarios">· Usuarios ·</button>
                </div>
                <div class="collapse" id="desplegar-usuarios">
                    <div class="container-fluid d-grid gap-1 mt-1">
                        <a class="btn btn-secondary shadow-sm">Ver usuarios</a>
                        <a class="btn btn-secondary shadow-sm">Crear usuario</a>
                        <a class="btn btn-secondary shadow-sm">Eliminar usuarios</a>
                        <hr>
                    </div>
                </div>
            </div>

            <!-- PRODUCTOS -->
            <div class="row text-center mt-1">
                <div class="col d-grid gap-1">
                    <button class="btn btn-outline-light shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-productos" aria-expanded="false" aria-controls="desplegar-productos">· Productos ·</button>
                </div>
                <div class="collapse" id="desplegar-productos">
                    <div class="container-fluid d-grid gap-1 mt-1">
                        <a class="btn btn-secondary shadow-sm">Ver productos</a>
                        <a class="btn btn-secondary shadow-sm">Crear productos</a>
                        <a class="btn btn-secondary shadow-sm">Eliminar productos</a>
                        <hr>
                    </div>
                </div>
            </div>

            <!-- CATEGORIAS -->
            <div class="row text-center mt-1">
                <div class="col d-grid gap-1">
                    <button class="btn btn-outline-light shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-categorias" aria-expanded="false" aria-controls="desplegar-categorias">· Categorias ·</button>
                </div>
                <div class="collapse" id="desplegar-categorias">
                    <div class="container-fluid d-grid gap-1 mt-1">
                        <a class="btn btn-secondary shadow-sm">Ver categorias</a>
                        <a class="btn btn-secondary shadow-sm">Crear categorias</a>
                        <a class="btn btn-secondary shadow-sm">Eliminar categorias</a>
                        <hr>
                    </div>
                </div>
            </div>

            <!-- SUBCATEGORIAS -->
            <div class="row text-center mt-1">
                <div class="col d-grid gap-1">
                    <button class="btn btn-outline-light shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-subcategorias" aria-expanded="false" aria-controls="desplegar-categorias">· Subcategorias ·</button>
                </div>
                <div class="collapse" id="desplegar-subcategorias">
                    <div class="container-fluid d-grid gap-1 mt-1">
                        <a class="btn btn-secondary shadow-sm shadow-sm">Ver subcategorias</a>
                        <a class="btn btn-secondary shadow-sm">Crear subcategorias</a>
                        <a class="btn btn-secondary shadow-sm">Eliminar subcategorias</a>
                        <hr>
                    </div>
                </div>
            </div>

            <!-- ADMIN -->
            </div>
            <?php }; ?>

            <?php if($rol == 'user' || $rol == 'admin') { ?>
            <div class="container-fluid">

            <!-- USUARIO -->
            <div class="row text-center mt-3">
                <div class="col d-grid gap-1">
                    <h6 class="mb-2 text-center">Usuario</h6>
                </div>
            </div>

            <!-- USUARIOS -->
            <div class="row text-center">
                <div class="col d-grid gap-1">
                    <button class="btn btn-outline-light shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-perfil" aria-expanded="false" aria-controls="desplegar-perfil">Perfil</button>
                </div>
                <div class="collapse" id="desplegar-perfil">
                    <div class="container-fluid d-grid gap-1 mt-1">
                        <a class="btn btn-secondary shadow-sm">Ver perfil</a>
                        <hr>
                    </div>
                </div>
            </div>

            <!-- USUARIO -->
            </div>
            <?php }; ?>
    </div>
</div>
<?php } ?>