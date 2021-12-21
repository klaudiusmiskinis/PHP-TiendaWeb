<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre-subcategoria']);
        $categoria = $conexion -> prevenirInyeccion($_POST['categoria']);
        $url = $conexion -> insertSubcategoria($nombre, $categoria);
        header('Location: '.$url);
        exit();
} ?>