<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Palms | Pirotti Group</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}">
    <!-- CSS here -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/slick.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/catamaran" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- breadcrumb area start -->
                <!-- <div class="breadcrumb__pt">
               <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
                  data-background="assets/img/breadcurmb/breadcurmb.jpg">
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="breadcrumb__content z-index">
                              <div class="breadcrumb__section-title-box mb-20">
                                 <h3 class="breadcrumb__title tp-split-text tp-split-in-right">Projects Details</h3>
                              </div>
                              <div class="breadcrumb__list">
                                 <span><a href="index.html">Home</a></span>
                                 <span class="dvdr"><i class="fa-solid fa-angle-right"></i></span>
                                 <span>Projects Details</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
                <!-- breadcrumb area end -->

                <div class="slider-wrap">
                    <div class="slider-container2">
                        <div class="slider">
                            <img src="{{ asset('img/slider/slider-5-4.jpg') }}" alt="Image 1" class="slide" />
                            <img src="{{ asset('img/slider/slider-5-5.jpg') }}" alt="Image 2" class="slide" />
                            <img src="{{ asset('img/slider/slider-5-6.jpg') }}" alt="Image 3" class="slide" />

                            <!-- Add more slides as needed -->
                        </div>
                    </div>

                    <div class="slider-nav2">
                        <div class="mb-85">
                            <div class="tp-about-5-area tp-about-5-style p-relative">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="tp-about-content mt-40">
                                                <div class="tp-about-title-box mb-20">
                                                    <h6 class="tp-section-title4 tp-split-text tp-split-in-right">
                                                        THE EMPORIO
                                                    </h6>
                                                    <div class="under-shape">
                                                        <img src="{{ asset('img/feature/black-shape4.png') }}" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="tp-about-text mb-25">
                                                <p class="emporio-text">
                                                    PROJECT TYPE :Commercial; Shopping Mall
                                                    <br /><br />PLOT SIZE : 3,400 Square Metres
                                                    <br /><br />TOTAL NO. OF RETAIL UNITS: 60
                                                    <br /><br />
                                                    PROJECT PHASE : Construction <br /><br />
                                                    DEVELOPMENT VALUE : 1,285,000,000 NGN ($2,887,640)*
                                                    <br /><br />
                                                    * Dollar exchange rate: 1 USD = 445 NGN
                                                </p>
                                            </div>
                                            <div class="emporio-button align-items-center">
                                                <button>Download Brochure</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="prevs" onclick="prevSlide()"><i class="fa-solid fa-arrow-left-long"></i></div>
              <div class="nexts" onclick="nextSlide()"><i class="fa-solid fa-arrow-right-long"></i></div> -->
                    </div>
                </div>
            </main>
            @include('footer')

        </div>
    </div>

    <!-- JS here -->

    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/three.js') }}"></script>
    <script src="{{ asset('js/gsap.js') }}"></script>
    <script src="{{ asset('js/gsap-scroll-to-plugin.js') }}"></script>
    <script src="{{ asset('js/gsap-scroll-trigger.js') }}"></script>
    <script src="{{ asset('js/gsap-scroll-smoother.js') }}"></script>
    <script src="{{ asset('js/gsap-split-text.js') }}"></script>
    <script src="{{ asset('js/hover-effect.umd.js') }}"></script>
    <script src="{{ asset('js/vendor/waypoints.js') }}"></script>
    <!-- <script src="{{ asset('js/bootstrap-bundle.js') }}"></script> -->
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('js/jarallax.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.js') }}"></script>
    <script src="{{ asset('js/nice-select.js') }}"></script>
    <script src="{{ asset('js/purecounter.js') }}"></script>
    <script src="{{ asset('js/range-slider.js') }}"></script>
    <script src="{{ asset('js/jequery-knob.js') }}"></script>
    <script src="{{ asset('js/jquery-appear.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- <script src="{{ asset('js/slidethree.js') }}"></script> -->
    <script src="{{ asset('js/slidetwo.js') }}"></script>

    <script src="{{ asset('js/hide.js') }}"></script>
    <!-- Bootstrap JS (optional, but required for dropdowns and toggling) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from html.hixstudio.net/interno-prev/interno/project-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2024 17:09:29 GMT -->

</html>
