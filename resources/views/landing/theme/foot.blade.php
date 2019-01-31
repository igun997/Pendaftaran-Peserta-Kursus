

<section class="about-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="about-title">
          <h2>Tentang <br> S5 IT Consultant</h2>
          <p>Sebuah Start-Up yang bergerak dibidang teknologi dan berfokus pada pengembangan DApps dan Cryptocurrency, dan bertujuan untuk mewujudkan Visi dan Misi nya  </p>
          <a style="color:black;font-weight:bold;font-size:16px;font-family:'Comic Sans MS',cursive, sans-serif;" href="{{ url('/')}}"><img src="{{ url('/')}}/assets/stock/logo-s5it.png" style="width:auto;height:40px; " alt="">IT Consultant</a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="about-thumb">
          <img src="img/about.jpg" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4 ml-auto">
        <div class="tab-total-content">
          <div class="nav ilene-tabs" id="myTab" role="tablist">
            <a class="nav-item active" id="nav-home-tab" data-toggle="tab" href="#nav-history" role="tab" aria-controls="nav-history" aria-selected="true">Sejarah</a>
            <a class="nav-item" id="nav-profile-tab" data-toggle="tab" href="#nav-mission" role="tab" aria-controls="nav-mission" aria-selected="false">Visi dan Misi</a>
          </div>
          <div class="tab-content mt-40" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-history" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="single-content">
                <h3>Sejarah S5 IT Consultant</h3>
                <p>Kami berawal dari sebuah komunitas kecil yang berbasis di sebuah Universitas Swasta pada tahun 2016 dan pada tahun 2018 S5 IT Consultant di dirikan sebagai wadah bagi para <strong>pemimpi </strong>yang bercita cita menjadi seorang yang kompeten di bidang teknologi serta pada tahun yang sama kami bertujuan untuk menjadi pionir di bidang <em>Decentralize Application (DApps) </em>serta ingin membuat sebuah teknologi yang tangguh , murah dan dapat menumbuhkan komunitas yang bekerja sama untuk mencapai tujuan bersama</p>

              </div>
            </div>
            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="single-content">
                <h3>Visi & Misi</h3>
                <p><strong>Visi </strong></p>
                <p>Menjadi Pionir <strong><em>DApps </em></strong>dan menumbuhkan rasa kerja sama dan saling memiliki dengan menggunakan&nbsp;<em><strong>Decentralize Application</strong></em> </p>
                <p><strong>Misi </strong></p>
                <ol>
                <li>Menghilangkan Monopoli <strong>Centralize System</strong></li>
                <li>Mewujudkan Transparansi Data dan Usaha Yang Sehat</li>
                <li>Menciptakan Generasi Dengan Visi dan Misi yang serupa</li>
                <li>Menghilangkan segala jenis bentuk diskriminasi terhadap start-up</li>
                <li>MenciptakanGenerasi Indonesia Yang LebihBaik</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script src="{{url('/')}}/assets/bbs/js/vendor/jquery-2.2.4.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{url('/')}}/assets/bbs/js/vendor/bootstrap.min.js"></script>
<script src="{{url('/')}}/assets/bbs/js/jquery.ajaxchimp.min.js"></script>
<script src="{{url('/')}}/assets/bbs/js/jquery.nice-select.min.js"></script>
<script src="{{url('/')}}/assets/bbs/js/jquery.magnific-popup.min.js"></script>
<script src="{{url('/')}}/assets/bbs/js/main.js"></script>
<script src="{{url('/')}}/assets/main/bootbox.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{url('/')}}/assets/main/sidebar.js"></script>
<script src="{{url('/')}}/assets/main/main.js"></script>
<script type="text/javascript">
var csrf_token = $('meta[name="csrf-token"]').attr('content');
</script>
@foreach ($js as $val)
<script src="{{ $val }}"></script>
@endforeach
</body>
</html>
