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