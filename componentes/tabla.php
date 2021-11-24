<?php 

function tablaUsuarios() { ?>
<?php include('../database/conexion.php');?>
    <div class="table-responsive text-dark px-2 py-1" id="tabla-responsive">
        <table class="table table-hover table-striped bg-light border border-dark display" id="usuarios">
            <thead>
                <tr>
                    <th class="border-bottom border-end border-dark">ID</th>
                    <th class="border-bottom border-end border-dark">Nombre</th>
                    <th class="border-bottom border-end border-dark">Email</th>
                    <th class="border-bottom border-end border-dark">Avatar</th>
                    <th class="border-bottom border-end border-dark">Rol</th>
                    <th class="border-bottom border-end border-dark text-center">Configurar</th>
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
                    <td class="text-center">
                        <a class="text-dark" href="./modificar-usuario.php?id=<?php echo $row['id']; ?>">
                            <?php generarIconEngranaje(); ?>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>

<?php function tablaCategoria() { ?>
<?php include('../database/conexion.php'); ?>
    <div class="table-responsive text-dark px-2 py-1" id="tabla-responsive">
        <table class="table table-hover table-striped bg-light border border-dark display" id="usuarios">
            <thead>
                <tr>
                    <th class="border-bottom border-end border-dark">ID</th>
                    <th class="border-bottom border-end border-dark">Nombre</th>
                    <th class="border-bottom border-end border-dark text-center">Configuración</th>
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
                        <a class="text-dark" href="./modificar-categoria.php?id=<?php echo $resultado['id']; ?>">
                            <?php generarIconEngranaje(); ?>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>