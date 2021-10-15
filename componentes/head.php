<?php function componenteHead($titulo) { ?>
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='../node_modules/bootstrap/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='../assets/estilos/style-general.css'>
        <link rel='stylesheet' href='../assets/estilos/clases.css'>
        <link rel='stylesheet' href='../assets/estilos/fondo.css'>
        <link rel='stylesheet' href='../assets/estilos/var.css'>
        <link rel='icon' href='../assets/img/icono.png'>
        <title><?php echo $titulo ?></title>
    </head>
<?php } ?>