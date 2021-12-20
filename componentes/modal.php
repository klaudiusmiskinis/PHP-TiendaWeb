<?php function modalCerrar() { ?>
    <div class="modal fade" id="modal-salir" tabindex="-1">
        <div class="modal-dialog text-center">
            <div class="modal-content border-0 border-color border-bottom border-3">
                <div class="modal-header bg-color text-light justify-content-center">
                    <h5 class="modal-title">Cerrar sesión</h5>
                </div>
                <div class="modal-body">
                    <h6>¿Estás seguro de querer cerrar sesión?</h6>
                    <div class="row gap-2">
                        <div class="col d-grid">
                            <button type="button" class="btn btn-color" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                        <div class="col d-grid">
                            <a type="button" class="btn btn-danger" href="./logout.php">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php function modalConfirmarEliminarUsuario($usuario) { ?>
    <div class="modal fade" id="modal-eliminar-usuario" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content border-0 border-color border-bottom border-3">
                <div class="modal-header bg-color text-light text-center justify-content-center">
                    <h5 class="modal-title">Confirmar eliminar usuario</h5>
                </div>
                <div class="modal-body text-center">
                    <h6>¿Estás seguro de querer eliminar a <?php echo $usuario['nombre'] ?>?</h6>
                    <div class="col mt-2">
                        <form class="border-0 justify-content-center" action="../php/delete-usuario.php" method="POST">
                            <input type="hidden" name="idDelete" value="<?php echo $usuario['id']; ?>">
                            <div class="row gap-2">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>
                                <div class="col d-grid">
                                    <button type="button" class="btn btn-color" data-bs-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php function modalConfirmarEliminarCategoria($categoria) { ?>
    <div class="modal fade" id="modal-eliminar-categoria" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content border-0 border-color border-bottom border-3">
                <div class="modal-header bg-color text-light text-center justify-content-center">
                    <h5 class="modal-title">Confirmar eliminar usuario</h5>
                </div>
                <div class="modal-body text-center">
                    <h6>¿Estás seguro de querer eliminar <?php echo $categoria['nombre'] ?>?</h6>
                    <div class="col mt-2">
                        <form class="border-0 justify-content-center" action="../php/delete-usuario.php" method="POST">
                            <input type="hidden" name="idDelete" value="<?php echo $categoria['id']; ?>">
                            <div class="row gap-2">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>
                                <div class="col d-grid">
                                    <button type="button" class="btn btn-color" data-bs-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>