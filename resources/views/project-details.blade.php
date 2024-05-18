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
                <!-- Projects Details area start -->
                <!-- <div class="">
            <div class="slideshow-container">
              <div class="slide-list">
                <div class="slidez">
                  <img src="assets/img/slider/slider-5-1.jpg" alt="" />
                </div>
                <div class="slidez">
                  <img src="assets/img/slider/slider-5-2.jpg" alt="" />
                </div>
                <div class="slidez">
                  <img src="assets/img/slider/slider-5-3.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="mybtns">
              <a href="#" class="prevv" onclick="prevSlide()"><i class="fa-solid fa-arrow-left"></i></a>
              <a href="#" class="nexxt" onclick="nextSlide()"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div> -->

                <div class="slider-wrap">
                    <div class="slider-container">
                        <div class="slider">
                            <img src="{{ asset('img/slider/slider-5-1.jpg') }}" alt="Image 1" class="slide" />
                            <img src="{{ asset('img/slider/slider-5-2.jpg') }}" alt="Image 2" class="slide" />
                            <img src="{{ asset('img/slider/slider-5-3.jpg') }}" alt="Image 3" class="slide" />

                            <!-- Add more slides as needed -->
                        </div>
                    </div>

                    <div class="slider-nav">
                        <div class="prev" onclick="prevSlide()"><i class="fa-solid fa-arrow-left-long"></i></div>
                        <div class="next" onclick="nextSlide()"><i class="fa-solid fa-arrow-right-long"></i></div>
                    </div>
                </div>

                <!-- Projects Details area end -->

                <div class="tp-about-5-area tp-about-5-style p-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="tp-about-content mt-60">
                                    <div class="tp-about-title-box mb-20">
                                        <h5 class="tp-section-title6 tp-split-text tp-split-in-right">
                                            THE PALMS
                                        </h5>
                                    </div>
                                    <div class="tp-about-text mb-25">
                                        <p>
                                            Pirotti Projects is proposing to you a unique investment
                                            opportunity at The Palms Estate. With guaranteed value
                                            for investment, The Palms Estate is a vehicle conceived
                                            and developed by Pirotti Projects to offer you a chance
                                            to own a home in a palm garden, in one of Abuja’s most
                                            accessible locations: Dawaki District. There is a
                                            Shopping Center at the center of the estate. The
                                            property has Constant Water supply backed by borehole
                                            and Constant Power supply, with an option of Alternative
                                            Renewable Energy Sources. The Landscaping is Exquisite,
                                            with exotic plants to make you feel like you are on a
                                            vacation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- youtube area start -->
                <div class="tp-service-2-area tp-service-style-3 grey-bg tp-service-style-5 pt-140 pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="tp-service-2-title-box text-center mb-60">
                                    <iframe width="1200" height="700" src="https://www.youtube.com/embed/r5I6GyRMT8o?si=TzBe4V-S7LWgwhdb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- youtube area end -->

                <!-- service area start -->
                <div class="tp-service-2-area tp-service-style-3 tp-service-style-5 pt-140 pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="tp-service-2-title-box text-center mb-20">
                                    <span class="tp-section-subtitle tp-split-text tp-split-in-right"></span>
                                    <h3 class="tp-section-title tp-split-text tp-split-in-right">
                                        House Details
                                    </h3>
                                </div>
                                <div class="tp-service-2-title-box text-center mb-60">
                                    <span class="tp-section-subtitle tp-split-text tp-split-in-right"></span>
                                    <h3 class="tp-section-title tp-split-text tp-split-in-right">
                                        Terraces
                                    </h3>
                                </div>
                                <div class="tp-about-text mb-25">
                                    <p>
                                        – 5 Bedroom all en suite <br />
                                        – Parking for 3 cars<br />
                                        – Sizable lounge and dining<br />
                                        – Sizable kitchen and store <br />– Ante room and
                                        visitor’s toilet<br />
                                        – World class finishes, fixtures and fittings<br />
                                        – Family lounge<br />
                                        – Private backyard<br />
                                        – Power room for alternative energy equipment (optional
                                        extra)<br />
                                        – 300sqm Total Area<br />
                                    </p>
                                </div>
                                <div class="tp-service-2-title-box text-center mb-60">
                                    <span class="tp-section-subtitle tp-split-text tp-split-in-right"></span>
                                    <h3 class="tp-section-title tp-split-text tp-split-in-right">
                                        Terrapartments
                                    </h3>
                                </div>
                                <div class="tp-about-text mb-25">
                                    <p>
                                        – 3 Bedroom all en suite <br />
                                        – Parking for 2 cars <br />
                                        – 155sqm total area <br />
                                        – Sizable lounge and dining <br />
                                        – Sizable kitchen and store <br />
                                        – Visitor’s toilet World class finishes, fixtures and
                                        fittings Service staircase
                                    </p>
                                </div>
                                <div class="tp-service-2-title-box text-center mb-60">
                                    <span class="tp-section-subtitle tp-split-text tp-split-in-right"></span>
                                    <h3 class="tp-section-title tp-split-text tp-split-in-right">
                                        Apartments
                                    </h3>
                                </div>
                                <div class="tp-about-text mb-25">
                                    <p>
                                        – 3 Bedroom all en suite <br> – Parking for 2 cars <br> – 155sqm
                                        total area<br> – Sizable lounge and dining <br> – Sizable kitchen
                                        and store <br> – Visitor’s toilet <br> – World class finishes,
                                        fixtures and fittings <br> – Service staircase
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- service area end -->
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
<script src="{{ asset('js/slide.js') }}"></script>
    
    <script src="{{ asset('js/hide.js') }}"></script>
    <!-- Bootstrap JS (optional, but required for dropdowns and toggling) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



</html>
