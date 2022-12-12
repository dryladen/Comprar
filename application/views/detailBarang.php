<!-- Page Content -->
<div class="container mt-5 pt-1">

  <!-- Portfolio Item Row -->
  <div class="row mt-4">

    <div class="col-md-6 p-3 d-flex justify-content-center ">
      <img class="img-fluid rounded" src="<?= base_url('assets/img/barang/') . $item['gambar'] ?>" alt="">
    </div>
    <div class="col-md-6">
      <h3 class="my-3 font-weight-bold"><?= $item['nama'] ?></h3>
      <h1 class="my-3"><span class="badge bg-blue">Rp.<?= $item['harga'] ?></span></h1>
      <h3 class="my-3">Deskripsi</h3>
      <p><?= $item['deskripsi'] ?></p>
      <a href="#" class="btn p-0 btn-success btn-icon-split">
        <span class="icon text-white">
          <i class="fas fa-cart-plus"></i>
        </span>
        <span class="text">Tambah ke Keranjang</span>
      </a>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Related Projects</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
        <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
      </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
        <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
      </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
        <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
      </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
        <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
      </a>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->