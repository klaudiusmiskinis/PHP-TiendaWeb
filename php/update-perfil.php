<!DOCTYPE html>
<?php 
    require_once '../database/conexion.php';
    session_start();
    if (isset($_POST['form-img-user'])) {
        $email = $_SESSION["email"];
        $avatar = addslashes(file_get_contents($_FILES['imagenPerfil']['tmp_name']));
        $path = $_FILES['imagenPerfil']['tmp_name'];
        $type = pathinfo($path);
        $data = file_get_contents($path);
        $base64 = 'data:image/*;base64,' . base64_encode($data);
        $url = $conexion -> updateImagePerfil($email, $base64);
        $_SESSION['avatar'] = $base64;
        header('Location:'.$url);
    } elseif (isset($_POST['cambiarNombre'])){
        $id = $_POST['id'];
        $nombre = $conexion -> prevenirInyeccion($_POST['nombre-nuevo']);
        $_SESSION['nombre'] = $_POST['nombre-nuevo'];
        $url = $conexion -> updateNombre($nombre, $id);
        header('Location:'.$url);
    } elseif (isset($_POST['form-password-user'])) {
        $id = $_POST['id'];
        $password =  $_POST['password-one'];
        $passwordRepetir = $_POST['password-two'];
        if ($password === $passwordRepetir) {
            $password = $conexion -> prevenirInyeccion(mysqli_real_escape_string($conexion -> getConexion(), password_hash($_POST['password-one'], PASSWORD_BCRYPT, [10])));
            $url = $conexion -> updatePassword($password, $id);
            header('Location:'.$url);
        }
    } 
        
?>