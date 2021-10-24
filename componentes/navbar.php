<?php 
include('../componentes/iconos.php');
function componenteNavbar($nombre) { ?>
<?php $nombre = strtok($nombre, ' '); ?>

    <nav class="navbar fixed-top" id="navegador">
        <div class="container-fluid">
            <div class="bg-dark text-light p-2">
                <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                    <?php generarIconPerfil(); ?>
                </a>
            </div>
            <div class="d-flex bg-dark text-light p-2">
                <a class="nav-link" href="#">Productos</a>
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Ofertas</a>
            </div>
            <div class="bg-dark text-light p-2">
                <a href="./logout.php">
                   <?php generarIconLogOut(); ?>
                </a>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start bg-dark text-light" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Panel de usuario</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <small><?php echo $nombre; ?></small>
            </div>
        </div>
    </div>

<?php } ?>