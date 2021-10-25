<?php function componenteHead($titulo) { ?>
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel='stylesheet' href='../assets/css/style-general.css'>
        <link rel='stylesheet' href='../assets/css/panel-lateral.css'>
        <link rel='stylesheet' href='../assets/css/scrollbar.css'>
        <link rel='stylesheet' href='../assets/css/clases.css'>
        <link rel='stylesheet' href='../assets/css/fondo.css'>
        <link rel='stylesheet' href='../assets/css/var.css'>
        <link rel='icon' href='../assets/img/icono.png'>
        <title><?php echo $titulo ?></title>
    </head>
<?php } ?>