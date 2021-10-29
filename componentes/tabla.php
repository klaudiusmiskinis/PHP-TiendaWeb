<?php 
    function generarTablaAllUsers() {
    include('../database/conexion.php');
?> 
    <table class="table table-hover table-dark table-striped border border-light" id="usuarios">
        <thead>
            <tr>
                <th scope="col" class="border-bottom border-end border-light">ID</th>
                <th scope="col" class="border-bottom border-end border-light">Nombre</th>
                <th scope="col" class="border-bottom border-end border-light">Email</th>
                <th scope="col" class="border-bottom border-end border-light">Avatar</th>
                <th scope="col" class="border-bottom border-light">Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php listar($con); ?>
        </tbody>
    </table>
<?php } ?>
<?php 
    function listar($con) {
        $query = "SELECT id, nombre, email, avatar, rol FROM usuario ORDER BY id";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            filas($row);
        }
    }
?>
<?php function filas($row) { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['nombre']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['avatar']; ?></td>
      <td><?php echo $row['rol']; ?></td>
    </tr>
<?php } ?> 
