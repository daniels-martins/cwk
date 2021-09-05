<!DOCTYPE html>
<html lang="en">

<head>
    <title>AweSplash - Free HTML Splash Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet"> -->

    <!-- CSS -->
    <link href="/raw_assets/landing_css/main.css" rel="stylesheet">

    <!-- JS -->
    <script src="/raw_assets/landing_js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/raw_assets/landing_js/vendor/jquery-1.12.0.min.js"></script>

    {{-- loader script and css --}}
    <script src="/raw_assets/login/loader_js/loader.js"></script>
    <link href="/raw_assets/login/loader_css/loader.css" rel="stylesheet">
</head>

<body>
    @include('partials/loader')

    <div class="site" id="page">
        <a class="skip-link sr-only" href="#main">Skip to content</a>

        <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
        <section class="hero-section hero-section--image clearfix clip">
            <div class="hero-section__wrap">
                <div class="hero-section__option">
                    <img src="/raw_assets/landing_images/index.jpg" alt="Hero section image">
                </div>
                <!-- .hero-section__option -->

                <div class="container">
                    <div class="row">
                        <div class="offset-lg-2 col-lg-8">
                            <div class="title-01 title-01--11 text-center">
                                <h2 class="title__heading">
                                    <div class="kd_txt">
                                        <span>
                                            < </span>/> <br><span class="kd_txt2">with &lt; </span>
                                                Kay<span>Dee</span> /
                                                <span> &gt;</span>
                                        </span>
                                    </div>
                                    <span class="kd_txt1">We are</span>
                                    <strong class="hero-section__words">
                                        <span class="title__effect is-visible kd_txt">AweSome</span>
                                        <span class="title__effect kd_txt1">Creative</span>
                                        <span class="title__effect kd_txt2">Innovative</span>
                                    </strong>
                                </h2>
                                <div class="title__description">Delivering extraordinary creations from the very
                                    beginning of time!</div>

                                <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                <div class="title__action"><a href1="https://themewagon.com/themes/free-html5-splash-screen-template/" href="{{route('register')}}" class="btn btn-success txt-bold">Login / Regiser</a></div>
                            </div> <!-- .title-01 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- <div class="button-group">
        <a href="index-color.html" class="btn btn-outline-success button-sm">Color</a>
        <a href="index-slider.html" class="btn btn-outline-success button-sm">Slider</a>
        <a href="index-video.html" class="btn btn-outline-success button-sm">Video Background</a>
    </div> -->

    <!-- JS -->
    <script src="/raw_assets/landing_js/plugins/animate-headline.js"></script>
    <script src="/raw_assets/landing_js/main.js"></script>
</body>

</html>