<!-- Navbar -->

<Style>
  .dropdown-toggle::after { 
    display: none !important;
  }

  ul {
    padding: 0;
    list-style: none;
    text-decoration: none;
  }
</Style>

<div class="container">
  <div class="row">

    <div class="col-12 col-lg-2 mt-1">
      <div class="d-flex justify-content-center">
        <a href="<?php echo $path ?>views/assets/js/index3.html" class="navbar-brand">
          <img src="<?php echo $path ?>views/assets/img/adminlte/DULCECANELA-min2.png" class="brand-image imp-fluid py-3 py-5 py-lg-0 pe-lg-3">
        </a>
      </div>
    </div>

    <div class="col-12 col-lg-7 col-xl-8 mt-2 px-3 px-lg-0">
      <a class="nav-link float-start" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      <div class="dropdown px-1 float-start" style="background:#47BAC1; color:white">
        <a id="dropdownSubMenu1" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-uppercase">Categorias <i class="ps-2 fas fa-th-list"></i> </a>

        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          <!-- Level two dropdown-->
          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">
              <i class="fas fa-tshirt pe-2 fa-xs"></i> ropa
            </a>
            <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para dama</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para hombre</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado deportivos</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para infantil</a></li>
            </ul>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Ropa para dama</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Ropa para hombre</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Ropa deportiva</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Ropa para infantil</a></li>
            </ul>
          </li>
          <!-- End level two -->

          <!-- Level three dropdown-->
          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">
              <i class="fas fa-shoe-prints pe-2 fa-xs"></i> calzado
            </a>
            <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para dama</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para hombre</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado deportivos</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para infantil</a></li>
            </ul>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para dama</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para hombre</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado deportivos</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Calzado para infantil</a></li>
            </ul>
          </li>
          <!-- End level three -->

          <!-- Level tecnologia dropdown-->
          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">
              <i class="fas fa-laptop pe-2 fa-xs"></i> tecnologia
            </a>
            <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Computacion</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Electricidad</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Belleza</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Programacion</a></li>
            </ul>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Computacion</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Electricidad</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Belleza</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Programacion</a></li>
            </ul>
          </li>
          <!-- End level tecnologia -->

          <!-- Level cursos dropdown-->
          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase">
              <i class="fas fa-graduation-cap pe-2 fa-xs"></i> cursos
            </a>
            <ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Computacion</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Mecanica</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Pintura</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Cocina</a></li>
            </ul>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Computacion</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Mecanica</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Pintura</a></li>
              <li><a tabindex="-1" href="#" class="dropdown-item text-uppercase">Cocina</a></li>
            </ul>
          </li>
          <!-- End level cursos -->
        </ul>
      </div>

      <form class="form-inline">
        <div class="input-group input-group w-100 me-lg-4">
          <input class="form-control rounded-0 p-3 pe-5" type="search" placeholder="buscar..." style="height: 40px;">
          <div class="input-group-append px-2" style="background:#47BAC1; color:white">
            <button class="btn btn-navbar text-white" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="col-12 col-lg-3 col-xl-2 mt-0 px-3 px-lg-0">
      <div class="my-2 my-lg- d-flex justify-content-center">
        <a href="#">
          <button class="bt btn-default float-start rounded-0 border-0 py-2 px-3" style="background:#47BAC1; color:white">
            <i class="fa fa-shopping-cart"></i>
          </button>
        </a>
        <div class="small border float-start ps-2 pe-5 w-100">
          TU CESTA <span>0</span> <br> USD $ <samp>0</samp>
        </div>
      </div>
    </div>

  </div>
</div>
