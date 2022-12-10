<div class="container-fluid vh-100">
  <div class="col col-7">
    <h1 class="h3 mb-4 text-gray-800">Ubah data barang</h1>
    <form action="<?= base_url('admin/ubahBarang/') . $item['id'] ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama baru" value="<?= $item['nama'] ?>">
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga baru" value="<?= $item['harga'] ?>">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $item['deskripsi'] ?></textarea>
      </div>
      <div class="form-group">
        <div class="col font-weight-bold text-gray-800">
          Gambar
        </div>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-2 text-center">
              <img width="70px" src="<?= base_url('assets/img/barang/').$item['gambar'] ?>" class="img-img-thumbnail" alt="">
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
      <button type="button" class="btn btn-secondary">Batal</button>
      <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
  </div>
</div>