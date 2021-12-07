

<?php function countRolAdmins($conexion) { ?>
    <?php $stats = $conexion -> adminRolStats(); ?>
    <div class="card shadow-sm border-color p-3 mb-2">
        <div class="justify-content-between">
            <h5>Cantidad de administradores</h5>
        </div>
        <h3 class="heading">
            <i class="bi bi-award text-danger"></i>
            <?php echo $stats['admins']; ?>
        </h3>
    </div>
<?php } ?>

<?php function countUsers($conexion) { ?>
    <?php $stats = $conexion -> userStats(); ?>
    <div class="card shadow-sm border-color p-3 mb-2">
        <div class="justify-content-between">
            <h5>Cantidad de usuarios registrados</h5>
        </div>
        <h3 class="heading">
            <i class="bi bi-person-plus-fill text-warning"></i>
            <?php echo $stats['usuarios']; ?>
        </h3>
    </div>
<?php } ?>

<?php function countRolUsers($conexion) { ?>
    <?php $stats = $conexion -> userRolStats(); ?>
    <div class="card shadow-sm border-color p-3 mb-2">
        <div class="justify-content-between">
            <h5>Cantidad de usuarios registrados</h5>
        </div>
        <h3 class="heading">
        <i class="bi bi-person-fill text-success"></i>
            <?php echo $stats['usuarios']; ?>
        </h3>
    </div>
<?php } ?>

<?php function maxIdStats($conexion) { ?>
    <?php $stats = $conexion -> maxId(); ?>
    <div class="card shadow-sm border-color p-3 mb-2">
        <div class="justify-content-between">
            <h5>Número próximo id</h5>
        </div>
        <h3 class="heading">
        <i class="bi bi-star text-warning"></i>
            <?php echo ($stats['id'] + 1); ?>
        </h3>
    </div>
<?php } ?>

<?php function usuariosOff($conexion) { ?>
    <?php $stats = $conexion -> maxId(); ?>
    <div class="card shadow-sm border-color p-3 mb-2">
        <div class="justify-content-between">
            <h5>Usuarios deshabilitados</h5>
        </div>
        <h3 class="heading">
        <i class="bi bi-person-x-fill text-danger"></i>
            <?php echo 0 ?>
        </h3>
    </div>
<?php } ?>