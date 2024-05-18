<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | Pirotti Group</title>
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
    <!-- back to top end -->
    @include('navbar')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- slider area start -->
                <!-- <div class="tp-slider-area p-relative">
            <div class="tp-slider-wrapper">
              <div
                class="tp-slider-height p-relative z-index"
                data-background="assets/img/slider/slider-1-1.jpg"
              >
                <div class="container">
                  <div class="tp-slider-3-wrap p-relative">
                    <div class="row align-items-center">
                      <div class="col-xl-12">
                        <div class="tp-hero-wrap d-flex text-center">
                          <h1
                            class="tp-section-title8 mt-60 mb-60 text-white tp-split-text tp-split-in-right"
                          >
                            #WePirotti
                          </h1>
                          <div class="slider-imgz">
                            <img src="assets/img/about/shape-2-2.png" alt="" />
                          </div>
                        </div>
                        <div class="tp-slider-3-content">
                          <p class="mb-40"></p>
                          <a class="" href="#">
                            <span></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
                <!-- slider area end -->
                <!-- slider area start -->
                @include('components/slider')

                <!-- slider area end -->
                <!-- funfact area start -->
                <div class="tp-funfact-area tp-funfact-height black-bg fix p-relative">
                    <div class="tp-feature-shape-1">
                        <img src="{{ asset('img/funfact/bg3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="col-xl-4 col-lg-4 order-0 order-lg-1 mt-120">
                            <div class="tp-funfact-title-box">
                                <h3 class="tp-section-title7 since tp-split-text tp-split-in-right">
                                    SINCE
                                    <br>
                                    <div class="mt-30 twenty">2011</div>
                                </h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 order-0 order-lg-1">
                            <div class="tp-service-2-title-box mt-30 text-center">
                                <iframe width="600" height="600" src="https://www.youtube.com/embed/r5I6GyRMT8o?si=TzBe4V-S7LWgwhdb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 order-0 mt-120 pb-70 funfact-imgz">
                                <img src="{{ asset('img/funfact/shape-3-31.png') }}" alt="">
                            </div>
                            <div class="col-xl-4 col-lg-4 order-1 order-lg-0">
                                <div class="tp-funfact-item-box d-flex justify-content-between mb-85">
                                    <div class="tp-funfact-item p-relative">
                                        <h6 class="tp-funfact-number">
                                            <i class="purecounter" data-purecounter-duration="1" data-purecounter-end="47">0
                                            </i>
                                        </h6>
                                        <span>Finished Projects</span>
                                        <div class="tp-funfact-icon"></div>
                                    </div>
                                    <div class="tp-funfact-item p-relative">
                                        <h6 class="tp-funfact-number">
                                            <i class="purecounter" data-purecounter-duration="1" data-purecounter-end="168">0
                                            </i>
                                        </h6>
                                        <span>Happy Customers</span>
                                        <div class="tp-funfact-icon"></div>
                                    </div>
                                    <div class="tp-funfact-item p-relative">
                                        <h6 class="tp-funfact-number">
                                            <i class="purecounter" data-purecounter-duration="1" data-purecounter-end="1022">0
                                            </i>
                                        </h6>
                                        <span>Working Hours</span>
                                        <div class="tp-funfact-icon"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- funfact area end -->

                <!-- About area -->
                <div class="tp-about-5-area tp-about-5-style grey-bg p-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="tp-about-content mt-60">
                                    <div class="tp-about-title-box mb-20">
                                        <h5 class="tp-section-title5 tp-split-text tp-split-in-right">
                                            PIROTTI
                                        </h5>
                                    </div>
                                    <div class="tp-about-text mb-25">
                                        <p>
                                            Incorporated in 2011, PIROTTI GROUP is a private limited
                                            liability company based in Nigeria. We boast of
                                            creative, dynamic, and seasoned professionals with
                                            varied experience in Architectural Design, Building
                                            Construction, and Real Estate industry. We are a partner
                                            to leading companies in Nigeria and overseas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About area end -->
                <!-- Vision area -->
                <div class="tp-about-5-area tp-about-5-style grey-bg p-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="tp-about-content mt-40">
                                    <div class="tp-about-title-box mb-20">
                                        <h6 class="tp-section-title4 tp-split-text tp-split-in-right">
                                            VISION
                                        </h6>
                                        <div class="under-shape">
                                            <img src="{{ asset('img/feature/black-shape4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="tp-about-text mb-25">
                                        <p>
                                            To be synonymous with high quality real estate
                                            developments in Nigeria.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-about-5-area tp-about-5-style grey-bg p-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="tp-about-content mt-40">
                                    <div class="tp-about-title-box mb-20">
                                        <h6 class="tp-section-title4 tp-split-text tp-split-in-right">
                                            MISSION
                                        </h6>
                                        <div class="under-shape">
                                            <img src="assets/img/feature/black-shape4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="tp-about-text mb-25">
                                        <p>
                                            To provide high quality real estate developments by
                                            constantly improving our capacity and processes through
                                            innovation and the pursuit of excellence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-about-5-area tp-about-5-style grey-bg p-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="tp-about-content mt-40">
                                    <div class="tp-about-title-box mb-20">
                                        <h6 class="tp-section-title4 tp-split-text tp-split-in-right">
                                            VALUE PROPOSITION
                                        </h6>
                                        <div class="under-shape">
                                            <img src="assets/img/feature/black-shape4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="tp-about-text mb-85">
                                        <p>
                                            Building communities in high quality environments with
                                            guaranteed ROI on your properties
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vision area end -->
                <!-- What we do area start -->
                <div class="tp-about-5-area tp-about-5-style grey-bg p-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 pb-40">
                                <div class="tp-about-content">
                                    <div class="tp-about-title-box">
                                        <h6 class="tp-section-title4 tp-split-text tp-split-in-right">
                                            WHAT WE DO
                                        </h6>
                                        <div class="under-shape">
                                            <img src="assets/img/feature/black-shape4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropboxx">
                                        <div class="tp-about-title-box">
                                            <div class="d-flex bar-top">
                                                <h3 class="tp-section-title5 tp-split-text tp-split-in-down">
                                                    ARCHITECTURE
                                                </h3>
                                                <div class="line-top mt-30"></div>
                                            </div>
                                            <p>We started as an architectural firm..</p>
                                            <span id="accordion3" onclick="toggleAccordion('accordion3')" class="plus-btn">
                                                <i class="pluz fa-solid fa-plus"></i>
                                                <i class="minus d-none fa-solid fa-minus"></i>
                                            </span>
                                        </div>
                                        <div class="accordion3">
                                            <ul class="drop-imgz mt-30">
                                                <li class="img-li">
                                                    <img src="{{ asset('img/product/product-details-1.jpg') }}" alt="">
                                                </li>
                                                <li class="img-li">
                                                    <img src="{{ asset('img/product/product-details-2.jpg') }}" alt="">
                                                </li>
                                                <li class="img-li">
                                                    <img src="{{ asset('img/product/product-details-3.jpg') }}" alt="">
                                                </li>
                                                <li class="img-li">
                                                    <img src="{{ asset('img/product/product-details-4.jpg') }}" alt="">
                                                </li>
                                                <li class="img-li">
                                                    <img src="{{ asset('img/product/product-details-1.jpg') }}" alt="">
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="line-down mt-60"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 pb-40">
                                <div class="tp-about-content">
                                    <div class="dropboxx">
                                        <div class="tp-about-title-box">
                                            <div class="d-flex bar-top">
                                                <h3 class="tp-section-title5 tp-split-text tp-split-in-down">
                                                    CONSTRUCTION
                                                </h3>
                                                <div class="line-top mt-30"></div>
                                            </div>
                                            <p>...we then realized that most builders could not build our designs to our satisfaction, so we started building..</p>
                                            <span id="accordion2" onclick="toggleAccordion('accordion2')" class="plus-btn">
                                                <i class="pluz fa-solid fa-plus"></i>
                                                <i class="minus d-none fa-solid fa-minus"></i>
                                            </span>
                                        </div>
                                        <div class="accordion2">
                                            <ul class="drop-imgz mt-30">
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-2-1.jpg') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-2-2.jpg') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-2-3.jpg') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-2-4.jpg') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-2-1.jpg') }}" alt="">
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="line-down mt-60"></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 pb-40">
                                <div class="tp-about-content">
                                    <div class="dropboxx">
                                        <div class="tp-about-title-box">
                                            <div class="d-flex bar-top">
                                                <h3 class="tp-section-title5 tp-split-text tp-split-in-down">
                                                    REAL ESTATE
                                                </h3>
                                                <div class="line-top mt-30"></div>
                                            </div>
                                            <p>..and now, we’re building real estate, our way!</p>
                                            <span id="accordion1" onclick="toggleAccordion('accordion1')" class="plus-btn">
                                                <i class="pluz fa-solid fa-plus"></i>
                                                <i class="minus d-none fa-solid fa-minus"></i>
                                            </span>
                                        </div>
                                        <div class="accordion1">
                                            <ul class="drop-imgz mt-30">
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-3-1.jpg') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-3-2.jpg') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-3-3.jpg') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-3-4.jpg') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('img/product/product-details-3-1.jpg') }}" alt="">
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="line-down mt-60"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- what we do area end -->
                <!-- value area start -->
                <div class="tp-funfact-area tp-funfact-height black-bg fix p-relative">
                    <div class="container">
                        <div class="row pt-20">
                            <div class="col-xl-12">
                                <div class="tp-service-2-title-box text text-center mb-20">
                                    <span class="tp-section-subtitle tp-split-text tp-split-in-right"></span>
                                    <h3 class="tp-section-title text-white tp-split-text tp-split-in-right">
                                        OUR VALUES
                                    </h3>
                                    <div class="under-shape1">
                                        <img src="{{ asset('img/feature/black-shape5.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <div class="tp-service-2-item">
                                    <div class="tp-service-2-icon">
                                        <span>
                                            <i class="fa-light fa-award"></i>
                                        </span>
                                    </div>
                                    <h4 class="tp-service-2-title">
                                        <a href="#">INTEGRITY</a>
                                    </h4>
                                    <div class="tp-service-2-content">
                                        <div class="tp-service-2-text">
                                            <p>
                                                We understand that for any business to survive in a
                                                highly competitive Global Village we must do things
                                                right and do them well. We are in constant pursuit of
                                                new avenues of enhancing our services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                <div class="tp-service-2-item">
                                    <div class="tp-service-2-icon">
                                        <span>
                                            <i class="fa-regular fa-lightbulb"></i>
                                        </span>
                                    </div>
                                    <div class="tp-service-2-content">
                                        <h4 class="tp-service-2-title">
                                            <a href="#">INNOVATION</a>
                                        </h4>
                                        <div class="tp-service-2-text">
                                            <p>
                                                Our team of professionals believes in combining
                                                innovative approach with cutting edge technology to
                                                break grounds in the fields of design. We don't
                                                imitate, we innovate.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                <div class="tp-service-2-item">
                                    <div class="tp-service-2-icon">
                                        <span>
                                            <i class="fa-regular fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="tp-service-2-content">
                                        <h4 class="tp-service-2-title">
                                            <a href="#">EXCELLENCE</a>
                                        </h4>
                                        <div class="tp-service-2-text">
                                            <p>
                                                At Pirotti, we believe that in order to excel, we must
                                                watch our word with our action and our action with our
                                                words. We uphold ethical and regulatory requirements.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- value area end -->
                <!-- Subsidaries area start -->
                <div class="tp-funfact-area1 tp-funfact-style-2 tp-funfact-height grey-bg fix p-relative">
                    <div class="container">
                        <div class="row fact-store align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-5">
                                <div class="tp-about-title-box">
                                    <h6 class="tp-section-title4 tp-split-text tp-split-in-right">
                                        SUBSIDARIES
                                    </h6>
                                    <div class="under-shape">
                                        <img src="{{ asset('img/feature/black-shape4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7">
                                <div class="tp-funfact-wrap d-flex justify-content-between">
                                    <div class="tp-funfact-2-item company-div text-center">
                                        <a>
                                            <img src="{{ asset('img/icon/Pirotti projectsnew.png') }}" alt="">
                                        </a>
                                        <div class="hoverdowns-two two animates fadeUpp">
                                            <a class="" href="#">ARCHITECTURE</a>
                                            <a class="" href="#">CONSTRUCTION</a>
                                            <a class="" href="#">REAL ESTATE DEVELOPMENT</a>
                                        </div>
                                    </div>
                                    <div class="tp-funfact-2-item company-div text-center">
                                        <a href="#">
                                            <img src="{{ asset('img/icon/Pirotti propertiesnew.png') }}" alt="">
                                        </a>
                                        <div class="hoverdowns-two two animates fadeUpp">
                                            <a class="" href="#">SALES</a>
                                            <a class="" href="#">FACILITY MANAGEMENT</a>
                                            <a class="" href="#">PROPERTY MANAGEMENT</a>
                                        </div>
                                    </div>
                                    <div class="tp-funfact-2-item company-div text-center">
                                        <a href="#">
                                            <img src="{{ asset('img/icon/Pirotti Premium grey.png') }}" alt="">
                                        </a>
                                        <div class="hoverdowns-two two animates fadeUpp">
                                            <a class="" href="#">ADVISORY</a>
                                            <a class="" href="#">INVESTMENTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Subsidaries area end -->
                <div class="tp-slider-2-area tp-slider-2-height tp-slider-2-bg fix grey-bg p-relative">
                    <div class="container">
                        <div class="tp-slider-2-wrap p-relative">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="tp-slider-2-content">
                                        <div class="tp-about-title-box">
                                            <h6 class="tp-section-title4 tp-split-text tp-split-in-right">
                                                FEATURED
                                            </h6>
                                            <div class="under-shape">
                                                <img src="{{ asset('img/feature/black-shape4.png') }}" alt="">
                                            </div>
                                        </div>
                                        <a class="tp-btn-black theme-bg mt-30 mb-20" href="blog-classic.html">
                                            <span>See More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <div class="tp-slider-2-wrapper p-relative">
                                        <div class="swiper-container tp-slider-2-active">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tp-slider-2-thumb">
                                                        <img src="{{ asset('img/slider/slider-4-1.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tp-slider-2-thumb">
                                                        <img src="{{ asset('img/slider/slider-4-3.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('footer')

            </main>
        </div>
    </div>
    <!-- JS here -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->

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
    <!-- <script src="{{ asset('js/nav.js') }}"></script> -->
    <script src="{{ asset('js/hide.js') }}"></script>
    <!-- Bootstrap JS (optional, but required for dropdowns and toggling) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
