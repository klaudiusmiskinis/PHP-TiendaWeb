<?php function tablaUsuarios() {
    include('../database/conexion.php'); ?>
    <div class="table-responsive" id="tabla-responsive">
        <table class="table table-hover table-striped bg-light border border-dark" id="usuarios">
            <thead>
                <tr>
                    <th scope="col" class="border-bottom border-end border-dark">ID</th>
                    <th scope="col" class="border-bottom border-end border-dark">Nombre</th>
                    <th scope="col" class="border-bottom border-end border-dark">Email</th>
                    <th scope="col" class="border-bottom border-end border-dark">Avatar</th>
                    <th scope="col" class="border-bottom border-dark">Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php listar($con); ?>
            </tbody>
        </table>
    </div>
<?php } 
function listar($con) {
    $query = "SELECT id, nombre, email, avatar, rol FROM usuario ORDER BY id";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        filas($row);
    }
}

function filas($row) { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['nombre']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['avatar']; ?></td>
      <td><?php echo $row['rol']; ?></td>
    </tr>
<?php } ?> 
