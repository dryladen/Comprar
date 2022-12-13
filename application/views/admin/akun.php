<div class="col-12 mb-4">
  <div class="card-body">
    <h5 class="card-title">Data Hero</h5>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Level</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($akun as $user) : ?>
          <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['level'] ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>