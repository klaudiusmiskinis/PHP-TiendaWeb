
<?php function countUsers($conexion) { ?>
    <?php $stats = $conexion -> userStats(); ?>
    <div class="card p-3 mb-2">
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                <div class="ms-2 c-details">
                    <h6 class="mb-0">Cantidad de usuarios</h6>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h3 class="heading"><?php echo $stats['usuarios']; ?></h3>
            <div class="mt-5">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>