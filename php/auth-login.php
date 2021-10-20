<?php
    include("../database/conexion.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $url = '../vistas/home.php';
        $email = $_POST['email'];
        $password = $_POST['password']; 

        //PARA PREVENIR DE INYECCIÓN SQL
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);

        $sql = "SELECT * FROM usuario WHERE  (email = '$email') AND (password = '$password')";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['rol'] = $row['rol'];
            }
        } else {
            $url = '../vistas/index.php?error=incorrecto';
        }
        $con->close();
        header('Location: '.$url);
    } 
?>