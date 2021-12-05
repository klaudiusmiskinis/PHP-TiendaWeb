<?php
    function componentePanel($nombre, $rol) {
    $nombre = strtok($nombre, ' '); 
?>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="panel-lateral">
    <div class="offcanvas-header text-light bg-color">
        <h5 class="offcanvas-title" id="panel-lateral">Panel de usuario</h5>
        <small class="text-muted"><?php echo '('.$nombre.')'; ?></small>
    </div>
    
    <div class="offcanvas-body">
            <?php if($rol == 'admin') { ?>
            <div class="container-fluid">

                <!-- ADMIN -->
                <div class="row text-center">
                    <div class="col d-grid gap-1">
                        <h6 class="text-center">Admin</h6>
                    </div>
                </div>

                <!-- ADMIN | USUARIOS -->
                <div class="row text-center">
                    <div class="col d-grid gap-1">
                        <button class="btn btn-color shadow" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-usuarios" aria-expanded="false" aria-controls="desplegar-usuarios"><i class="bi bi-people-fill mx-2"></i>Usuarios</button>
                    </div>
                    <div class="collapse" id="desplegar-usuarios">
                        <div class="container-fluid d-grid gap-1 mt-1">
                            <a class="btn btn-color bg-opacity-50 shadow" href="./usuario-admin.php">Gestionar usuarios</a>
                            <hr>
                        </div>
                    </div>
                </div>

                <!-- ADMIN | PRODUCTOS -->
                <div class="row text-center mt-1">
                    <div class="col d-grid gap-1">
                        <button class="btn btn-color shadow" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-productos" aria-expanded="false" aria-controls="desplegar-productos"><i class="bi bi-box mx-2"></i>Productos</button>
                    </div>
                    <div class="collapse" id="desplegar-productos">
                        <div class="container-fluid d-grid gap-1 mt-1">
                            <a class="btn btn-color shadow">Gestionar productos</a>
                            <hr>
                        </div>
                    </div>
                </div>

                <!-- ADMIN |CATEGORIAS -->
                <div class="row text-center mt-1">
                    <div class="col d-grid gap-1">
                        <button class="btn btn-color shadow" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-categorias" aria-expanded="false" aria-controls="desplegar-categorias"><i class="bi bi-tag-fill mx-2"></i>Categorias</button>
                    </div>
                    <div class="collapse" id="desplegar-categorias">
                        <div class="container-fluid d-grid gap-1 mt-1">
                            <a class="btn btn-color shadow" href="./categoria-admin.php">Gestionar categorias</a>
                            <hr>
                        </div>
                    </div>
                </div>

                <!-- ADMIN | SUBCATEGORIAS -->
                <div class="row text-center mt-1">
                    <div class="col d-grid gap-1">
                        <button class="btn btn-color shadow" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-subcategorias" aria-expanded="false" aria-controls="desplegar-categorias"><i class="bi bi-tags-fill mx-2"></i>Subcategorias</button>
                    </div>
                    <div class="collapse" id="desplegar-subcategorias">
                        <div class="container-fluid d-grid gap-1 mt-1">
                            <a class="btn btn-color shadow">Gestionar subcategorias</a>
                            <hr>
                        </div>
                    </div>
                </div>

            </div>
            <?php }; ?>

            <?php if($rol == 'user' || $rol == 'admin') { ?>
            <div class="container-fluid">

                <!--  USER | USUARIO -->
                <div class="row text-center mt-3">
                    <div class="col d-grid gap-1">
                        <h6 class="mb-2 text-center">Usuario</h6>
                    </div>
                </div>

                <!-- USUARIO -->
                <div class="row text-center">
                    <div class="col d-grid gap-1">
                        <button class="btn btn-color shadow" type="button" data-bs-toggle="collapse" data-bs-target="#desplegar-perfil" aria-expanded="false" aria-controls="desplegar-perfil"><i class="bi bi-person-bounding-box mx-2"></i>Perfil</button>
                    </div>
                    <div class="collapse show" id="desplegar-perfil">
                        <div class="container-fluid d-grid gap-1 mt-1">
                            <a href="./perfil.php" class="btn btn-color shadow">Editar perfil</a>
                            <a class="btn btn-danger shadow" data-bs-toggle="modal" data-bs-target="#modal-salir">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>
<?php }; ?>