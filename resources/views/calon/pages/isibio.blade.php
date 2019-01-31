@include("calon.theme.head")
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">{{ $title }}</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        @if($alert_status == 0)
        {!! $alert !!}
        <form method="post" action="" onsubmit="return false" id="save">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="form-group"><label>Nama Lengkap</label><input class="form-control" type="text"  value="" name="nama_lengkap"></div>
            </div>
            <input type="text" hidden name="id_user" value="{{session()->get("id_user")}}">
            <div class="col-md-12">
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk">
                  <option value="laki-laki">Laki - Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group"><label>Alamat</label><textarea class="form-control" type="text"  value="" name="alamat"></textarea></div>
            </div>
            <div class="col-md-12">
              <div class="form-group pull-right"><button class="btn btn-success" type="submit">Simpan</button>
              </div>
            </div>
        </form>
        </div>
        @else
        <form method="post" action="" onsubmit="return false" disabled>
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="form-group"><label>Nama Lengkap</label><input class="form-control" type="text"  value="{{$data_biodata->nama_lengkap}}" disabled name="nama_lengkap"></div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" disabled name="jk">
                  @if($data_biodata->jk == "laki-laki")
                  <option value="laki-laki" selected>Laki - Laki</option>
                  <option value="perempuan">Perempuan</option>
                  @else
                  <option value="laki-laki">Laki - Laki</option>
                  <option value="perempuan" selected>Perempuan</option>
                  @endif
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group"><label>Alamat</label><textarea disabled class="form-control" type="text"   name="alamat">{{$data_biodata->alamat}}</textarea></div>
            </div>
            <div class="col-md-12">
              <div class="form-group pull-right"><button disabled class="btn btn-success" type="submit">Simpan</button>
              </div>
            </div>
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
@include("calon.theme.foot")
