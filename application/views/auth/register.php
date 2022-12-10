<div class="container-fluid pt-4 d-flex flex-column justify-content-center align-items-center">
  <div class="login-field mt-3 p-4">
    <h3 class="text-center text-white fw-bold py-1">Register</h3>
    <form class="mt-3 text-white" method="POST" action="">
      <div class="bg-light-blue ">
        <label for="nama">Nama</label>
        <input type="text" class="form-control shadow mb-3" id="nama" placeholder="Nama" name="nama" value="<?= set_value('nama') ?>"/>
        <?= form_error('nama','<small id="namaError" class="form-text text-white text-bg-danger p-1">','</small>') ?>
      </div>
      <div class="bg-light-blue ">
        <label for="email">Email</label>
        <input type="email" class="form-control shadow mb-3" id="email" placeholder="example@gmail.com" name="email" value="<?= set_value('email') ?>"/>
        <?= form_error('email','<small id="emailError" class="form-text text-white text-bg-danger p-1">','</small>') ?>
      </div>
      <div class="form-group row mb-4">
        <div class="bg-light-blue col">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
          <?= form_error('password','<small id="passwordError" class="form-text text-white text-bg-danger p-1 mt-2">','</small>') ?>
        </div>
        <div class="bg-light-blue col">
          <label for="konfirmasiPwd" class="form-label">Konfirmasi Password</label>
          <input type="password" class="form-control" id="password" placeholder="Konfirmasi Password" name="konfirmasiPwd">
        </div>
      </div>
      <button type="submit" class="btn bg-white w-100 py-3">
        <h4 class="fw-bold">Daftar</h4>
      </button>
      <div class="text-center mt-3">
        <p class="text-white">Sudah punya akun ? <a class="text-white fw-bold" href="<?= base_url('auth') ?>">Login</a></p>
      </div>
    </form>
  </div>
</div>