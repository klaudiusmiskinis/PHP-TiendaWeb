<?php
    include("../database/conexion.php");
    include("../clases/usuario.php");
    $usuario;
    $url;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conexion -> getConexion(), $email);  
        $password = mysqli_real_escape_string($conexion -> getConexion(), $password);
        $url = $conexion -> authLogin($email, $password);
        header('Location: '.$url);
    } 
?>