<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/datatables.net-dt/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>

<table class="table table-hover table-striped bg-light border border-dark display" id="usuarios">
            <thead>
                <tr>
                    <th class="border-bottom border-end border-dark">ID</th>
                    <th class="border-bottom border-end border-dark">Nombre</th>
                    <th class="border-bottom border-end border-dark">Email</th>
                    <th class="border-bottom border-end border-dark">Avatar</th>
                    <th class="border-bottom border-dark">Rol</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
      <td>1</td>
      <td>Klaudius</td>
      <td>klaudius@email.com</td>
      <td>none</td>
      <td>admin</td>
    </tr>
    <tr>
      <td>2</td>
      <td>prueba</td>
      <td>prueba@email.com</td>
      <td>none</td>
      <td>admin</td>
    </tr>
    <tr>
      <td>3</td>
      <td>user</td>
      <td>user@email.com</td>
      <td>none</td>
      <td>user</td>
    </tr>
    <tr>
      <td>4</td>
      <td>admin</td>
      <td>admin@email.com</td>
      <td>none</td>
      <td>admin</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Klaudius Miskinis</td>
      <td>a@a</td>
      <td>none</td>
      <td>admin</td>
    </tr>
    <tr>
      <td>12</td>
      <td>dani maastodonteasas</td>
      <td>dani@email.com</td>
      <td>none</td>
      <td>user</td>
    </tr>
            </tbody>
        </table>

<script>

$(document).ready( function () {
    $('table.display').DataTable();
});

</script>
</body>
</html>