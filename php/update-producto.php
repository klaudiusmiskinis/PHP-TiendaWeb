<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $conexion -> prevenirInyeccion($_POST['id']);
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre']);
        $tipo = $conexion -> prevenirInyeccion($_POST['tipo']);
        $peso = $conexion -> prevenirInyeccion($_POST['peso']);
        $precio = $conexion -> prevenirInyeccion($_POST['precio']);
        $fechaIntroducido = $conexion -> prevenirInyeccion($_POST['fechaIntroducido']);
        $marca = $conexion -> prevenirInyeccion($_POST['marca']);
        if ($_FILES['imagen']['size'] == 0) {
            $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
            $imagen = 'data:image/*;base64,'.base64_encode($imagen);
        } else {
            $imagen = $_POST['imagenAnterior'];
        }
        $idCategoria = $conexion -> prevenirInyeccion($_POST['idCategoria']);
        $idSubcategoria = $conexion -> prevenirInyeccion($_POST['idSubcategoria']);
        $url = $conexion -> updateProducto($id, $nombre, $tipo, $peso, $precio, $fechaIntroducido, $marca, $imagen, $idCategoria, $idSubcategoria);
        header('Location: '.$url);
        exit();
    } 
?>