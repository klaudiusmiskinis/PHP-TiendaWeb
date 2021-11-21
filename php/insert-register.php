<?php
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $url = '../vistas/index.php';
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $email = strtolower($email);

        $nombre = $conexion -> prevenirInyeccion($nombre);
        $email = $conexion -> prevenirInyeccion($email);
        $password = $conexion -> prevenirInyeccion(mysqli_real_escape_string($conexion -> getConexion(), password_hash($password, PASSWORD_BCRYPT, [10])));
        $url = $conexion -> insertRegister($nombre, $email, $password);
        header('Location: '.$url);
    } 
?>