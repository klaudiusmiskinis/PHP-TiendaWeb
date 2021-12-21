<?php 
    include("../database/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $conexion -> prevenirInyeccion($_POST['id']);
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre']);
        $idCategoria = $conexion -> prevenirInyeccion($_POST['idCategoria']);
        $url = $conexion -> updateSubcategoria($id, $nombre, $idCategoria);
        header('Location: '.$url);
        exit();
    } 
?>