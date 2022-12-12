<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-blue sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
      <div class="sidebar-brand-icon">
        <i class="fas fa-fan"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Comprar</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Barang
    </div>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/dataBarang') ?>">
        <i class="fas fa-fw fa-box-open"></i>
        <span>Data Barang</span>
      </a>
      <a class="nav-link" href="<?= base_url('admin') ?>">
        <i class="fa-solid fa-truck-fast"></i>
        <span>Pengiriman</span>
      </a>
    </li>
    <!-- Heading -->
    <div class="sidebar-heading">
      User
    </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/akun') ?>">
        <i class="fa-solid fa-users"></i>
        <span>Data Akun</span></a>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/hero') ?>">
        <i class="fa-solid fa-users"></i>
        <span>Hero</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>
  <!-- End of Sidebar -->