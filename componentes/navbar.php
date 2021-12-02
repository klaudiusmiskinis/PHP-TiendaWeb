<?php 
    function componenteNavbar($nombre) {
    $nombre = strtok($nombre, ' '); 
?>

    <nav class="navbar border-bottom bg-color border-color sticky-top m-0" id="navegador">
        <div>
            <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                <i class="bi bi-three-dots-vertical icono"></i>
            </a>
        </div>
        <div class="d-flex">
            <a class="nav-link text-decoration" id="item-productos" href="./ofertas.php">
                <i class="bi bi-bag-fill icono"></i>
            </a>
            <a class="nav-link" id="item-home" href="./home.php">
                <i class="bi bi-house icono"></i>
            </a>
            <a class="nav-link" id="item-ofertas" href="./ofertas.php">
                <i class="bi bi-tags-fill icono"></i>
            </a>
        </div>
    </nav>
<?php } ?>