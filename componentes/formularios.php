<?php function formModalCrearUsuario() { ?>
    <div class="modal fade" id="formModalCrearUsuario" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-color">
                <div class="modal-header border-bottom border-light text-center justify-content-center">
                    <h5 class="modal-title text-dark">Crear un nuevo usuario</h5>
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

<?php function formCreateCategoria() { ?>
    <div class="modal fade" id="formModalCrearCategoria" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-color">
                <div class="modal-header border-bottom border-light text-center justify-content-center">
                    <h5 class="modal-title text-dark">Crear una nueva categoria</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-bottom border-light text-center">
                    <form action="../php/insert-categoria.php" method="POST" id="crearUsuarioForm">
                        <div class="form-floating mb-3">
                            <input type="text" minlength="4" maxlength="70" name="nombre-categoria" class="form-control text-dark" autocomplete="off" required>
                            <label for="nombre">Nombre de la categoria</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php function formModificarUsuario($usuario) { ?>
    <div class="container-fluid mt-2">
        <div class="row border border-color rounded p-2">
            <h5 class="text-color m-2">
                Formulario de actualización del usuario <?php echo $usuario['nombre']; ?>
            </h5>
            <form action="../php/update-usuario.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
                <div class="form-floating m-2">
                    <input type="text" name="nombre" class="form-control text-dark" minlength="4" maxlength="35" value="<?php echo $usuario['nombre']; ?>" autocomplete="off" required>
                    <label for="nombre">Nombre del nuevo usuario</label>
                </div>
                <div class="form-floating m-2">
                    <input type="email" name="email" class="form-control text-dark" minlength="7" maxlength="35" value="<?php echo $usuario['email']; ?>" autocomplete="off" required>
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
                <div class="row m-2 gap-2">
                    <div class="col d-grid">
                        <button type="submit" class="btn btn-color">Actualizar usuario</button>
                    </div>
                    <div class="col d-grid">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-usuario">Eliminar usuario</button>
                    </div>
                </div>
                <div class="row m-2 gap-2">
                    <div class="col d-grid">
                        <a class="btn btn-color" type="button" href="./usuario.php">Volver a los usuarios</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>