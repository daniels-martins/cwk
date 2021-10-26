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
	<link href="{{ mix('css/app.css') }}" rel="stylesheet" info="eye" />
	<link rel="stylesheet" href="/css/new.css">
	<style>
	</style>

	{{--
	<!-- Js here -->
	<script defer src="{{ mix('js/app.js') }}"></script> --}}
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
			<!-- All popup modals for the header goes here -->
			<!-- Modal 1: LogoutButton mOdal -->
			<div class="logout_modal">
				{{-- here goes the logout modal --}}
				<div class="modal" class="z-10" data-animate-in='animate__zoomInUp' tabindex="-1" role="dialog" id='bigModal'>
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title text-white font-bold">Are you sure you want to logout?</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true" class="text-gray-100 font-thin text-sm">x</span>
								</button>
							</div>
							<div class="modal-body">
								<p class="text-white text-sm word-sp-">If you logout bad things might happen. I'm Just kidding :) </p>
							</div>
							<div class="modal-footer">
								<button type="submit" name="logout_btn_pc" form="logout_form_pc" class="px-3 py-2 bg-gray-700 text-gray-50 rounded-md hover:text-red-600">Logout Now</button> &nbsp;&nbsp;&nbsp;
								<button type="button" class="px-2 py-1 text-gray-100 rounded-md hover:text-purple-300" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- @end/All popup modals for the header goes here -->
			<div class="main-header ">
				<div class="header-top d-none d-lg-block">
					<!-- Left Social -->
					<div class="header-left-social">
						<ul class="header-social">
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook"></i></a></li>
							<li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-linkedin-in"></i></a></li>
							<li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
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
												onsubmit="__submit('logout_btn_pc')" id="logout_form_pc">
												@csrf
												{{-- new logout button using animation with a modal --}}
												<i class="ti-user"></i>
												<button type="button" class="generic-btn" data-toggle="modal" 
												name='logout_btn_pc__modal'
													data-target="#bigModal">Logout</button> |
												{{-- here goes the modal --}}
												<!-- modal is supposed to be here but it does not overlay when placed inside the header's (.main-header). Consequently, it is placed before the header's (.main-header) in the (.header-area). check the 'data-target' attribute for more details --> 
												&nbsp;&nbsp;&nbsp;
												<button type="submit" class='d-inline-block' name='logout_btn_pc' title="quick logout">
													<i class="ti-power-off text-lg font-bold antialiased text-red-500"></i>
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
										<li class="text-center d-lg-none">@auth
											<div class="d-flex justify-content-center">
												<form method="POST" id="form1" action="{{ route('logout') }}" name='logout_form'
													onsubmit="__submit('logout_btn_sm')">
													@csrf
													<button type="submit" class='px-5 genric-btn btn-danger' id="logout_btn_sm"
														name="logout_btn_sm"> Logout </button>
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