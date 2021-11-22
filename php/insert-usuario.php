<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $rol = $_POST['rol'];
        $avatar = $_POST['avatar'];
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conexion -> getConexion(), $email);  
        $password = mysqli_real_escape_string($conexion -> getConexion(), $password);
        $url = $conexion -> authLogin($email, $password);
        header('Location: '.$url);
    } 
?>