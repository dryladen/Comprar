<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-4 text-gray-800">Data Hero</h1>
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
    <span class="text">Tambah Hero</span>
  </a>
  <!-- // ! Table -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="">
              <th class="col col-1 text-center">Gambar</th>
              <th class="col col-1 text-center">Label</th>
              <th class="col col-1 text-center">Deskripsi</th>
              <th class="col col-1 text-center">Id Pembuat</th>
              <th class="col col-1 text-center">Status</th>
              <th class="col col-2 text-center">Event</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($hero as $item) : ?>
              <tr>
                <td class="text-center"><img width="45px" src="<?= base_url('assets/img/hero/') . $item['gambar'] ?>" alt="default-item"></td>
                <td><?= $item['label'] ?></td>
                <td><?= $item['deskripsi'] ?></td>
                <td class="text-center"><?= $item['id_pembuat'] ?></td>
                <td class="text-center"><?= $item['status'] ?></td>
                <td class=" col-2 text-center">
                  <a href="<?= base_url('admin/ubahHero/') . $item['id'] ?>" class="btn btn-success btn-md ">
                    <i class="fas fa-reguler fa-pen"></i>
                  </a>
                  <a href="<?= base_url('admin/hapusHero/') . $item['id'] ?>" class="btn btn-danger btn-md">
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
        <h5 class="modal-title" id="tambahBarangLabel">Masukan data hero</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?= base_url("admin/hero") ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="label" name="label" placeholder="Label">
          </div>
          <div class="form-group">
            <select class="form-select" aria-label="Default select example" name="status">
              <option value="Belum disetujui">Belum disetujui</option>
              <option value="Di terima">Di terima</option>
              <option value="Di tolak">Di tolak</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-gray-800" for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
          </div>
          <div class="form-group">
            <div class="col font-weight-bold text-gray-800">
              Gambar
            </div>
            <div class="col-sm-12">
              <div class="row">
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