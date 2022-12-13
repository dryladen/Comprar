<div class="col-12 mb-4">
  <div class="card-body">
    <h5 class="card-title">Data Hero</h5>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th scope="col">Gambar</th>
          <th scope="col">Label</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Id pembuat</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hero as $item) : ?>
          <tr>
            <td class="text-center"><img width="70px" src="<?= base_url('assets/img/hero/') .$item['gambar'] ?>" alt=""> </td>
            <td><?= $item['label'] ?></td>
            <td><?= $item['deskripsi'] ?></td>
            <td><?= $item['id_pembuat'] ?></td>
            <td><?= $item['status'] ?></td>
          </tr>
            <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>