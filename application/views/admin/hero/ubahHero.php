<div class="container-fluid mb-4">
  <div class="col col-7">
    <h1 class="h3 mb-4 text-gray-800">Ubah data barang</h1>
    <form action="<?= base_url('admin/ubahHero/') . $item['id'] ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <select class="form-select" aria-label="Default select example" name="status">
          <option value="Belum disetujui">Belum disetujui</option>
          <option value="Di terima">Di terima</option>
          <option value="Di tolak">Di tolak</option>
        </select>
      </div>
      <a href="<?= base_url('admin/hero') ?>" class="btn btn-secondary">Batal</a>
      <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
  </div>
</div>