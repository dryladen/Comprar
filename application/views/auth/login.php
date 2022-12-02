<div class="container-fluid pt-4 d-flex flex-column justify-content-center align-items-center">
  <div class="login-field mt-5 p-4">
    <h3 class="text-center text-white fw-bold py-1">Login</h3>
    <?= $this->session->flashdata('message'); ?>
    <form class="mt-3" method="POST" action="<?= base_url('auth') ?>">
      <div class="bg-light-blue ">
        <label for="email">Email</label>
        <input type="email" class="form-control shadow mb-3" id="email" placeholder="Email" name="email" />
        <?= form_error('nama','<small id="namaError" class="form-text text-white text-bg-danger p-1">','</small>') ?>
      </div>
      <div class="bg-light-blue ">
        <label for="pwd">Password</label>
        <input type="password" class="form-control shadow mb-2" id="password" placeholder="Password" name="password" />
        <?= form_error('password','<small id="passwordError" class="form-text text-white text-bg-danger p-1 mt-2">','</small>') ?>
      </div>
      <button type="submit" class="btn bg-white w-100 mt-3 py-3"><h4 class="fw-bold">Login</h4></button>
      <div class="text-center mt-3">
        <p class="text-white">Belum punya akun ? <a class="text-white fw-bold" href="<?= base_url('auth/register') ?>">Register</a></p>
      </div>
    </form>
  </div>
</div>