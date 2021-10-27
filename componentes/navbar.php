<?php 
    include('../componentes/iconos.php');
    function componenteNavbar($nombre) {
    $nombre = strtok($nombre, ' '); 
?>

    <nav class="navbar sticky-top" id="navegador">
        <div class="container-fluid">
            <div class="bg-dark text-light p-2 rounded">
                <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                    <?php generarIconPerfil(); ?>
                </a>
            </div>
            <div class="d-flex bg-dark text-light p-2 rounded">
                <a class="nav-link" href="./ofertas.php">Productos</a>
                <a class="nav-link" href="./home.php">Home</a>
                <a class="nav-link" href="./ofertas.php">Ofertas</a>
            </div>
            <div class="bg-dark text-light p-2 rounded">
                <a data-bs-toggle="modal" data-bs-target="#popup-salir">
                   <?php generarIconLogOut(); ?>
                </a>
            </div>
        </div>
    </nav>
<?php } ?>