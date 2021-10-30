<?php
    include('../componentes/head.php');
    include('../componentes/background.php');
    include('../componentes/scripts.php');
    componenteHead('Login');
    componenteBackground();
?>

<body>
    <!-- LOGIN -->
    <div class='container-fluid' id='container-login'>
        <div class='row justify-content-center mt-5'>
            <div class='col-sm-6'>
                <div class='text-center'>
                    <form id="formLogin" class='card m-3 p-5' action="../php/auth-login.php" method="POST">
                        <h1>Login</h1>
                        <p class='text-muted' id="frase-login">¡Introduce tu email y contraseña!</p> 
                        <input class='mt-2 shadow-sm form-control' type='email' name='email' placeholder='Email' autocomplete='off' required> 
                        <input class='mt-3 shadow-sm form-control' type='password' name='password' placeholder='Contraseña' autocomplete='off' required> 
                        <input class='mt-3 shadow-sm text-center btn btn-negro' type='submit' value='Iniciar sesión' href='#'>
                        <p class='text-muted mt-2'>¿No tienes una cuenta?</p>
                        <a type="text" class="btn-outline-dark" id="btn-to-register">¡Registrate aquí!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- REGISTER -->
    <div class='container-fluid' id='container-register'>
        <div class='row justify-content-center mt-5'>
            <div class='col-sm-6'>
                <div class='text-center'>
                    <form id="formRegister" class='card m-3 p-5' action="../php/insert-register.php" method="POST">
                        <h1>Register</h1>
                        <p class='text-muted' id='frase-register'>¡Registrate rellenando los campos!</p> 
                        <input class='mt-2 shadow-sm form-control' type='text' name='nombre' placeholder='Introduce tu nombre de usuario *' autocomplete='off' required>
                        <input class='mt-3 shadow-sm form-control' type='email' name='email' placeholder='Introduce tu email *' autocomplete='off' required> 
                        <input class='mt-3 shadow-sm form-control' type='password' name='password' placeholder='Introduce tu contraseña *' autocomplete='off' required>
                        <input class='mt-3 shadow-sm text-center btn btn-negro' type='submit' value='Registrarse'>
                        <p class='text-muted mt-3'>¿Ya tienes una cuenta?</p>
                        <a type="text" class="btn-outline-dark" id="btn-to-login">¡Inicia sesión!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php componenteScripts(); ?>
</body>