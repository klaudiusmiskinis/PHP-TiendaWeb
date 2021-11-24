<?php
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = strtolower($email);
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre']);
        $email = $conexion -> prevenirInyeccion(strtolower($_POST['email']));
        $password = $conexion -> prevenirInyeccion(mysqli_real_escape_string($conexion -> getConexion(), password_hash($_POST['password'], PASSWORD_BCRYPT, [10])));
        $url = $conexion -> insertRegister($nombre, $email, $password);
        header('Location: '.$url);
        exit();
    } 
?>