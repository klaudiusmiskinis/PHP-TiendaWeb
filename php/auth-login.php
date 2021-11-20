<?php
    include("../database/conexion.php");
    include("../clases/usuario.php");
    session_start();
    $usuario;
    $url;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conexion -> getConexion(), $email);  
        $password = mysqli_real_escape_string($conexion -> getConexion(), $password);
        

        $resultado = $conexion -> authLogin($email);
        $row = $resultado -> fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            $url = '../vistas/home.php';
            $usuario = new Usuario($row['id'], $row['nombre'], $row['email'], $row['password'], $row['avatar'], $row['rol']);
            $_SESSION['usuario'] = $usuario;
        } else {
            $url = '../vistas/index.php?error=incorrecto';          
        }
        header('Location: '.$url);
    } 
?>