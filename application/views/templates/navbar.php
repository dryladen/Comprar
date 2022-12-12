<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-blue static-top">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="<?= base_url('landingPage') ?>">
      <i class="fas fa-fan"></i>
      COMPRAR
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('landingPage') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Produk</a>
        </li>
        <?php if ($this->session->userdata('level') != 'pelanggan') : ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('admin') ?>">Admin</a>
          </li>
        <?php endif; ?>
      </ul>
      <!-- Left links -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="link-light me-3" href="<?= site_url('landingPage/keranjang') ?>">
          <i class="fas fa-shopping-cart"></i>
        </a>

        <!-- Notifications -->
        <div class="dropdown no-arrow">
          <a class="link-light me-1 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bell"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <div class="dropdown-divider "></div>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <div class="dropdown-divider "></div>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </div>
        <div class="divider border-left border-3 border-danger h-50 align-self-center mx-3"></div>
        <!-- Avatar -->
        <div class="dropdown no-arrow ml-3">
          <a class="dropdown-toggle d-flex align-items-center hidden-arrow nav-link font-weight-bold text-white" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $user['nama'] ?>
            <img height="30" class="ml-2 img-profile rounded-circle" src="<?= base_url('assets') ?>/img/undraw_profile.svg">
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="navbarDropdownMenuAvatar">
            <li>
              <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                My profile
              </a>
            </li>
            <div class="dropdown-divider "></div>
            <li>
              <a class="dropdown-item" href="#">
                <i class="fa-sharp fa-solid fa-gear fa-fw mr-2 text-gray-400"></i>
                Settings
              </a>
            </li>
            <div class="dropdown-divider "></div>
            <li>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
</nav>