<!-- https://themes.getbootstrap.com/product/soft-ui-design-system-pro/ -->
<?php
  include('../database/conexion.php');
  include('../componentes/head.php');
  include('../componentes/background.php');
  componenteHead('Boceto');
  componenteBackground();
?>
<body>
    <div class="container-fluid position-sticky z-index-sticky">
      <div class="row text-center mx-5 mb-0 mt-1">
        <div class="col-sm-auto nav-izq my-1 p-1">
          <a href="#">
            <svg class="profile" xmlns="http://www.w3.org/2000/svg" height="40" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
          </a>
        </div>
        <div class="col-sm nav my-1 px-3 align-items-center">
          <a class="px-2 mt-2" href="#">Productos</a>
        </div>
        <div class="col-sm nav my-1 px-3 align-items-center">
          <a class="px-2 mt-2" href="#">Ofertas</a>
        </div>
        <div class="col-sm nav my-1 px-3 align-items-center">
          <a class="px-2" href="#">Outlet</a>
        </div>
        <div class="col-sm-auto mr-1 nav-der my-1 px-3 justify-content-center">
        </div>
      </div>
      <div class="row m-0 p-0 justify-content-center">
        <div class="col-sm-auto bg-light">
          <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
            <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
          </svg>
        </div>
      </div>
    </div>
</body>