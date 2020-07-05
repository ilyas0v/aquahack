<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aquametrics</title>
  <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet"> 
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="{{ asset('landing/plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/plugins/meanmenu/meanmenu.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/plugins/slick-1.8.1/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/plugins/fancybox-master/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/plugins/aos-animation/aos.css') }}">
  <!-- fonts -->
  <link rel="stylesheet" href="{{ asset('landing/fonts/ep-icon-fonts/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/fonts/fontawesome-5/css/all.min.css') }}">
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('landing/css/settings.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
</head>

<body >
<div class="site-wrapper">
<!-- Header Starts -->
  <header class="site-header position-relative">
        <div class="container">
            <div class="row justify-content-center align-items-center position-relative">
                <div class="col-sm-3 col-6 col-lg-2 col-xl-2 order-lg-1">
                  <!-- Brand Logo -->
                    <div class="brand-logo">
                        <a href=""><img src="/aqua/aquametrics-logo-horizontal.png" alt="" width="140" /></a>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-2 col-xl-2 d-none d-sm-block order-lg-3">
                    <div class="header-btns justify-content-end">
                        <a href="{{ route('login') }}" class="btn btn--orange btn--hover-shine" style="background:rgb(0, 100, 255);">Daxil ol</a>
                    </div>
                </div>
                <!-- Menu Block -->
                <div class="col-sm-1 col-6 col-lg-6 col-xl-6 offset-lg-2  position-static order-lg-2 invisible">
                    <div class="main-navigation">
                        <ul class="main-menu">
                            <li class="menu-item has-dropdown">
                                <a href="#features">Free Landing Pages</a>
                                    <ul class="menu-dropdown">
                                        <li class="single-item">
                                            <a href="">
                                            <h3>Mobile Application</h3> 
                                            <p>Best for Mobile App Presentation</p>
                                            </a>
                                        </li>
                                        <li class="single-item">
                                            <a href="">
                                                <h3>Web Application</h3>
                                                <p>Best for Mobile App Presentation</p>
                                            </a> 
                                        </li>
                                        <li class="single-item">
                                            <a href="">
                                                <h3>SaaS Application</h3>
                                            <p>Best for Mobile App Presentation</p>
                                        </a> 
                                        </li>
                                        <li class="single-item">
                                            <a href="">
                                                    <h3> SaaS Subscription</h3>
                                                <p>Best for Mobile App Presentation</p>
                                            </a> 
                                        </li>
                                    </ul>
                                </li>
                            <li class="menu-item "><a href="#features">Course topics</a></li>
                    
                            <li class="menu-item"><a href="#">Student stories</a></li>
                            </ul>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
        <div class="shape-holder header-shape" data-aos="fade-down" data-aos-once="true"><img src="/landing/image/header-shape.svg" alt=""></div>
  </header>

<!-- Hero-Area -->
<div class="hero-area position-relative">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-7 col-12">
        <div class="hero-content">
          <h2>Optimal suvarma sisteminin təyin olunması</h2>
          <p class="mt-3">Proqram, bitki növünə və əkin sahəsinə əsasən optimal suvarmanı və cari tariflər üzrə sərf olunacaq xərci təyin edir.</p>
          <div class="hero-btn"><a style="background:rgb(0, 100, 255);" href="{{ route('login') }}" class="btn btn-primary">İndi başla</a></div>
        </div>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-5 col-12">
        <div class="hero-media">
          <img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Aqua_Spout.jpg" alt="">
          <a class="video-play-trigger" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class="icon icon-triangle-right-17-2"></i></a>
          <div class="media-shape animate-spin"><img src="/landing/image/media-shape.png" alt=""></div>
        </div>
      </div>
    </div>
  </div>
  <div class="shape-holder hero-shape" data-aos="fade-right" data-aos-once="true"></div>
</div>


<div class="row" style="height:50px;border-top:1px solid lightblue;display:flex;justify-content:center;align-items:center;">
    <div class="col-12 text-center">
        &copy; Aquametrics {{ date('Y') }}
    </div>
</div>

</div>
  <!-- Vendor JS-->
  <script src="{{ asset('landing/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('landing/plugins/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('landing/plugins/bootstrap-4.3.1/js/bootstrap.bundle.js') }}"></script>

  <!-- Plugins JS -->
  <script src="{{ asset('landing/plugins/meanmenu/jquery.meanmenu.js') }}"></script>
  <script src="{{ asset('landing/plugins/slick-1.8.1/slick.min.js') }}"></script>
  <script src="{{ asset('landing/plugins/fancybox-master/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('landing/plugins/aos-animation/aos.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('landing/js/active.js') }}"></script>
</body>

</html>
