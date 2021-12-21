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
    componenteHead('Productos');
?>
<body>
<?php  ?>
<?php componenteNavbar($usuario -> getNombre()); ?>

<div class="container-fluid mt-2"> 
    <div class="row text-color gap-2">
        <h5 class="p-0 m-0">Productos</h5>
    </div>
</div>

<div class="container-fluid">
<?php 
    $productos = $conexion -> adminProductosSelectAll();
    foreach ($productos as $producto) { 
?>
    <div class="row my-1">
        <div class="card col border-color">
            <div class="text-center m-2">
                <img src="<?php echo $producto['imagen']; ?>" class="img-fluid" style="width: 190px; height: 150px;" alt="<?php echo $producto['imagen']; ?>">
            </div>
                <div class="card-body">
                    <h5><?php echo $producto['nombre']; ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-0 border-color text-color"><?php echo $producto['tipo']; ?> | <?php echo $producto['marca']; ?></li>
                        <li class="list-group-item p-0 border-color text-color">Precio: <?php echo $producto['precio']; ?>€</li>
                        <li class="list-group-item p-0 border-color text-color">Peso: <?php echo $producto['peso']; ?> KG</li>
                        <li class="list-group-item p-0 border-color text-color"><?php echo $conexion -> selectCategoriaById($producto['idCategoria'])['nombre']; ?></li>
                    </ul>
                    <form action="../php/carrito.php" method="POST">
                        <div class="d-grid gap-2">
                            <input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
                            <button class="btn btn-color disabled">Comprar</button>
                            <button class="btn btn-color" name="add" type="submit">Añadir al carrito</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php componentePanel($usuario -> getNombre(), $usuario -> getRol()); ?>
<?php modalCerrar(); ?>
<?php componenteScripts(); ?>
</body>