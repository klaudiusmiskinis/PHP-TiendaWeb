<?php 
    include('../componentes/head.php');
    include('../componentes/background.php');
    componenteHead('Register');
    componenteBackground();
?>

<body>
    <div class='container-fluid'>
        <div class='row justify-content-center mt-5'>
            <div class='col-md-6'>
                <div class='text-center'>
                    <form class='card m-3 p-5' method>
                        <h1>Login</h1>
                        <p class='text-muted'>¡Introduce tu nombre de usuario y contraseña!</p> 
                        <input class='mt-2 shadow-sm form-control' type='text' name='nombre' placeholder='Introduce tu nombre de usuario' autocomplete='off' required>
                        <input class='mt-3 shadow-sm form-control' type='email' name='email' placeholder='Introduce tu email' autocomplete='off' required> 
                        <input class='mt-3 shadow-sm form-control' type='password' name='password' placeholder='Introduce tu contraseña' autocomplete='off' required>
                        <input class='mt-3 shadow-sm text-center btn' type='submit' value='Registrarse' href='#'>
                        <p class='text-muted mt-2'>¿Ya tienes una cuenta? <a href="./index.php">¡Inicia sesión!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>