<?php function popupCerrar() { ?>
    <div class="modal fade" id="popup-salir" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-light">
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

<?php function formModalCrearUsuario() { ?>
    <div class="modal fade" id="formModalCrearUsuario" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header border-bottom border-light text-center justify-content-center">
                    <h5 class="modal-title text-light">Crear un nuevo usuario</h5>
                </div>
                <div class="modal-body border-bottom border-light text-center">
                    <form action="POST" id="crearUsuarioForm">
                        <div class="form-floating mb-3">
                            <input type="text" name="nombre" class="form-control text-dark" autocomplete="off" required>
                            <label for="nombre">Nombre del nuevo usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control text-dark" autocomplete="off" required>
                            <label for="email">Email del nuevo usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control text-dark" autocomplete="off" required>
                            <label for="password">Password del nuevo usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="file" name="avatar" class="form-control text-dark" accept="image/png, image/jpeg, image/jpg" autocomplete="off">
                            <label for="rol">Avatar del nuevo usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="rol" required>
                                <option selected>User</option>
                                <option value="admin">Admin</option>
                            </select>
                            <label for="rol">Rol del nuevo usuario</label>
                        </div>
                    </form>
                </div>
                <div class="d-grid m-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php function formModalTodosUsuarios() { ?>
    <div class="modal fade" id="formModalTodosUsuarios" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-bottom border-light text-center justify-content-center">
                    <h5 class="modal-title">Lista de todos los usuarios</h5>
                </div>
                <div class="modal-body border-bottom border-light text-center">
                    <?php tablaUsuarios(); ?> 
                </div>
                <div class="d-grid m-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>