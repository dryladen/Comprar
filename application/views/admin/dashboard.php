<div class="container-fluid vh-100">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
  <div class="row">
    <!-- total barang -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mx-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Total Barang</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $lenBarang . ' Item' ?></div>
            </div>
            <div class="col-3">
              <i class="fas fa-fw fa-box-open fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- total pengguna -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mx-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Total Pengguna</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $lenAkun . ' Item' ?></div>
            </div>
            <div class="col-3">
              <i class="fas fa-fw fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>