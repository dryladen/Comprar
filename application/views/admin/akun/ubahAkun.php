<div class="container-fluid mb-4">
  <div class="col col-7">
    <h1 class="h3 mb-4 text-gray-800">Ubah data akun</h1>
    <form action="<?= base_url('admin/ubahAkun/') . $item['id'] ?>" method="POST" enctype="multipart/form-data">
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
      <a href="<?= base_url('admin/akun') ?>" class="btn btn-secondary">Batal</a>
      <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
  </div>
</div>