<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $conexion -> prevenirInyeccion($_POST['id']);
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre']);
        $email = $conexion -> prevenirInyeccion(strtolower($_POST['email']));
        $password = $_POST['password'];
        if (strlen($password) < 60 || strlen($password) > 60) {
            $password = $conexion -> prevenirInyeccion(mysqli_real_escape_string($conexion -> getConexion(), password_hash($_POST['password'], PASSWORD_BCRYPT, [10])));
        }
        $rol = $conexion -> prevenirInyeccion($_POST['rol']);
        $url = $conexion -> updateUsuario($id, $nombre, $email, $password, $rol);
        header('Location: '.$url);
    } 
?>