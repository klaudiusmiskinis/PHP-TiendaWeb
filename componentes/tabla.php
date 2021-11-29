<?php 

function tablaUsuarios() { ?>
<?php include('../database/conexion.php');?>
    <div class="table-responsive text-dark bg-light rounded p-2" id="tabla-responsive">
        <table class="table text-center bg-light rounded-top display" id="usuarios">
            <thead class="rounded-top">
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
        <table class="table table-hover table-striped bg-light display" id="usuarios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
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