<?php $title = "Landing Page";?>
<nav role="navigation" class="navbar navbar-expand-lg bg-blue text-white fw-bold">
  <div class="container-fluid mx-sm-5">
    <a href="#" class="navbar-brand text-white fw-bold">WebKuy</a>
    <ul class="navbar-nav px-5 mx-sm-5 d-flex justify-content-evenly">
      <li class="p-2 nav-item"><a href="#">Home</a></li>
      <li class="p-2 nav-item"><a href="<?= base_url('auth/logout') ?>">Log Out</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron bg-light-blue d-flex flex-column text-white">
  <h1 class="jumbo-text">Jasa Pembuatan Website Terpercaya</h1>
  <p>
    <b>Gratis</b> pemanduan, <b>Garansi</b> hacker, Dan mempunyai
    <b>150 klien</b> aktif diseluruh dunia.
  </p>
</div>
<div class="harga-web p-5 mb-5">
  <h3 class="text-center fw-bold pb-5">HARGA WEB</h3>
  <div class="d-flex justify-content-evenly">
    <div class="paket">
      <div class="paket-nama bg-blue text-white"><b>Paket A</b></div>
      <div class="harga">Rp. 390.000,00</div>
      <div class="fitur d-flex flex-column justify-content-evenly">
        <ul class="px-5 pt-2 fw-bold">
          <li>Hosting 50 MB</li>
          <li>Bandwidth 5 GB/ bulan</li>
        </ul>
        <a href="#" class="text-center">
          <button class="mx-5 beli btn bg-blue">
            Beli Sekarang
          </button></a>
      </div>
    </div>
    <div class="paket">
      <div class="paket-nama bg-blue text-white"><b>Paket A</b></div>
      <div class="harga">Rp. 500.000,00</div>
      <div class="fitur d-flex flex-column justify-content-evenly">
        <ul class="px-5 pt-2 fw-bold">
          <li>Hosting 100 MB</li>
          <li>Bandwidth 10 GB/ bulan</li>
        </ul>
        <a href="#" class="text-center"><button class="mx-5 btn beli bg-blue">
            Beli Sekarang
          </button></a>
      </div>
    </div>
  </div>
</div>