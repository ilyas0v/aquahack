<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aquametrics</title>
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
                        <a href="{{ route('login') }}" class="btn btn-link">Daxil ol</a>
                    </div>
                </div>
                <!-- Menu Block -->
                <div class="col-sm-1 col-6 col-lg-6 col-xl-6 offset-lg-2  position-static order-lg-2">
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
          <p>Proqram, bitki növünə və əkin sahəsinə əsasən optimal suvarmanı və cari tariflər üzrə sərf olunacaq xərci təyin edir.</p>
          <div class="hero-btn"><a href="{{ route('login') }}" class="btn btn--orange btn--hover-shine">İndi başla</a></div>
        </div>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-5 col-12">
        <div class="hero-media">
          <img src="/landing/image/hero.png" alt="">
          <a class="video-play-trigger" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class="icon icon-triangle-right-17-2"></i></a>
          <div class="media-shape animate-spin"><img src="/landing/image/media-shape.png" alt=""></div>
        </div>
      </div>
    </div>
  </div>
  <div class="shape-holder hero-shape" data-aos="fade-right" data-aos-once="true"><img src="/landing/image/hero-orange-shape.svg" alt=""></div>
</div>

<!-- Facts Section -->
<section class="facts-section">
  <div class="container">
    <div class="position-relative">
      <div class="fact-absolute">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 mb--35  text-center">
                <span class="fact-text">The #1 User Experience Design course in the market</span>
              </div>
            </div>
            <div class="row justify-content-center space-db--30">
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">12,382</span>
                            <p class="info">Happy Students</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="/landing/image/users-wm.png" alt="">
                          </div>
                        </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">103</span>
                            <p class="info">Lectures</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="/landing/image/fact-2.png" alt="">
                          </div>
                        </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">3,493</span>
                            <p class="info">5 Star Reviews</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="/landing/image/fact-3.png" alt="">
                          </div>
                        </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">21k</span>
                            <p class="info">Questions Solved</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="/landing/image/fact-4.png" alt="">
                          </div>
                        </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</section>


<!-- Course section -->
<section class="course-section position-relative">
  <div class="shape-holder">
    <img src="/landing/image/section-2-shape-bg.svg" alt="">
  </div>
  <div class="shape-holder" data-aos="zoom-in"  data-aos-once="true">
    <img src="/landing/image/section-2-shape.svg" alt="">
  </div>
  <div class="shape-holder course-shape-3" data-aos="zoom-in-left" data-aos-once="true">
    <img src="/landing/image/course-yelloow-svg.svg" alt="">
  </div>
  <div class="container pt-lg--85">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title section-black">
          <h2>What you’ll learn</h2>
          <p>We designed and tested prototypes that helped identify pain points in the account creation process. Together, we shaped the new standard.</p>
        </div>
      </div>
    </div>
    <div class="accordion course-accordion" id="accordionExample" >
      <div class="card course-card"  data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <div class="card-header" id="headingOne">
          <div class="row">
              <div class="col-xl-6 col-lg-7">
                <div class="acc-left-content d-flex">
                  <div class="acc-icon">
                    <img src="/landing/image/course-acc-icon.svg" alt="">
                  </div>
                  <div class="acc-head-contents">
                    <h3>Analyzing User Data</h3>
                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 offset-xl-2">
                <div class="acc-right-content d-flex">
                  <div class="course-length-badge">
                    <span>6 Video Classes</span>
                    <span>3.4hrs</span>
                  </div>
                  <button class="btn acc-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="icon icon-minimal-down"></i>
                  </button>
                </div>
              </div>
          </div>
          
        </div>
    
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
              <ul class="course-inline-list">
                <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
              </ul>
          </div>
        </div>
      </div>
      <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
        <div class="card-header" id="heading2">
          <div class="row">
              <div class="col-lg-6">
                <div class="acc-left-content d-flex">
                  <div class="acc-icon">
                    <img src="/landing/image/course-acc-icon.svg" alt="">
                  </div>
                  <div class="acc-head-contents">
                    <h3>User Persona</h3>
                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-2">
                <div class="acc-right-content d-flex">
                  <div class="course-length-badge">
                    <span>6 Video Classes</span>
                    <span>3.4hrs</span>
                  </div>
                  <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    <i class="icon icon-minimal-down"></i>
                  </button>
                </div>
              </div>
          </div>
          
        </div>
    
        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
          <div class="card-body">
              <ul class="course-inline-list">
                <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
              </ul>
          </div>
        </div>
      </div>
      <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
        <div class="card-header" id="heading3">
          <div class="row">
              <div class="col-lg-6">
                <div class="acc-left-content d-flex">
                  <div class="acc-icon">
                    <img src="/landing/image/course-acc-icon.svg" alt="">
                  </div>
                  <div class="acc-head-contents">
                    <h3>Prototyping</h3>
                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-2">
                <div class="acc-right-content d-flex">
                  <div class="course-length-badge">
                    <span>6 Video Classes</span>
                    <span>3.4hrs</span>
                  </div>
                  <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <i class="icon icon-minimal-down"></i>
                  </button>
                </div>
              </div>
          </div>
          
        </div>
    
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
          <div class="card-body">
              <ul class="course-inline-list">
                <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
              </ul>
          </div>
        </div>
      </div>
      <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
        <div class="card-header" id="heading4">
          <div class="row">
              <div class="col-lg-6">
                <div class="acc-left-content d-flex">
                  <div class="acc-icon">
                    <img src="/landing/image/course-acc-icon.svg" alt="">
                  </div>
                  <div class="acc-head-contents">
                    <h3>Storyboarding</h3> 
                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-2">
                <div class="acc-right-content d-flex">
                  <div class="course-length-badge">
                    <span>6 Video Classes</span>
                    <span>3.4hrs</span>
                  </div>
                  <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <i class="icon icon-minimal-down"></i>
                  </button>
                </div>
              </div>
          </div>
          
        </div>
    
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
          <div class="card-body">
              <ul class="course-inline-list">
                <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Aurthor Starts -->
<div class="aurthor-section">
  <div class="container">
    <div class="row  spacing-bottom mb--10">
      <div class=" col-lg-5 col-md-4" data-aos="zoom-in-right"  data-aos-once="true" data-aos-delay="55" data-aos-duration="1500">
        <div class="aurthor-image">
          <img src="/landing/image/aurthor.png" alt="">
        </div>
      </div>

      <div class="col-lg-6 offset-md-1 col-md-6" data-aos="zoom-in-left"  data-aos-once="true" data-aos-delay="55" data-aos-duration="1500">
        <div class="aurthor-content">
          <span class="account">@davidmyers</span>
          <h2>Hi, I am David, your course instructor.</h2>
          <p>Create custom landing pages with Shades that convert more visitors than any website, no coding required.</p>
        </div>
      </div>
    </div>
    <span class="section-devider"></span>
  </div>
</div>

<!-- Testimonial Starts -->
<section class="testimonial-section position-relative">
  <div class="container">
      <div class="row">
          <div class="col-lg-7 col-xl-6">
              <h2 class="">Don’t believe me. Listen what’s my students are</h2>
          </div>
      </div>
      <div class="testimonial-slider-wrapper">
          <div class="slider-btns"></div>
          <div class="testimonial-slider">
              <div class="single-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                  <div class="testimonial-card">
                      <div class="image">
                          <img src="/landing/image/t4-card-2.jpg" alt="">
                      </div>
                      <div class="content">
                          <h4>Annie Reyes</h4>
                          <span class="d-block">Founder of Crips</span>
                          <a class="video-play-trigger" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class="icon icon-triangle-right-17-2"></i></a>   
                      </div>
                  </div>
              </div>
              <div class="single-slide" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
                  <div class="testimonial-card">
                      <div class="image">
                          <img src="/landing/image/t4-card-3.jpg" alt="">
                      </div>
                      <div class="content">
                          <h4>Jay Fletcher</h4>
                          <span class="d-block">Marketing Head at Gigri Solution</span>
                          <a class="video-play-trigger" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class="icon icon-triangle-right-17-2"></i></a>   
                      </div>
                  </div>
              </div>
              <div class="single-slide"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
                  <div class="testimonial-card">
                      <div class="image">
                          <img src="/landing/image/t4-card-1.jpg" alt="">
                      </div>
                      <div class="content">
                          <h4>Arthur Keller</h4>
                          <span class="d-block">CTO at Drivin</span>
                          <a class="video-play-trigger" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class="icon icon-triangle-right-17-2"></i></a>   
                      </div>
                  </div>
              </div>
              <div class="single-slide"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
                  <div class="testimonial-card">
                      <div class="image">
                          <img src="/landing/image/t4-card-1.jpg" alt="">
                      </div>
                      <div class="content">
                          <h4>Annie Reyes</h4>
                          <span class="d-block">Founder of Crips</span>
                          <a class="video-play-trigger" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class="icon icon-triangle-right-17-2"></i></a>      
                      </div>
                  </div>
              </div>
          </div>
      
      </div>
  </div>
  <div class="shape-holder testimonial-shape" data-aos="zoom-in-left" data-aos-once="true"><img src="/landing/image/testimonial-shape.svg" alt=""></div>
</section>


<!-- FAQ Section -->
<section class="faq-section position-relative">
  <div class="container">
  <!-- faq accordionExample -->
  <div class="faq-accordion">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title"><h2>Frequently Asked Questions</h2></div>
  
        <div class="accordion faq-accordion space-db--10" id="accordionExample2">
          <div class="single-faq mb--10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <button class="faq-head" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">
              <h2>Will I get full access to the course after purchasing?</h2>
              <i class="icon icon-minimal-down"></i>
            </button>
        
            <div id="faq1" class="collapse show" aria-labelledby="faq-heading1" data-parent="#accordionExample2">
              <div class="faq-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>
          </div>
          <div class="single-faq mb--10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="200" data-aos-once="true">
                <button class="faq-head collapsed" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">
                  <h2>Do you give money back guarantee?</h2>
                  <i class="icon icon-minimal-down"></i>
                </button>
        
            <div id="faq2" class="collapse" aria-labelledby="faq-heading2" data-parent="#accordionExample2">
              <div class="faq-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
              
            </div>
          </div>
          <div class="single-faq mb--10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="400">
                <button class="faq-head collapsed" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">
                  <h2>How can I submit my questions after joining?</h2>
                  <i class="icon icon-minimal-down"></i>
                </button>
        
            <div id="faq3" class="collapse" aria-labelledby="faq-heading3" data-parent="#accordionExample2">
              <div class="faq-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
              
            </div>
          </div>
          <div class="single-faq mb--10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="600">
                <button class="faq-head collapsed" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4">
                  <h2>Do you offer a discount?</h2>
                  <i class="icon icon-minimal-down"></i>
                </button>
        
            <div id="faq4" class="collapse" aria-labelledby="faq-heading4" data-parent="#accordionExample2">
              <div class="faq-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="faq-guarantee">
    <div class="row">
      <div class="col-lg-5 col-md-7 offset-lg-1" data-aos="zoom-in-right"  data-aos-once="true" data-aos-delay="55" data-aos-duration="1500">
        <div class="content">
          <h2>Get <span class="text--primary fs-inherit">30 Days</span> Money Back Guarantee.</h2>
          <p>Create custom landing pages with Shades that convert more visitors than any website, no coding required.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-5 offset-lg-1" data-aos="zoom-in-left"  data-aos-once="true" data-aos-delay="55" data-aos-duration="1500">
        <div class="flex-all-center h-100">
          <img src="/landing/image/guarnatee.png" alt="">
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="shape-holder faq-shape" data-aos="zoom-in-right" data-aos-once="true"><img src="/landing/image/faq-shape.svg" alt=""></div>
</section>



<!-- Footer Section -->
<div class="footer-section position-relative">
  <div class="container margin-decrese">
      <div class="row justify-content-center">
          <div class="col-md-9 col-lg-8 col-xl-7" data-aos="flip-down" data-aos-delay="55" data-aos-duration="2000" data-aos-once="true">
            <div class="footer-content">
                <span class="title-small-text">Time to take action</span>
                <h2>Ready to learn UX Design from the expert?</h2>
                <div class="footer-btn"><a href="" class="btn btn--orange btn--hover-shine">Get Started</a></div>
            </div>
          </div>
        </div>
        <span class="section-devider mt--130"></span>
      <div class="row mt--70">
          <div class="col-lg-4 col-xl-4 col-sm-6 col-margin">
              <span class="ft-title-sm">Help menu</span>
              <div class="row">
                <div class="col-lg-5 col-4">
                    <ul class="footer-list">
                        <li><a href="">About</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">Works</a></li>
                        <li><a href="">Career</a></li>
                      </ul>
                </div>

                <div class="col-lg-7 col-8">
                    <ul class="footer-list">
                        <li><a href="">Contact</a></li>
                        <li><a href="">Help &amp; Support</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms &amp; Conditions</a></li>
                      </ul>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-xl-3 col-sm-6 col-margin">
              <span class="ft-title-sm">Product</span>
              <ul class="footer-list">
                <li><a href="">Essential Landing Page</a></li>
                <li><a href="">Alpha Dashboard Pro</a></li>
                <li><a href="">Karnel Admin Dashboard</a></li>
                <li><a href="">Gray UI Kit</a></li>
              </ul>
          </div>
          <div class="col-lg-5 col-xl-5 col-margin">
            <div class="ft-newsletter-box">
                <span class="ft-title-sm">Subscribe to our newsletter</span>
                <p>Subscribe to get lastest offers, news and events announcements. No spam in your inbox.</p>
                <form action="">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your email address">
                    <button class="submit-btn"><i class="icon icon-tail-right"></i></button>
                  </div>
                </form>
            </div>
          </div>
        </div>
  </div>
  <div class="shape-holder footer-shape-1" data-aos="zoom-in-left" data-aos-once="true"><img src="/landing/image/cta-shape.svg" alt=""></div>
  <div class="shape-holder footer-shape-2" data-aos="zoom-in-right" data-aos-once="true"><img src="/landing/image/footer-shape.svg" alt=""></div>
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
