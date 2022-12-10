<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Barang</h1>
  <?php if(validation_errors()): ?>
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
        <th scope="col" class="col col-7">Nama</th>
        <th scope="col">Harga</th>
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
            <td class="text-center">
              <a href="" class="badge badge-success">Edit</a>
              <a href="<?= base_url('admin/hapusBarang/').$barang[$i]['id']?>" class="badge badge-danger">Delete</a>
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
      <form action="<?= base_url("admin") ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
          </div>
          <div class="form-group">
            <input type="number" class="form-control border-1" id="harga" name="harga" placeholder="Harga Barang">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success" href="">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>