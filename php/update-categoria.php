<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $conexion -> prevenirInyeccion($_POST['id']);
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre']);
        $url = $conexion -> updateCategoria($id, $nombre, $email, $password, $rol);
        header('Location: '.$url);
        exit();
    } 
?>