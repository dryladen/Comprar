<div class="container-fluid vh-100">
  <div class="col col-7">
    <h1 class="h3 mb-4 text-gray-800">Ubah data barang</h1>
    <form action="<?= base_url('admin/ubahBarang/').$item['id'] ?>" method="POST">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama baru" value="<?= $item['nama'] ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga baru" value="<?= $item['harga'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
  </div>
</div>