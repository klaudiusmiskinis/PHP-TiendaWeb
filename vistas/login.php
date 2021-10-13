<?php 
    include('./componentes/head.php');
    include('./componentes/link.php');
    include('./componentes/background.php');
    componenteHead('Login');
    componenteLink();
    componenteBackground();
?>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="text-center">
                    <form class="card m-3 p-5">
                        <h1>Login</h1>
                        <p class="text-muted">¡Introduce tu nombre de usuario y contraseña!</p> 
                        <input class="mt-2 shadow-sm form-control" type="text" name="nombre" placeholder="Nombre de usuario" autocomplete="off" required> 
                        <input class="mt-3 shadow-sm form-control" type="password" name="password" placeholder="Contraseña" autocomplete="off" required> 
                        <input class="mt-3 shadow-sm text-center btn" type="submit" value="Login" href="#">
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>