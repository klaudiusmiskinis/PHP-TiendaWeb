<?php
    include("../database/conexion.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['idDelete'];
        $url = $conexion -> deleteSubcategoria($id);
        header('Location: '.$url);
        exit();
    } 
?>