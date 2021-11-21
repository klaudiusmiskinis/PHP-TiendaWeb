<?php function tablaUsuarios() { ?>
    <div class="table-responsive text-light px-2 py-1" id="tabla-responsive">
        <table class="table table-hover table-striped bg-light border border-dark display" id="usuarios">
            <thead>
                <tr>
                    <th class="border-bottom border-end border-dark">ID</th>
                    <th class="border-bottom border-end border-dark">Nombre</th>
                    <th class="border-bottom border-end border-dark">Email</th>
                    <th class="border-bottom border-end border-dark">Avatar</th>
                    <th class="border-bottom border-dark">Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php listar(); ?>
            </tbody>
        </table>
    </div>
<?php } 

function listar() {
    include('../database/conexion.php');
    $listado = $conexion -> adminUsuariosSelectAll();
    while ($row = mysqli_fetch_array($listado)) {
        filas($row);
    }
}

function filas($row) { ?>
<tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['nombre']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo 'img/base64';?></td>
      <td><?php echo $row['rol']; ?></td>
</tr>
<?php } ?> 
