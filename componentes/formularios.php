<?php function formModalCrearUsuario() { ?>
    <div class="modal fade" id="formModalCrearUsuario" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header border-bottom border-light text-center justify-content-center">
                    <h5 class="modal-title text-light">Crear un nuevo usuario</h5>
                </div>
                <div class="modal-body border-bottom border-light text-center">
                    <form action="../php/insert-usuario.php" method="POST" id="crearUsuarioForm">
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
                            <select class="form-select" name="rol" id="rol" required>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                            <label for="rol">Rol del nuevo usuario</label>
                        </div>
                        <div class="mb-3 text-start bg-light rounded">
                            <small for="rol" class="text-secondary mx-3 mt-2">Avatar del nuevo usuario</small>
                            <input type="file" name="avatar" class="form-control text-dark" accept="image/png, image/jpeg, image/jpg" autocomplete="off">
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