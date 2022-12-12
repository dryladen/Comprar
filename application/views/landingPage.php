<!-- Navigation -->
<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <?php  ?>
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/lHGeqh3XhRY/1920x1080')">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>
<!-- Page Content -->
<section class="py-1">
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Produk</h1>

    <div class="row">
      <?php if (count($barang) != 0) {
        for ($i = 0; $i < count($barang); $i++) : ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
              <a href="#"><img style="max-height: 230px;object-fit: cover;" class="card-img-top" src="<?= base_url('assets/img/barang/') . $barang[$i]['gambar'] ?>" alt="<?= base_url('assets/img/barang/') . $barang[$i]['gambar'] ?>"></a>
              <div class="card-body">
                <h4 class="card-title ">
                  <a class="nav-link font-weight-bold" href="<?= base_url('landingPage/detailBarang/') . $barang[$i]['id'] ?>"><?= $barang[$i]['nama'] ?></a>
                </h4>
                <div class="d-flex flex-row">
                  <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <h4 class="mr-1">Rp.<?= $barang[$i]['harga'] ?></h4>
                </div>
                <p class="card-text"><?= $barang[$i]['deskripsi'] ?></p>
                <div class="row px-2">

                  <button class="btn btn-primary btn-sm" type="button"><a class="nav-link text-white" href="<?= base_url('landingPage/detailBarang/') . $barang[$i]['id'] ?>">Detail</a></button>
                  <button class="btn btn-outline-primary btn-sm mt-2" type="button">Tambah ke keranjang</button>
                </div>
              </div>
            </div>
          </div>
        <?php endfor;
      } else { ?>
        <div class="alert alert-primary" role="alert">Barang Kosong</div>
      <?php } ?>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.container -->

</section>