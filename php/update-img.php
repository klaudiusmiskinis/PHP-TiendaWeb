<?php 
    require_once 'database.php';
    session_start();
    $email = $_SESSION["email"];
    $avatar = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $consulta = "UPDATE usuario SET `avatar`='$avatar' WHERE email = '$email'";
    $result = $con->query($consulta);
    if ($result) {
        $consulta = "SELECT avatar from login WHERE DNI = '$dni'";
        $resultado = mysqli_query($con, $consulta);
        while ($row = mysqli_fetch_array($resultado)) {
            $_SESSION['avatar'] = $row['avatar'];
        }
    }
    header('Location: ./perfil.php');
?>