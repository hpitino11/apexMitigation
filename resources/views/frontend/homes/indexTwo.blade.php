@extends('frontend.layouts.app')
@section('title', 'Index Two')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerTwo')
    <!-- header area end -->

     
       
       



        <!--Start Main Slider Two-->
        <section class="main-slider main-slider-two">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-two__pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'>
                <div class="swiper-wrapper">
                    <!--Start Swiper Slide Single-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/img/slider/slider-v2-img1.jpg);">
                        </div>
                        <div class="main-slider-two__pattern"
                            style="background-image: url(assets/img/pattern/main-slider-v2-pattern.png);"></div>

                        <div class="main-slider-two__social-links">
                            <a href="#"><span class="icon-letter-v"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-dribbble"></span></a>
                            <a href="#"><span class="icon-facebook-1"></span></a>
                        </div>

                        <div class="container">
                            <div class="main-slider-two__single">
                                <div class="main-slider-two__content">
                                    <div class="big-title">
                                        <h2>Apex Mitigation</h2>
                                    </div>
                                    <h2>Architecture is <br>
                                        Inhabited Sculpture</h2>
                                    <div class="btn-box">
                                        <div class="btn-one">
                                            <a class="thm-btn" href="{{ route('contact') }}">
                                                <span class="txt">Discover More</span>
                                            </a>
                                        </div>
                                        <div class="btn-two">
                                            <a href="https://www.youtube.com/watch?v=pVE92TNDwUk" class="video-popup">
                                                <div class="main-slider-one__icon">
                                                    <i class="icon-play-button-1"></i>
                                                    <span>Watch Our Videos</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Swiper Slide Single-->

                    <!--Start Swiper Slide Single-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/img/slider/slider-v2-img1.jpg);">
                        </div>
                        <div class="main-slider-two__pattern"
                            style="background-image: url(assets/img/pattern/main-slider-v2-pattern.png);"></div>

                        <div class="main-slider-two__social-links">
                            <a href="#"><span class="icon-letter-v"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-dribbble"></span></a>
                            <a href="#"><span class="icon-facebook-1"></span></a>
                        </div>

                        <div class="container">
                            <div class="main-slider-two__single">
                                <div class="main-slider-two__content">
                                    <div class="big-title">
                                        <h2>Apex Mitigation</h2>
                                    </div>
                                    <h2>Architecture is <br>
                                        Inhabited Sculpture</h2>
                                    <div class="btn-box">
                                        <div class="btn-one">
                                            <a class="thm-btn" href="{{ route('contact') }}">
                                                <span class="txt">Discover More</span>
                                            </a>
                                        </div>
                                        <div class="btn-two">
                                            <a href="https://www.youtube.com/watch?v=pVE92TNDwUk" class="video-popup">
                                                <div class="main-slider-one__icon">
                                                    <i class="icon-play-button-1"></i>
                                                    <span>Watch Our Videos</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Swiper Slide Single-->

                    <!--Start Swiper Slide Single-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/img/slider/slider-v2-img1.jpg);">
                        </div>
                        <div class="main-slider-two__pattern"
                            style="background-image: url(assets/img/pattern/main-slider-v2-pattern.png);"></div>

                        <div class="main-slider-two__social-links">
                            <a href="#"><span class="icon-letter-v"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-dribbble"></span></a>
                            <a href="#"><span class="icon-facebook-1"></span></a>
                        </div>

                        <div class="container">
                            <div class="main-slider-two__single">
                                <div class="main-slider-two__content">
                                    <div class="big-title">
                                        <h2>Apex Mitigation</h2>
                                    </div>
                                    <h2>Architecture is <br>
                                        Inhabited Sculpture</h2>
                                    <div class="btn-box">
                                        <div class="btn-one">
                                            <a class="thm-btn" href="{{ route('contact') }}">
                                                <span class="txt">Discover More</span>
                                            </a>
                                        </div>
                                        <div class="btn-two">
                                            <a href="https://www.youtube.com/watch?v=pVE92TNDwUk" class="video-popup">
                                                <div class="main-slider-one__icon">
                                                    <i class="icon-play-button-1"></i>
                                                    <span>Watch Our Videos</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Swiper Slide Single-->
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-two__pagination"></div>

            </div>
        </section>
        <!--End Main Slider Two-->

        <!--Start Feauture One-->
        <section class="feauture-one">
            <div class="container">
                <div class="row">
                    <!--Start Feauture One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="feauture-one__single">
                            <div class="feauture-one__single-text">
                                <p>EXPLORE FEATURE</p>
                                <h2><a href="#">Creative Solution</a></h2>
                            </div>

                            <div class="feauture-one__single-bottom">
                                <div class="btn-box">
                                    <a href="#"><span class="icon-plus"></span></a>
                                </div>

                                <div class="icon-box">
                                    <span class="icon-solution"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start Feauture One Single-->

                    <!--Start Feauture One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="feauture-one__single">
                            <div class="feauture-one__single-text">
                                <p>EXPLORE FEATURE</p>
                                <h2><a href="#">Minimal Architect</a></h2>
                            </div>

                            <div class="feauture-one__single-bottom">
                                <div class="btn-box">
                                    <a href="#"><span class="icon-plus"></span></a>
                                </div>

                                <div class="icon-box">
                                    <span class="icon-blueprint"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start Feauture One Single-->

                    <!--Start Feauture One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="feauture-one__single">
                            <div class="feauture-one__single-text">
                                <p>EXPLORE FEATURE</p>
                                <h2><a href="#">Redesign Dream</a></h2>
                            </div>

                            <div class="feauture-one__single-bottom">
                                <div class="btn-box">
                                    <a href="#"><span class="icon-plus"></span></a>
                                </div>

                                <div class="icon-box">
                                    <span class="icon-office-building"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start Feauture One Single-->
                </div>
            </div>
        </section>
        <!--End Feauture One-->

        <!--Start About Two-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <!--Start About Two Img-->
                    <div class="col-xl-6">
                        <div class="about-two__img">
                            <div class="about-two__img1 wow fadeInLeft" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/about/about-v2-img1.jpg') }}" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="about-two__img2 wow fadeInRight" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <img src="{{ asset('/assets/img/about/about-v2-img2.jpg') }}" alt="" loading="lazy">
                                <div class="about-two__video-btn">
                                    <a href="https://www.youtube.com/watch?v=pVE92TNDwUk"
                                        class="about-two__icon video-popup">
                                        <span class="icon-play-button-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About Two Img-->

                    <!--Start About Two Content-->
                    <div class="col-xl-6">
                        <div class="about-two__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h5>KNOW ABOUT Apex Mitigation</h5>
                                </div>
                                <h2>We Take Care of <br>
                                    Everything for Your Goals</h2>
                            </div>

                            <div class="about-two__content-text">
                                <p>Nullam eu nibh vitae est tempor molestie id sed ex. Quisque dignissim maximus ipsum,
                                    sed rutrum metus tincidunt et. Sed eget tincidunt
                                    ipsum. Eget tincidunt</p>
                            </div>

                            <div class="about-two__content-list">
                                <ul>
                                    <li>
                                        <p><span class="icon-verified"></span> Feasiblity Studies</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-verified"></span> Conceptual Design</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-verified"></span> Custom design & feauture</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-two__content-bottom">
                                <div class="author-box">
                                    <div class="img-box">
                                        <img src="{{ asset('/assets/img/about/about-v2-img3.jpg') }}" alt="" loading="lazy">
                                    </div>
                                    <div class="signature">
                                        <img src="{{ asset('/assets/img/about/signature-1.png') }}" alt="" loading="lazy">
                                    </div>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('about') }}">
                                        <span class="txt">Discover More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About Two Content-->
                </div>
            </div>
        </section>
        <!--End About Two-->

        <!--Start Service Two-->
        <section class="service-two">
            <div class="shape1 float-bob-y"><img src="{{ asset('/assets/img/shape/service-v2-shape1.png') }}" alt="" loading="lazy"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5>OUR SERVICE</h5>
                    </div>
                    <h2>Our Architecture Services</h2>
                </div>
                <div class="row">
                    <!--Start Service Two Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="service-two__single">
                            <div class="shape2"><img src="{{ asset('/assets/img/shape/service-v2-shape2.png') }}" alt="" loading="lazy"></div>
                            <div class="service-two__single-bg"
                                style="background-image: url(assets/img/service/service-v2-single-bg.jpg);"></div>
                            <div class="service-two__single-icon">
                                <span class="icon-construction-machine"></span>
                            </div>
                            <div class="service-two__single-text">
                                <h2><a href="{{ route('architecture') }}">Machine Design</a></h2>
                                <p>Through a unique coN construction and design disciplines expertise Concor and
                                    delivers </p>
                            </div>

                            <div class="btn-box">
                                <a href="{{ route('architecture') }}">EXPLORE SERVICE</a>
                            </div>
                        </div>
                    </div>
                    <!--End Service Two Single-->

                    <!--Start Service Two Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="service-two__single">
                            <div class="shape2"><img src="{{ asset('/assets/img/shape/service-v2-shape2.png') }}" alt="" loading="lazy"></div>
                            <div class="service-two__single-bg"
                                style="background-image: url(assets/img/service/service-v2-single-bg.jpg);"></div>
                            <div class="service-two__single-icon">
                                <span class="icon-construction"></span>
                            </div>
                            <div class="service-two__single-text">
                                <h2><a href="{{ route('architecture') }}">General Contracting</a></h2>
                                <p>Through a unique coN construction and design disciplines expertise Concor and
                                    delivers </p>
                            </div>

                            <div class="btn-box">
                                <a href="{{ route('architecture') }}">EXPLORE SERVICE</a>
                            </div>
                        </div>
                    </div>
                    <!--End Service Two Single-->

                    <!--Start Service Two Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="service-two__single">
                            <div class="shape2"><img src="{{ asset('/assets/img/shape/service-v2-shape2.png') }}" alt="" loading="lazy"></div>
                            <div class="service-two__single-bg"
                                style="background-image: url(assets/img/service/service-v2-single-bg.jpg);"></div>
                            <div class="service-two__single-icon">
                                <span class="icon-interior-design"></span>
                            </div>
                            <div class="service-two__single-text">
                                <h2><a href="{{ route('architecture') }}">Machine Design</a></h2>
                                <p>Through a unique coN construction and design disciplines expertise Concor and
                                    delivers </p>
                            </div>

                            <div class="btn-box">
                                <a href="{{ route('architecture') }}">EXPLORE SERVICE</a>
                            </div>
                        </div>
                    </div>
                    <!--End Service Two Single-->
                </div>
            </div>
        </section>
        <!--End Service Two-->


        <!--Start Project Two-->
        <section class="project-two">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5>OUR RECENT PROJECT</h5>
                    </div>
                    <h2>Last Projects We Designed <br>
                        Check Our Work</h2>
                </div>
                <!-- Swiper -->
                <div swiper_scale_active class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('/assets/img/project/project-v2-img1.jpg') }}" alt="#" loading="lazy" />
                            <div class="overlay-content">
                                <p>San Fransisco</p>
                                <h2><a href="#">Hotel Joshna Villa</a></h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <img src="{{ asset('/assets/img/project/project-v2-img2.jpg') }}" alt="#" loading="lazy" />
                                <div class="overlay-content">
                                    <p>San Fransisco</p>
                                    <h2><a href="#">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assets/img/project/project-v2-img3.jpg') }}" alt="#" loading="lazy" />
                            <div class="overlay-content">
                                <p>San Fransisco</p>
                                <h2><a href="#">Hotel Joshna Villa</a></h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assets/img/project/project-v2-img1.jpg') }}" alt="#" loading="lazy" />
                            <div class="overlay-content">
                                <p>San Fransisco</p>
                                <h2><a href="#">Hotel Joshna Villa</a></h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assets/img/project/project-v2-img2.jpg') }}" alt="#" loading="lazy" />
                            <div class="overlay-content">
                                <p>San Fransisco</p>
                                <h2><a href="#">Hotel Joshna Villa</a></h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assets/img/project/project-v2-img3.jpg') }}" alt="#" loading="lazy" />
                            <div class="overlay-content">
                                <p>San Fransisco</p>
                                <h2><a href="#">Hotel Joshna Villa</a></h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assets/img/project/project-v2-img3.jpg') }}" alt="#" loading="lazy" />
                            <div class="overlay-content">
                                <p>San Fransisco</p>
                                <h2><a href="#">Hotel Joshna Villa</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Two-->




















        <!--Start Pricing One-->
        <section class="pricing-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5>OUR PRICING</h5>
                    </div>
                    <h2>Our Suitable Price for <br>
                        all Customers</h2>
                </div>

                <div class="row">
                    <!--Start  Pricing One Single -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-one__single">
                            <div class="pricing-one__single-pattern"
                                style="background-image: url(assets/img/pattern/pricing-v1-pattern.png);"></div>
                            <div class="table-header">
                                <h2>$450<span>/ month</span></h2>
                                <p>Collaborate Professionally.</p>
                                <div class="table-header-bottom">
                                    <div class="icon-box">
                                        <img src="{{ asset('/assets/img/icon/pricing-v1-icon1.jpg') }}" alt="" loading="lazy">
                                    </div>

                                    <div class="text-box">
                                        <p>Starter</p>
                                    </div>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Exclusive Templaes</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Business & Finance Analysing</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Customer Management</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Full Access Library</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>24 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">CHOOSE PLAN</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing One Single -->

                    <!--Start  Pricing One Single -->
                    <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="pricing-one__single">
                            <div class="pricing-one__single-pattern"
                                style="background-image: url(assets/img/pattern/pricing-v1-pattern.png);"></div>
                            <div class="table-header">
                                <h2>$750<span>/ month</span></h2>
                                <p>Collaborate Professionally.</p>
                                <div class="table-header-bottom">
                                    <div class="icon-box">
                                        <img src="{{ asset('/assets/img/icon/pricing-v1-icon1.jpg') }}" alt="" loading="lazy">
                                    </div>

                                    <div class="text-box">
                                        <p>Commercial</p>
                                    </div>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Exclusive Templaes</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Business & Finance Analysing</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Customer Management</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Full Access Library</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>24 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">CHOOSE PLAN</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing One Single -->

                    <!--Start  Pricing One Single -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-one__single">
                            <div class="pricing-one__single-pattern"
                                style="background-image: url(assets/img/pattern/pricing-v1-pattern.png);"></div>
                            <div class="table-header">
                                <h2>$950<span>/ month</span></h2>
                                <p>Collaborate Professionally.</p>
                                <div class="table-header-bottom">
                                    <div class="icon-box">
                                        <img src="{{ asset('/assets/img/icon/pricing-v1-icon1.jpg') }}" alt="" loading="lazy">
                                    </div>

                                    <div class="text-box">
                                        <p>Enterprise</p>
                                    </div>
                                </div>
                            </div>

                            <div class="table-content">
                                <ul>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Exclusive Templaes</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Business & Finance Analysing</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Customer Management</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Full Access Library</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-check-mark"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>24 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">CHOOSE PLAN</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing One Single -->
                </div>
            </div>
        </section>
        <!--End Pricing One-->

        <!--Start Contact One-->
        <section class="contact-one">
            <div class="contact-one__bg" style="background-image: url(assets/img/background/contact-v1-bg.jpg);">
                <div class="contact-one__counter">
                    <ul>
                        <li>
                            <div class="content-box">
                                <h2 class="count"><span class="odometer" data-count="48"></span> <span
                                        class="plus">+</span>
                                </h2>
                                <p>Designers and <br>
                                    developers</p>
                            </div>
                        </li>
                        <li>
                            <div class="content-box">
                                <h2 class="count"><span class="odometer" data-count="256"></span> <span
                                        class="plus">+</span>
                                </h2>
                                <p>Awards for digital <br>
                                    art work</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact-one__pattern" style="background-image: url(assets/img/pattern/contact-v1-pattern.jpg);">
            </div>
            <div class="contact-one__img"><img src="{{ asset('/assets/img/resource/contact-v1-img1.png') }}" alt="" loading="lazy"></div>
            <div class="container clearfix">
                <div class="contact-one__inner">
                    <div class="contact-one__form wow animated fadeInRight" data-wow-delay="0.1s">
                        <div class="title-box">
                            <p>WE READY TO HELP</p>
                            <h2>Have Any Question?</h2>
                        </div>

                        <form method="post" action="index.html">
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email Address" value="" name="form_email" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone Number" required="">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Write Your Message"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">
                                                SEND YOUR MEASSAGE
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!--End Contact One-->


        <!--Start Brand Two-->
        <div class="brand-one brand-one--two">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                            "0": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 1
                                            },
                                            "375": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 1
                                            },
                                            "575": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                            },
                                            "768": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 3
                                            },
                                            "992": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 4
                                            },
                                            "1200": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 5
                                            }
                                        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img1.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img6.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img2.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img7.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img3.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img8.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img4.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img9.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img5.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img10.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img1.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img6.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img2.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img7.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img3.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img8.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img4.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img9.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img5.png') }}" alt="#" loading="lazy">
                            </div>

                            <div class="img-box2">
                                <img src="{{ asset('/assets/img/brand/brand-v2-img10.png') }}" alt="#" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Brand Two -->

        <!--Start Why Choose Us One-->
        <div class="why-choose-us-one">
            <div class="container">
                <div class="row">
                    <!--Start Why Choose Us One Img-->
                    <div class="col-xl-6 wow animated fadeInRight" data-wow-delay="0.1s">
                        <div class="why-choose-us-one__img">
                            <div class="shape1"><img src="{{ asset('/assets/img/shape/why-choose-us-v1-shape1.png') }}" alt="" loading="lazy"></div>
                            <ul>
                                <li>
                                    <div class="img-box">
                                        <img src="{{ asset('/assets/img/resource/why-choose-us-v1-img1.jpg') }}" alt="" loading="lazy">
                                    </div>
                                </li>

                                <li>
                                    <div class="img-box">
                                        <img src="{{ asset('/assets/img/resource/why-choose-us-v1-img2.jpg') }}" alt="" loading="lazy">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Why Choose Us One Img-->

                    <!--Start Why Choose Us Content-->
                    <div class="col-xl-6 wow animated fadeInLeft" data-wow-delay="0.1s">
                        <div class="why-choose-us-one__content">
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-office-building"></span>
                                        </div>
                                        <div class="content-box">
                                            <h2>Architecture Design</h2>
                                            <p>Through a unique coN construction and design discipl
                                                nes expertise Concor and delivers </p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-bed"></span>
                                        </div>
                                        <div class="content-box">
                                            <h2>The Joy of Best Living</h2>
                                            <p>Through a unique coN construction and design discipl
                                                nes expertise Concor and delivers </p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-targeted"></span>
                                        </div>
                                        <div class="content-box">
                                            <h2>Professional Planning</h2>
                                            <p>Through a unique coN construction and design discipl
                                                nes expertise Concor and delivers </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Why Choose Us Content-->
                </div>
            </div>
        </div>
        <!--End Why Choose Us One-->

        <!--Start Call To Action One-->
        <section class="call-to-action-one">
            <div class="call-to-action-one__bg"
                style="background-image: url(assets/img/background/call-to-action-v1-bg.jpg);"></div>
            <div class="container">
                <div class="call-to-action-one__inner">
                    <div class="call-to-action-one__content text-center">
                        <h2>Have a Project in Your Mind</h2>
                        <h3>Don’t Hesitate to Say Hello </h3>
                        <div class="btn-box">
                            <a class="thm-btn" href="#">
                                <span class="txt">LET’S TALK WITH US</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Call To Action One-->

        <!-- Start Blog One -->
        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5>OUR BLOG POST</h5>
                    </div>
                    <h2>Read Our Latest News</h2>
                </div>

                <div class="row">
                    <!-- Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img1.jpg') }}" alt="" loading="lazy">
                                    <div class="overlay-icon">
                                        <a href="#"><span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-one__single-content">
                                <ul class="meta-info">
                                    <li>
                                        <p><a href="#">Development</a></p>
                                    </li>
                                    <li>
                                        <p>02 July, 2023</p>
                                    </li>
                                </ul>
                                <h2><a href="{{ route('blogDetails') }}">Is Architecture a Good Career <br>
                                        in Our Daily Life? </a></h2>
                                <div class="btn-box">
                                    <a href="{{ route('blogDetails') }}">READ MORE <span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog One Single-->

                    <!-- Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img2.jpg') }}" alt="" loading="lazy">
                                    <div class="overlay-icon">
                                        <a href="#"><span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-one__single-content">
                                <ul class="meta-info">
                                    <li>
                                        <p><a href="#">Development</a></p>
                                    </li>
                                    <li>
                                        <p>02 July, 2023</p>
                                    </li>
                                </ul>
                                <h2><a href="{{ route('blogDetails') }}">Architecture is a Visual Art, and <br>
                                        the Buildings Speak For</a></h2>
                                <div class="btn-box">
                                    <a href="{{ route('blogDetails') }}">READ MORE <span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog One Single-->

                    <!-- Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img3.jpg') }}" alt="" loading="lazy">
                                    <div class="overlay-icon">
                                        <a href="#"><span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-one__single-content">
                                <ul class="meta-info">
                                    <li>
                                        <p><a href="#">Development</a></p>
                                    </li>
                                    <li>
                                        <p>02 July, 2023</p>
                                    </li>
                                </ul>
                                <h2><a href="{{ route('blogDetails') }}">We Stand for Quality, Safety <br>
                                        Credibility, so You Could be Trust </a></h2>
                                <div class="btn-box">
                                    <a href="{{ route('blogDetails') }}">READ MORE <span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog One Single-->
                </div>
            </div>
        </section>
        <!-- End Blog One -->

        

        
        
        
        
        
    <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
