<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre']);
        $tipo = $conexion -> prevenirInyeccion($_POST['tipo']);
        $peso = $conexion -> prevenirInyeccion($_POST['peso']);
        $precio = $conexion -> prevenirInyeccion($_POST['precio']);
        $fechaIntroducido = $conexion -> prevenirInyeccion($_POST['fechaIntroducido']);
        $marca = $conexion -> prevenirInyeccion($_POST['marca']);
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
        $idCategoria = $conexion -> prevenirInyeccion($_POST['idCategoria']);
        $idSubcategoria = $conexion -> prevenirInyeccion($_POST['idSubcategoria']);
        $imagen = 'data:image/;base64,'.base64_encode($imagen);
        $url = $conexion -> insertProducto($nombre, $tipo, $peso, $precio, $fechaIntroducido, $marca, $imagen, $idCategoria, $idSubcategoria);
        header('Location: '.$url);
        exit();
} ?>