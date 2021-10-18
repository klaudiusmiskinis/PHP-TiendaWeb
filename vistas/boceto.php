<!-- https://themes.getbootstrap.com/product/soft-ui-design-system-pro/ -->
<?php
  include('../database/conexion.php');
  include('../componentes/head.php');
  include('../componentes/background.php');
  componenteHead('Perfil');
  componenteBackground();
?>
<body>
    <div class="container-fluid justify-content-center position-sticky z-index-sticky">
      <div class="row text-center mx-5">
        <div class="col-sm-auto nav-izq my-1 p-1">
          <a href="#">
            <svg class="profile" xmlns="http://www.w3.org/2000/svg" height="40" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
          </a>
        </div>
        <div class="col-sm nav-der m-1">
          <div class="d-flex justify-content-center">
            <a class="item mt-1 p-2 mx-2">Productos</a>
            <a class="item mt-1 p-2 mx-2">Tienda</a>
            <a class="item mt-1 p-2 mx-2">Pedidos</a>
            <a class="item mt-1 p-2 mx-2">Ofertas</a>
            <a class="item mt-1 p-2 mx-2">Lorem</a>
          </div>
        </div>
      </div>
    </div>
</body>