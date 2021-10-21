<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $bd = 'tienda';
    $con = mysqli_connect($servidor, $usuario, $password, $bd);

    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }
?>