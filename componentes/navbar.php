<?php function componenteNavbar($nombre) { ?>
<?php $nombre = strtok($nombre, ' '); ?>
    <div class="d-flex justify-content-between mb-2" id="navegador">
        <nav class="navbar m-2 rounded bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center">
                    <a href="./perfil.php">
                        <img src="../assets/svg/person-circle.svg" width="25" class="svg my-2 mx-1">
                        </a>
                    </div>
                    <div class="col">
                        <a class="nav-link" id="nav-nombre"><?php echo $nombre; ?></a>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar m-2 rounded bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <a class="nav-link" href="#">Productos</a>
                    </div>
                    <div class="col">
                        <a class="nav-link" href="#">Home</a>
                    </div>
                    <div class="col">
                        <a class="nav-link" href="#">Ofertas</a>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar m-2 rounded bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center">
                    <a href="./logout.php">
                        <img src="../assets/svg/door-closed.svg" width="30" alt="door" class="svg my-2 mx-1 salir">
                    </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<?php } ?>