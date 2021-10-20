<?php function componenteNavbar($nombre) { ?>
  <!-- NAVBAR -->
    <div class="d-flex justify-content-between">
    <!-- PERFIL NAV -->
    <nav class="navbar m-2 rounded bg-dark">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
          <a href="./perfil.php">
              <svg class="svg my-1 mx-2" xmlns="http://www.w3.org/2000/svg" height="30" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            </a>
          </div>
          <div class="col flex-nowrap">
            <a class="nav-link" href="./perfil.php"><?php echo $nombre; ?></a>
          </div>
        </div>
      </div>
    </nav>
  <!-- ITEMS DE NAVBAR -->
    <nav class="navbar m-2 rounded bg-dark">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <a class="nav-link" href="#">Productos</a>
          </div>
          <div class="col">
            <a class="nav-link" href="#">Home</a>
          </div>
          <div class="col">
            <a class="nav-link" href="#">Ofertas</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- LOGOUT -->
    <nav class="navbar m-2 rounded bg-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-auto">
              <a href="#">
                <svg class="svg my-1 mx-2 salir" xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                  <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                  <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
<?php } ?>