<!DOCTYPE HTML>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	@php
	$currentPage = Route::current()->uri;
	($currentPage === '/') ? $currentPage = 'Code' : $currentPage;
	@endphp
	<title> {{ strtoupper($currentPage) }} | KDCode </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{--
	<link rel="manifest" href="site.webmanifest"> --}}
	<link rel="shortcut icon" type="image/x-icon" href="/raw_assets/onlineedu/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="/raw_assets/onlineedu/assets/css/all.css">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/new.css">
	<style>
	</style>
	<script defer>

	</script>
	@yield('custom_styles')
	@yield('header_scripts')


</head>

<body>
	<!--? Preloader Start -->
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="preloader-circle"></div>
				<div class="preloader-img pere-text">
					<img src="/raw_assets/onlineedu/assets/img/logo/loder.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader Start -->
	<header>
		<!-- Header Start -->
		<div class="header-area">
			<div class="main-header ">
				<div class="header-top d-none d-lg-block">
					<!-- Left Social -->
					<div class="header-left-social">
						<ul class="header-social">
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li> <a href="#"><i class="fab fa-whatsapp" style="color: red;"></i></a></li>
						</ul>
					</div>
					<div class="container">
						<div class="col-xl-12">
							<div class="row d-flex justify-content-between align-items-center">
								<div class="header-info-left">
									<ul>
										<li style="margin-right: 15px;">
											<a href="#"><i class="fa fa-envelope" style="color: blue;"></i></a>support@kdtech.com
										</li>
										<li>
											<i class="fal fa-phone-alt"></i>
											<a href="#"><i class="fa fa-mobile-alt" style="color: blue;"></i></a>+234
											704 5063 380
										</li>
										<li> <a href="#"><i class="fab fa-whatsapp" style="color: blue;"></i></a>+234
											704 5063 380
										</li>
									</ul>
								</div>
								<div class="header-info-right">
									<ul>
										@guest
										<li><a href="{{ route('login') }}"><i class="ti-user"></i>Login</a></li>
										<li><a href="{{ route('register') }}"><i class="ti-lock"></i>Register</a></li>
										@else
										<li>
											<form method="POST" action="{{ route('logout') }}" name='logout_form_pc' 
											onsubmit="__submit('logout_btn_pc')">
												@csrf
												<i class="ti-user"></i>
												<button type="submit" class='generic-btn' name='logout_btn_pc' >
														Logout
												</button>
											</form>
										</li>
										@endguest
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom header-sticky">
					<!-- Logo -->
					<div class="logo d-none d-lg-block" style="background-color: transparent;">
						<a href="/">
							<img alt="site01logo" class="sitelogo_sm_header" src=@env('local'){!! '"/storage/logo/kaydeeLogo.jpg"' !!}
								@endenv @production{!! '"/raw_assets/onlineedu/assets/img/logo/kaydeeLogo.jpg"' !!}@endproduction />
						</a>
					</div>
					<div class="container">
						<div class="menu-wrapper">
							<!-- Logo -->
							<div class="logo logo2 d-block d-lg-none">
								<a href="/">
									<img alt="sitelogo" class="sitelogo_sm_header_v2"
										src=@env('local'){!! '"/storage/logo/kaydeeLogo.jpg"' !!} @endenv
										@production{!! '"/raw_assets/onlineedu/assets/img/logo/kaydeeLogo.jpg"' !!}@endproduction /></a>
							</div>
							<!-- Main-menu -->
							<div class="main-menu d-none d-lg-block">
								<nav>
									<ul id="navigation">
										<li class="text-center d-lg-none">
											@guest
											<div class="d-flex justify-content-center">
												<a class="btn btn-pry px-5 py-3 c-white" href="{{ route('login') }}">Login</a>
												<a class="btn btn-pry px-5 py-3 c-white" href="{{ route('register') }}">Register</a>
											</div>
											@endguest

										</li>
										<li><a href="/">Home</a></li>
										<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
										<li><a href="{{ route('blog') }}">Blog</a>
											<ul class="submenu">
												<li><a href="{{ route('blog') }}">Blog</a></li>
												<li><a href="{{ route('blog_details') }}">Blog Details</a></li>
												<li><a href="{{ route('elements') }}">Element</a></li>
											</ul>
										</li>

										<li><a href="{{ route('about') }}">More</a>
											<ul class="submenu">
												<li><a href="{{ route('about') }}">About</a></li>
												<li><a href="{{ route('courses') }}">Courses</a></li>
												<li><a href="{{ route('instructors') }}">Instructors</a></li>

											</ul>
										</li>
										<li><a href="{{ route('contact') }}">Contact</a></li>

										<li><a href="{{ route('admin.student.dashboard') }}">student</a></li>
										
										<li><a href="{{ route('admin.instructor.dashboard') }}">instructor</a></li>
										
										<li class="text-center d-lg-none">@auth
											<div class="d-flex justify-content-center">
												<form method="POST" id="form1" action="{{ route('logout') }}" name='logout_form' onsubmit="__submit('logout_btn_sm')">
													@csrf
													<button type="submit" class='px-5 genric-btn btn-danger' 
													id="logout_btn_sm" name="logout_btn_sm"> Logout </button>
												</form>

											</div>
											@endauth
										</li>
									</ul>
								</nav>
							</div>
							<!-- Header-btn -->
							<div class="header-search d-none d-lg-block">
								<form action="#" class="form-box f-right ">
									<input type="text" name="Search" placeholder="Search Courses">
									<div class="search-icon">
										<i class="fas fa-search special-tag"></i>
									</div>
								</form>
							</div>
						</div>
						<!-- Mobile Menu -->
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>