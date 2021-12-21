<!DOCTYPE html>
<?php 
    require_once '../database/conexion.php';
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_SESSION["email"];
        $avatar = addslashes(file_get_contents($_FILES['imagenPerfil']['tmp_name']));
        $conexion -> updateImagePerfil($email, $avatar);
        $path = $_FILES['imagenPerfil']['tmp_name'];
        $type = pathinfo($path);
        $data = file_get_contents($path);
        $base64 = 'data:image/png;base64,' . base64_encode($data);
        // $_SESSION['avatar'] = $base64;
        header('Location: ../vistas/perfil.php');
    }    
?>