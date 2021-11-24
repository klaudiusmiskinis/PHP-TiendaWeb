<?php 
    include('../componentes/iconos.php');
    function componenteNavbar($nombre) {
    $nombre = strtok($nombre, ' '); 
?>

    <nav class="navbar sticky-top" id="navegador">
        <div class="container-fluid">
            <div class="bg-color text-dark p-2 rounded">
                <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                    <?php generarIconPerfil(); ?>
                </a>
            </div>
            <div class="d-flex bg-color text-dark p-2 rounded">
                <a class="nav-link" id="item-productos" href="./ofertas.php"><?php generarIconProductos(); ?></a>
                <a class="nav-link" id="item-home" href="./home.php"><?php generarIconHome(); ?></a>
                <a class="nav-link" id="item-ofertas" href="./ofertas.php"><?php generarIconOfertas(); ?></a>
            </div>
            <div class="bg-color text-dark p-2 rounded">
                <a data-bs-toggle="modal" data-bs-target="#modal-salir">
                   <?php generarIconLogOut(); ?>
                </a>
            </div>
        </div>
    </nav>
<?php } ?>