{{-- @extends('layouts/app1.blade.php') --}}
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @php
    $currentPage = basename(url()->current());
    strstr($currentPage, 'localhost') ? $currentPage = 'Code' : null;
    @endphp
    <title> {{ strtoupper($currentPage) }} | Education </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/raw_assets/onlineedu/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="/raw_assets/onlineedu/assets/css/all.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/new.css">
    <style>
    </style>
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
                                        <li> 
                                            <a href="#"><i class="fa fa-envelope" style="color: blue;"></i></a>support@kdtech.com
                                        </li>
                                        <li>
                                            <i class="fal fa-phone-alt"></i>
                                            <!-- <i class="fas fa-phone"></i> -->
                                            <a href="#"><i class="fa fa-mobile-alt" style="color: blue;"></i></a>+234 704 5063 380
                                        </li>
                                        <li> <a href="#"><i class="fab fa-whatsapp" 
                                            style="color: blue;"></i></a>+234 704 5063 380
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
                                        <form method="POST" action="{{ route('logout') }}" class="">
                                            @csrf
                                            <i class="ti-user"></i>
                                            <button type="submit" class='generic-btn danger'>Logout</button>
                                                
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
                    <div class="logo d-none d-lg-block">
                        <a href="index.html"><img src="/raw_assets/onlineedu/assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.html"><img src="/raw_assets/onlineedu/assets/img/logo/logo.png"
                                        alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('courses') }}">Courses</a></li>
                                        <li><a href="{{ route('instructors') }}">Instructors</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                                <li><a href="{{ route('blog_details') }}">Blog Details</a></li>
                                                <li><a href="{{ route('elements') }}">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
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
    @yield('main')
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- footer Heading -->
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                                <div class="footer-tittle2">
                                    <h4>Stay Updated</h4>
                                </div>
                                <!-- Form -->
                                <div class="footer-form mb-50">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email"
                                                placeholder=" Email Address " class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm">
                                                    Subscribe Now
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="footer-tittle2">
                                    <h4>Let’s Get Social</h4>
                                </div>
                                <!-- Footer Social -->
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <ul>
                                        <li><a href="#">Online Learning</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('careers') }}">Careers</a></li>
                                        <li><a href="#">Press Center</a></li>
                                        {{-- this one below requires a post request to /instructors --}}
                                        <li><a href="{{ route('instructors') }}">Become an Instructor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Campus</h4>
                                    <ul>
                                        <li><a href="{{ route('our_plans') }}">Our Plans</a></li>
                                        <li><a href="{{ route('free_trial') }}">Free Trial</a></li>
                                        <li><a href="{{ route('coming_soon') }}">Academic Solutions</a></li>
                                        <li><a href="{{ route('coming_soon') }}">Business Solutions</a></li>
                                        <li><a href="{{ route('coming_soon') }}"> Government Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Study</h4>
                                    <ul>
                                        <li><a href="{{ route('todo',['todo'=>
                                       ' admissions__policy']) }}">Admissions Policy</a></li>
                                        <li><a href="{{ route('todo',['todo'=>
                                       ' geting_started']) }}">Getting Started</a></li>
                                        <li><a href="{{ route('todo',['todo'=>
                                       ' online_application']) }}">Online Application</a></li>
                                        <li><a href="#">Visa Information</a></li>
                                        <li><a href="{{ route('todo',['todo'=>
                                       ' tuition_calc']) }}">Tuition Calculator</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Spport</h4>
                                    <ul>
                                        <li><a href="{{ route('urgent_todo',['todo'=>
                                       ' support']) }}">Support</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <li><a href="/abandon">System Requirements</a></li>
                                        <li><a href="/abandon">Register Activation Key</a></li>
                                        <li><a href="{{ route('todo',['todo'=>
                                       ' feedback']) }}">Site feedback</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                    This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="/raw_assets/onlineedu/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="/raw_assets/onlineedu/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/popper.min.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="/raw_assets/onlineedu/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="/raw_assets/onlineedu/assets/js/owl.carousel.min.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="/raw_assets/onlineedu/assets/js/wow.min.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/animated.headline.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="/raw_assets/onlineedu/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="/raw_assets/onlineedu/assets/js/jquery.nice-select.min.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="/raw_assets/onlineedu/assets/js/jquery.counterup.min.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/waypoints.min.js"></script>

    <!-- contact js -->
    <script src="/raw_assets/onlineedu/assets/js/contact.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/jquery.form.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/jquery.validate.min.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/mail-script.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="/raw_assets/onlineedu/assets/js/plugins.js"></script>
    <script src="/raw_assets/onlineedu/assets/js/main.js"></script>

</body>

</html>