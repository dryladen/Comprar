<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Barang</h1>
  <?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
      <?= validation_errors() ?>
    </div>
  <?php endif; ?>
  <?= $this->session->flashdata('message'); ?>
  <a href="" data-toggle="modal" data-target="#tambahBarang" class="btn btn-primary mb-3">Tambah Barang</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" class="col col-1">No</th>
        <th scope="col" class="col col-3">Nama</th>
        <th scope="col" class="col col-1">Harga</th>
        <th scope="col" class="col col-4">Deskripsi</th>
        <th scope="col" class="col col-1 text-center">Gambar</th>
        <th scope="col" class="col col-2 text-center">Event</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($barang) != 0) {
        for ($i = 0; $i < count($barang); $i++) : ?>
          <tr>
            <th scope="row"><?= $i + 1 ?></th>
            <td><?= $barang[$i]['nama'] ?></td>
            <td><?= $barang[$i]['harga'] ?></td>
            <td><?= $barang[$i]['deskripsi'] ?></td>
            <td class="text-center"><img width="45px" src="<?= base_url('assets/img/barang/').$barang[$i]['gambar'] ?>" alt="default-item"></td>
            <td class="text-center">
              <a href="<?= base_url('admin/ubahBarang/') . $barang[$i]['id'] ?>" class="btn btn-success btn-circle btn-md ">
                <i class="fas fa-reguler fa-pen"></i>
              </a>
              <a href="<?= base_url('admin/hapusBarang/') . $barang[$i]['id'] ?>" class="btn btn-danger btn-circle btn-md">
                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
        <?php endfor;
      } else { ?>
        <tr>
          <th colspan="4" class="text-center">Barang kosong</th>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Tambah barang Modal-->
<div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="tambahBarangLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahBarangLabel">Masukan data barang</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?= base_url("admin") ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
          </div>
          <div class="form-group">
            <input type="number" class="form-control border-1" id="harga" name="harga" placeholder="Harga Barang">
          </div>
          <div class="form-group">
            <label class="text-gray-800" for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
          </div>
          <div class="form-group">
            <div class="col font-weight-bold text-gray-800">
              Gambar
            </div>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-2 text-center">
                  <img width="50px" src="<?= base_url('assets/img/barang/default-item.png') ?>" class="img-img-thumbnail" alt="">
                </div>
                <div class="col-sm-10 d-flex align-items-center">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    <label class="custom-file-label" for="gambar">Pilih gambar</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" href="">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>