<?php
    session_start();
    if (empty($_SESSION['nombre'])) {
        header("Location: index.php");
    }
    include('../database/conexion.php');
    include('../componentes/head.php');
    include('../componentes/background.php');
    include('../componentes/navbar.php');
    include('../componentes/scripts.php');
    componenteHead('Perfil');
    componenteBackground();
?>

<body>
    <?php componenteNavbar($_SESSION['nombre']); ?>
    <div class="container-fluid justify-content-between rounded bg-dark text-light">
        <div class="d-flex justify-content-between row">
            <div class="col">
                <div class="card bg-dark">
                    <!-- <img src="#" class="card-img-top"> -->
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col mx-4">
            <div class="card bg-dark">
                    <!-- <img src="#" class="card-img-top"> -->
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark">
                    <!-- <img src="#" class="card-img-top"> -->
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php componenteScripts(); ?>
</body>