<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre']);
        $email = $conexion -> prevenirInyeccion(strtolower($_POST['email']));
        $password = $conexion -> prevenirInyeccion(mysqli_real_escape_string($conexion -> getConexion(), password_hash($_POST['password'], PASSWORD_BCRYPT, [10])));
        $rol = $conexion -> prevenirInyeccion($_POST['rol']);
        $avatar = file_get_contents($_FILES['avatar']['tmp_name']);
        $avatar = 'data:image/;base64,'.base64_encode($avatar);
        $url = $conexion -> insertUsuario($nombre, $email, $password, $rol, $avatar);
        header('Location: '.$url);
        exit();
} ?>