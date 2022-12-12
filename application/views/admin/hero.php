<div class="col-12 mb-4">
  <div class="card-body">
    <h5 class="card-title">Data Hero</h5>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th scope="col">Gambar</th>
          <th scope="col">Label</th>
          <th scope="col">Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($akun as $user) : ?>
          <td><?= $user['nama'] ?></td>
          <td><?= $user['email'] ?></td>
          <td><?= $user['level'] ?></td>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>