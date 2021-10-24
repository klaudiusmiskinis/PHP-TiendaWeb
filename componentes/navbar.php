<?php function componenteNavbar($nombre) { ?>
<?php $nombre = strtok($nombre, ' '); ?>

    <nav class="navbar border-bottom bg-dark text-light fixed-top">
        <div class="container-fluid">
            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                <img src="../assets/svg/person-circle.svg" width="25" class="svg my-2 mx-1">
            </a>
            <div class="d-flex">
                <a class="nav-link" href="#">Productos</a>
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Ofertas</a>
            </div>
            <div>
                <a href="./logout.php">
                    <img src="../assets/svg/door-closed.svg" width="30" alt="door" class="svg my-2 mx-1 salir">
                </a>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="panel-lateral" aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="panel-lateral">Offcanvas with backdrop</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>.....</p>
        </div>
    </div>

<?php } ?>