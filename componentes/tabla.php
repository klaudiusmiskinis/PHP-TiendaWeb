<?php 
    function generarTablaAllUsers() {
    include('../database/conexion.php');
?> 

    <table class="table bg-light" id="usuarios">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Avatar</th>
                <th scope="col">Rol</th>
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
