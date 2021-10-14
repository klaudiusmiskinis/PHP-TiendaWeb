<?php
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $url = '../vistas/index.php';
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password']; 

        //PARA PREVENIR DE INYECCIÓN SQL
        $nombre = stripcslashes($nombre);
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $nombre = mysqli_real_escape_string($con, $nombre);
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);

        
        $sql2 = "SELECT email, nombre FROM usuario WHERE (email = '$email') AND (nombre = '$nombre')";
        $result = $con->query($sql2);
        if ($result->num_rows == 0) {
                $sql = "INSERT INTO `usuario`(`nombre`, `email`, `password`, `avatar`) VALUES ('$nombre','$email','$password','none')";
            if ($con->query($sql)) {
                echo "New record created successfully";
            }
        } else {
            $url = '../vistas/index.php?error=existe';
        }
        $con->close();
        header('Location: '.$url);
    } 
?>