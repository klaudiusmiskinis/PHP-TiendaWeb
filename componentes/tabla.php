<?php 
function tablaUsuarios($conexion) { ?>
    <div class="table-responsive border-bottom border-color p-1" id="tabla-responsive">
        <table class="table text-center display" id="usuarios">
            <thead class="border-transparent">
                <tr class="border-transparent">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Rol</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $listado = $conexion -> adminUsuariosSelectAll();
                    while ($row = mysqli_fetch_array($listado)) { 
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo 'img/base64';?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <td style="width: 3rem;">
                        <a class="text-color" href="./modificar-usuario.php?id=<?php echo $row['id']; ?>">
                            <i class="bi bi-wrench icono"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>

<?php function tablaCategoria($conexion) { ?>
    <div class="table-responsive text-dark" id="tabla-responsive">
        <table class="table table-hover table-striped bg-light display" id="categorias">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th class="text-center">Configuración</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $listado = $conexion -> adminCategoriasSelectAll();
                    while ($resultado = mysqli_fetch_array($listado)) { 
                ?>
                <tr>
                    <td><?php echo $resultado['id']; ?></td>
                    <td><?php echo $resultado['nombre']; ?></td>
                    <td class="text-center">
                        <a class="text-color text-center" href="./modificar-categoria.php?id=<?php echo $resultado['id']; ?>">
                            <i class="bi bi-wrench icono"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>

<?php function tablaProducto($conexion) { ?>
    <div class="table-responsive text-dark" id="tabla-responsive">
        <table class="table table-hover table-striped bg-light display" id="productos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Peso</th>
                    <th>Precio</th>
                    <th>Fecha Introducido</th>
                    <th>Marca</th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th>idSubcategoria</th>
                    <th class="text-center">Configuración</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $listado = $conexion -> adminProductosSelectAll();
                    while ($resultado = mysqli_fetch_array($listado)) { 
                ?>
                <tr>
                    <td><?php echo $resultado['id']; ?></td>
                    <td><?php echo $resultado['nombre']; ?></td>
                    <td><?php echo $resultado['tipo']; ?></td>
                    <td><?php echo $resultado['peso']; ?></td>
                    <td><?php echo $resultado['precio']; ?></td>
                    <td><?php echo $resultado['fechaIntroducido']; ?></td>
                    <td><?php echo $resultado['marca']; ?></td>
                    <td><img src="<?php echo $resultado['imagen']; ?>" width="50" class="img-fluid"></td>
                    <td><?php echo $resultado['idCategoria']; ?></td>
                    <td><?php echo $resultado['idSubcategoria']; ?></td>
                    <td class="text-center">
                        <a class="text-color text-center" href="./modificar-producto.php?id=<?php echo $resultado['id'];?>">
                            <i class="bi bi-wrench icono"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>

<?php function tablaSubcategoria($conexion) { ?>
    <div class="table-responsive text-dark" id="tabla-responsive">
        <table class="table table-hover table-striped bg-light display" id="categorias">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>ID Categoria</th>
                    <th class="text-center">Configuración</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $listado = $conexion -> adminSubcategoriaSelectAll();
                    while ($resultado = mysqli_fetch_array($listado)) { 
                ?>
                <tr>
                    <td><?php echo $resultado['id']; ?></td>
                    <td><?php echo $resultado['nombre']; ?></td>
                    <td><?php echo $resultado['idCategoria']; ?></td>
                    <td class="text-center">
                        <a class="text-color text-center" href="./modificar-subcategoria.php?id=<?php echo $resultado['id']; ?>">
                            <i class="bi bi-wrench icono"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>