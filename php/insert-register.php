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
        $nombre = mysqli_real_escape_string($con, $nombre);
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);
        
        $sql1 = "SELECT email FROM usuario WHERE email = '$email'";
        $result = $con->query($sql1);
        if ($result->num_rows == 0) {
                $sql2 = "INSERT INTO `usuario`(`nombre`, `email`, `password`, `avatar`) VALUES ('$nombre','$email','$password','none')";
            if ($con->query($sql2)) {
                'Usuario insertado';
                $url = '../vistas/index.php?registrado=correcto';
            }
        } else {
            $url = '../vistas/index.php?error=existe';
        }
        $con->close();
        header('Location: '.$url);
    } 
?>