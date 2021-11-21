<?php
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $url = '../vistas/index.php';
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $email = strtolower($email);

        //PARA PREVENIR INYECCIÓN SQL
        $nombre = stripcslashes($nombre);
        $email = stripcslashes($email);
        $password = stripcslashes($password);  
        $nombre = mysqli_real_escape_string($conexion -> getConexion(), $nombre);
        $email = mysqli_real_escape_string($conexion -> getConexion(), $email);  
        $password = mysqli_real_escape_string($conexion -> getConexion(), password_hash($password, PASSWORD_BCRYPT, [10]));
        $url = $conexion -> insertRegister($nombre, $email, $password);
        header('Location: '.$url);
    } 
?>