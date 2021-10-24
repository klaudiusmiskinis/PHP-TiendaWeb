<?php 
    function componentePanel($nombre) {
    $nombre = strtok($nombre, ' '); 
?>

<div class="offcanvas offcanvas-start bg-dark text-light" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Panel de usuario</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <small><?php echo $nombre; ?></small>
        </div>
    </div>
</div>
<?php } ?>