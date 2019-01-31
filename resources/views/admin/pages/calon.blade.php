@include("admin.theme.head")
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        <p>* Klik Baris Untuk Memunculkan Info Tambahan -v-</p>
      </div>
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table" id="main">
            <thead>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Pengisian Biodata</th>
              <th>Tanggal Daftar</th>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@include("admin.theme.foot")
