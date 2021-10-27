<?php function popupCerrar() { ?>
    <div class="modal fade" id="popup-salir" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title">Cerrar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center">
                    <h6>¿Estás seguro de querer cerrar sesión?</h6>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a type="button" class="btn btn-outline-danger" href="./logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>