<?php
    session_start();
    if (empty($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }
    include('../clases/usuario.php');
    include('../database/conexion.php');
    include('../componentes/scripts.php');
    include('../componentes/navbar.php');
    include('../componentes/head.php');
    include('../componentes/panel-lateral.php');
    include('../componentes/modal.php');
    $usuario = new Usuario($_SESSION['id'], $_SESSION['nombre'], $_SESSION['email'], $_SESSION['password'], $_SESSION['avatar'], $_SESSION['rol']);
    componenteHead('Home');
?>
<body>
<?php  ?>
<?php componenteNavbar($usuario -> getNombre()); ?>
<?php $prodUno = $conexion -> getProductosHome(1); ?>
<div class="container-fluid mt-2">
    <div class="row text-color gap-2">
        <h5 class="p-0 m-0">Productos</h5>
        <label>Recomendados por nosotros</label>
        <div class="col">
            <div class="card col border-color">
            <div class="text-center m-2">
                <img src="<?php echo $prodUno['imagen']; ?>" class="img-fluid" style="width: 190px; height: 150px;" alt="<?php echo $prodUno['imagen']; ?>">
            </div>
                <div class="card-body">
                    <h5><?php echo $prodUno['nombre']; ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-0 border-color text-color"><?php echo $prodUno['tipo']; ?> | <?php echo $prodUno['marca']; ?></li>
                        <li class="list-group-item p-0 border-color text-color">Precio: <?php echo $prodUno['precio']; ?>€</li>
                        <li class="list-group-item p-0 border-color text-color">Peso: <?php echo $prodUno['peso']; ?> KG</li>
                        <li class="list-group-item p-0 border-color text-color"><?php echo $conexion -> selectCategoriaById($prodUno['idCategoria'])['nombre']; ?></li>
                    </ul>
                    <form action="../php/carrito.php" method="POST">
                        <div class="d-grid gap-2">
                            <input type="hidden" name="id" value="<?php echo $prodUno['id'] ?>">
                            <button class="btn btn-color disabled">Comprar</button>
                            <button class="btn btn-color" name="add" type="submit">Añadir al carrito</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php 
            $prodDos = $conexion -> getProductosHome(2);
        ?>
        <div class="col">
            <div class="card col border-color">
            <div class="text-center m-2">
                <img src="<?php echo $prodDos['imagen']; ?>" class="img-fluid" style="width: 190px; height: 150px;" alt="<?php echo $prodDos['imagen']; ?>">
            </div>
                <div class="card-body">
                <h5><?php echo $prodDos['nombre']; ?></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-0 border-color text-color"><?php echo $prodDos['tipo']; ?> | <?php echo $prodDos['marca']; ?></li>
                    <li class="list-group-item p-0 border-color text-color">Precio: <?php echo $prodDos['precio']; ?>€</li>
                    <li class="list-group-item p-0 border-color text-color">Peso: <?php echo $prodDos['peso']; ?> KG</li>
                    <li class="list-group-item p-0 border-color text-color"><?php echo $conexion -> selectCategoriaById($prodDos['idCategoria'])['nombre']; ?></li>
                </ul>
                    <form action="../php/carrito.php" method="POST">
                        <div class="d-grid gap-2">
                            <input type="hidden" name="id" value="<?php echo $prodDos['id'] ?>">
                            <button class="btn btn-color disabled">Comprar</button>
                            <button class="btn btn-color" name="add" type="submit">Añadir al carrito</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php $prodTres = $conexion -> getProductosHome(3); ?>
        <div class="col">
            <div class="card col border-color">
            <div class="text-center m-2">
                <img src="<?php echo $prodTres['imagen']; ?>" class="img-fluid" style="width: 190px; height: 150px;" alt="<?php echo $prodTres['imagen']; ?>">
            </div>
                <div class="card-body">
                <h5><?php echo $prodTres['nombre']; ?></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-0 border-color text-color"><?php echo $prodTres['tipo']; ?> | <?php echo $prodTres['marca']; ?></li>
                    <li class="list-group-item p-0 border-color text-color">Precio: <?php echo $prodTres['precio']; ?>€</li>
                    <li class="list-group-item p-0 border-color text-color">Peso: <?php echo $prodTres['peso']; ?> KG</li>
                    <li class="list-group-item p-0 border-color text-color"><?php echo $conexion -> selectCategoriaById($prodTres['idCategoria'])['nombre']; ?></li>
                </ul>
                <form action="../php/carrito.php" method="POST">
                        <div class="d-grid gap-2">
                            <input type="hidden" name="id" value="<?php echo $prodTres['id'] ?>">
                            <button class="btn btn-color disabled">Comprar</button>
                            <button class="btn btn-color" name="add" type="submit">Añadir al carrito</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
<?php modalCerrar(); ?>
<?php componenteScripts(); ?>
</body>