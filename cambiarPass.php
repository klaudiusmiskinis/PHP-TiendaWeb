<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $bd = 'tienda';
    $con = mysqli_connect($servidor, $usuario, $password, $bd);

    $sql = "SELECT * FROM usuario";
    $result = $con -> query($sql);
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $password = password_hash('1234', PASSWORD_BCRYPT);
            if (password_verify('1234', $row['password'])){
                echo 'Coincide';
            }
            // $sql = "UPDATE `usuario` SET `password` = '$password' WHERE id = $id";
            // if ($con->query($sql) === TRUE) {
            //     echo "Record updated successfully".'<br>';
            // }
        }
?>