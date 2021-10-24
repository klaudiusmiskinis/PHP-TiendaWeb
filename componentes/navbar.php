<?php function componenteNavbar($nombre) { ?>
<?php $nombre = strtok($nombre, ' '); ?>

    <nav class="navbar border-bottom fixed-top" id="navegador">
        <div class="container-fluid">
            <div class="bg-dark text-light">
                <a class="bg-dark text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                    <img src="../assets/svg/person-circle.svg" width="25" class="svg my-2 mx-1">
                </a>
            </div>
            <div class="d-flex bg-dark text-light">
                <a class="nav-link" href="#">Productos</a>
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Ofertas</a>
            </div>
            <div class="bg-dark text-light">
                <a href="./logout.php">
                    <img src="../assets/svg/door-closed.svg" width="30" alt="door" class="svg my-2 mx-1 salir">
                </a>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start bg-dark text-light" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Panel de usuario</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <small><?php echo $nombre; ?></small>
            </div>
        </div>
    </div>

<?php } ?>