<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-4 text-gray-800">Data Akun</h1>
  <!-- // ! Error handling -->
  <?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
      <?= validation_errors() ?>
    </div>
  <?php endif; ?>
  <?= $this->session->flashdata('message'); ?>
  <!-- // ! Tambah barang button -->
  <a href="#" data-toggle="modal" data-target="#tambahBarang" class="btn btn-primary p-0 btn-icon-split mb-2">
    <span class="icon text-white-50 ">
      <i class="fa-solid fa-plus"></i>
    </span>
    <span class="text">Tambah Akun</span>
  </a>
  <!-- // ! Table -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="">
              <th class="col col-1 text-center">Gambar</th>
              <th class="col col-1 text-center">Nama</th>
              <th class="col col-1 text-center">Email</th>
              <th class="col col-1 text-center">Level</th>
              <th class="col col-1 text-center">Alamat</th>
              <th class="col col-2 text-center">Event</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($akun as $item) : ?>
              <tr>
                <td class="text-center"><img width="45px" src="<?= base_url('assets/img/akun/') . $item['gambar'] ?>" alt="<?= $item['gambar'] ?>"></td>
                <td><?= $item['nama'] ?></td>
                <td><?= $item['email'] ?></td>
                <td class="text-center"><?= $item['level'] ?></td>
                <td class="text-center"><?= $item['alamat'] ?></td>
                <td class=" col-2 text-center">
                  <a href="<?= base_url('admin/ubahAkun/') . $item['id'] ?>" class="btn btn-success btn-md ">
                    <i class="fas fa-reguler fa-pen"></i>
                  </a>
                  <a href="<?= base_url('admin/hapusAkun/') . $item['id'] ?>" class="btn btn-danger btn-md">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

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
      <form action="<?= base_url("admin/akun") ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="col font-weight-bold text-gray">
              Level
            </div>
            <select class="form-select font-weight-bold text-gray" aria-label="Default select example" name="level">
              <option value="pelanggan">Pelanggan</option>
              <option value="staff">Staff</option>
              <option value="manajer">Manajer</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control border-1" id="alamat" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
            <div class="col font-weight-bold text-gray-800">
              Gambar
            </div>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-2 text-center">
                  <img width="50px" src="<?= base_url('assets/img/akun/default-akun.jpg') ?>" class="img-img-thumbnail" alt="">
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