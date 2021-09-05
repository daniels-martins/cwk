<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>{{ strtoupper(basename(url()->current())) }}</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <meta name="keywords" content="Flat lay login form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <!-- //Meta tag Keywords -->

  <!--/Style-CSS -->
  <link rel="stylesheet" href="/raw_assets/login/login_css/style.css" type="text/css" media="all" />

  <!-- <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script> -->
  
  @yield('styles')
  @yield('scripts')
</head>

<body>
@yield('loader')

  <!-- form section start -->
  <section class="w3l-workinghny-form">
    <!-- /form -->
    <div class="workinghny-form-grid">
      <div class="wrapper">
        <div class="logo">
          <!-- <h1><a class="brand-logo" href="index.html">coyLogo</a></h1> -->
          <!-- if logo is image enable this    -->
          <a class="brand-logo" href="/">
            <img class="coy_logo" src="/raw_assets/login/login_img/logo.jpg" alt="Your logo" title="Your logo" />
          </a>
        </div>
        <div class="workinghny-block-grid">
          <div class="form-right-inf">
            <!-- <h2>Login </h2> -->
            <!-- <div class="social-media mt-3">
              <a href="#facebook" class="fb"><span class="fab fa-facebook" aria-hidden="true"></span> Login with facebok</a>
                            <a href="#twitter" class="tw"><span class="fab fa-twitter" aria-hidden="true"></span> Login with twitter</a>
            </div> -->
            @yield('form')
          </div>
        </div>
      </div>
    </div>
    <!-- //form -->
    <!-- copyright-->
    <div class="copyright text-center">
      <div class="wrapper">
        <p class="copy-footer-29">© 2021 CodeWithKaydee | Designed by <a href="https://w3layouts.com">DM</a></p>
      </div>
    </div>
    <!-- //copyright-->
  </section>
  <!-- //form section start -->
</body>

</html>