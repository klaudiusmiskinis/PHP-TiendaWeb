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
                <a class="nav-link" href="#">Productos</a>
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Ofertas</a>
            </div>
            <div class="bg-dark text-light p-2 rounded">
                <a href="./logout.php">
                   <?php generarIconLogOut(); ?>
                </a>
            </div>
        </div>
    </nav>
<?php } ?>