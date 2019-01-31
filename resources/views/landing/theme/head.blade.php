<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{url('/')}}/assets/stock/logo-s5it.png">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Author Meta -->
	<meta name="author" content="Indra Gunanda">
	<!-- Meta Description -->
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

			<!-- Start Feature Area -->
			<section class="featured-area">
				<div class="container">
					<div class="row">
            <div class="col-md-12">
              <h4 align="center">Apa Yang Telah Kami Kerjakan ? </h4>
            </div>
						<div class="col-md-6">
							<div class="single-feature d-flex flex-wrap justify-content-between">
								<div class="icon">
									<img style="width:auto;height:90px" src="//www.frasindo.com/wp-content/uploads/2017/05/FRASINDO200X200.png" alt="">
								</div>
								<div class="desc">
									<h4>Frasindo ICO Platform</h4>
									<p>Pembuatan Aplikasi ICO untuk <a href='https://www.frasindo.com'>PT Frasindo Lima Mandiri</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-feature d-flex flex-wrap justify-content-between">
								<div class="icon">
									<img style="width:auto;height:30px" src="//coinvit.com/logo/logocoinvit.png" alt="">
								</div>
								<div class="desc">
									<h4>Decentralize Exchange Market Coinvit</h4>
									<p>Pembuatan Decentralize Exchange Market atau DEX untuk <a href='https://coinvit.com'>Coinvit.com</a></p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
