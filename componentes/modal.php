<?php function modalCerrar() { ?>
    <div class="modal fade" id="modal-salir" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-color text-dark">
                <div class="modal-header border-bottom border-light text-center justify-content-center">
                    <h5 class="modal-title">Cerrar sesión</h5>
                </div>
                <div class="modal-body border-bottom border-light text-center">
                    <h6>¿Estás seguro de querer cerrar sesión?</h6>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                    <a type="button" class="btn btn-outline-danger" href="./logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php function modalConfirmarEliminarUsuario($usuario) { ?>
    <div class="modal fade" id="modal-eliminar-usuario" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-color text-dark">
                <div class="modal-header border-bottom border-light text-center justify-content-center">
                    <h5 class="modal-title">Confirmar eliminar usuario</h5>
                </div>
                <div class="modal-body border-bottom border-light text-center">
                    <h6>¿Estás seguro de querer eliminar a <?php echo $usuario['nombre'] ?>?</h6>
                </div>
                <form class="modal-footer border-0 justify-content-center" action="../php/delete-usuario.php" method="POST">
                    <input type="hidden" name="idDelete" value="<?php echo $usuario['id']; ?>">
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
<?php } ?>