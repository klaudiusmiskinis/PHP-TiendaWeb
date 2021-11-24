<?php function formModalCrearUsuario() { ?>
    <div class="modal fade" id="formModalCrearUsuario" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header border-bottom border-light text-center justify-content-center">
                    <h5 class="modal-title text-light">Crear un nuevo usuario</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-bottom border-light text-center">
                    <form action="../php/insert-usuario.php" method="POST" enctype="multipart/form-data" id="crearUsuarioForm">
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
                        <div class="d-grid">
                            <button type="submit"  class="btn btn-outline-light">Crear usuario</button>
                        </div>
                    </form>
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

<?php function formModificarUsuario($usuario) { ?> 
    <div class="container-fluid">
        <div class="row bg-dark rounded p-2">
            <h5 class="text-light m-2">
                Formulario de actualización
            </h5>
            <form action="../php/update-usuario.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                <div class="form-floating m-2">
                    <input type="text" name="nombre" class="form-control text-dark" minlength="4" value="<?php echo $usuario['nombre']; ?>" autocomplete="off" required>
                    <label for="nombre">Nombre del nuevo usuario</label>
                </div>
                <div class="form-floating m-2">
                    <input type="email" name="email" class="form-control text-dark" minlength="7" value="<?php echo $usuario['email']; ?>" autocomplete="off" required>
                    <label for="email">Email del nuevo usuario</label>
                </div>
                <div class="form-floating m-2">
                    <input type="password" name="password" class="form-control text-dark" minlength="10" value="<?php echo $usuario['password']; ?>" autocomplete="off" required>
                    <label for="password">Password del nuevo usuario</label>
                </div>
                <div class="form-floating m-2">
                    <select class="form-select" name="rol" id="rol" required>
                        <?php if ($usuario['rol'] === 'admin') { ?>
                            <option selected value="<?php echo $usuario['rol'];?>">Admin</option>
                            <option value="user">User</option>
                        <?php } else  { ?>
                            <option selected value="<?php echo $usuario['rol'];?>">User</option>
                            <option value="admin">Admin</option>
                        <?php } ?>
                        
                    </select>
                    <label for="rol">Rol del nuevo usuario</label>
                </div>
                <div class="d-grid gap-2 m-2">
                    <button type="submit" class="btn btn-outline-light">Actualizar usuario</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-usuario">Eliminar usuario</button>
                </div>
            </form>
        </div>
    </div>
<?php } ?>