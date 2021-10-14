<?php
    include("../database/conexion.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password']; 

        //PARA PREVENIR DE INYECCIÓN SQL
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);

        $sql = "SELECT * FROM usuario WHERE (email = $email) AND (password = $password)";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        while($row = mysqli_fetch_array($result)){
            $id = $row['id'];
            $nombre = $row['name'];
            $email = $row['email'];
            $rol = $row['rol'];
        }     

        $_SESSION['id'] = $id
        $_SESSION['NOMBRE']
    }
?>