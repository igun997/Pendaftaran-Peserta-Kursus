<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{url('/')}}/assets/stock/logo-s5it.png">
	<!-- Author Meta -->
	<meta name="author" content="Indra Gunanda">
	<!-- Meta Description -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>{{ $title }}</title>

	<link href="//fonts.googleapis.com/css?family=Poppins:300,500,600,900" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{url('/')}}/assets/bbs/css/linearicons.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/bbs/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/bbs/css/nice-select.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/bbs/css/magnific-popup.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/bbs/css/bootstrap.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/bbs/css/main.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @foreach ($css as $val)
    <script src="{{ $val }}"></script>
    @endforeach
	</head>
	<body>
    <script type="text/javascript">
      const base_url = '{{ url('/') }}/';
    </script>
		<div class="main-wrapper-first relative">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a style="color:white;font-weight:bold;font-size:16px;font-family:'Comic Sans MS',cursive, sans-serif;" href="{{ url('/')}}"><img src="{{ url('/')}}/assets/stock/logo-s5it.png" style="width:auto;height:40px; " alt="">IT Consultant</a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="{{url('/')}}">Beranda</a>
									<a href="{{url('/daftar')}}">Daftar</a>
									<a href="{{url('/masuk')}}">Masuk</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
      <div class="banner-area">
        <div class="container">
          <div class="row justify-content-center height align-items-center">
            <div class="col-lg-8">
              <div class="banner-content text-center">
                <h1 class="text-uppercase">Are you <br> Dreamer ? </h1>
                <a href="{{ url('/daftar') }}" class="primary-btn d-inline-flex align-items-center"><span>Yes I'am</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
