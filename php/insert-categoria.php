<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre-categoria']);
        $url = $conexion -> insertCategoria($nombre);
        header('Location: '.$url);
        exit();
} ?>