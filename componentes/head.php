<?php function componenteHead($titulo) { ?>
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
        <link rel='stylesheet' href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel='stylesheet' href="../node_modules/datatables.net-dt/css/jquery.dataTables.min.css">
        <link rel='stylesheet' href='../assets/css/style-general.css?v=<?php echo time(); ?>'>
        <link rel='stylesheet' href='../assets/css/panel-lateral.css?v=<?php echo time(); ?>'>
        <link rel='stylesheet' href='../assets/css/scrollbar.css?v=<?php echo time(); ?>'>
        <link rel='stylesheet' href='../assets/css/accordion.css?v=<?php echo time(); ?>'>
        <link rel='stylesheet' href='../assets/css/clases.css?v=<?php echo time(); ?>'>
        <link rel='stylesheet' href='../assets/css/input.css?v=<?php echo time(); ?>'>
        <link rel='stylesheet' href='../assets/css/table.css?v=<?php echo time(); ?>'>
        <link rel='stylesheet' href='../assets/css/var.css?v=<?php echo time(); ?>'>
        <link rel='icon' href='../assets/img/icono.png?v=<?php echo time(); ?>'>
        <title><?php echo $titulo ?></title>
    </head>
<?php } ?>