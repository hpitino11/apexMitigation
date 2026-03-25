@extends('frontend.layouts.app')
@section('title', 'Index One')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
        <!--Start Main Slider One-->
        <section class="main-slider main-slider-one">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
    "slidesPerView": 1,
    "loop": false,
    "effect": "slide",
    "speed": 0,
    "allowTouchMove": false,
    "simulateTouch": false,
    "autoplay": false
}'>
                <div class="swiper-wrapper">
                    <!--Start Swiper Slide Single-->
                    <div class="swiper-slide">
                        <div class="image-layer">
                           <video autoplay muted loop playsinline preload="metadata" class="hero-video">
                                <source src="{{ asset('assets/video/hero.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="shape1"><img src="{{ asset('/assets/img/shape/slider-v1-shape1.png') }}" alt="" loading="lazy"></div>

                        <div class="container">
                            <div class="main-slider-one__single">
                                <div class="main-slider-one__content">
                                    <div class="shape2 float-bob-x"><img src="{{ asset('/assets/img/shape/slider-v1-shape2.png') }}"
                                            alt="" loading="lazy"></div>
                                    <h2>Apex</h2>
                                    <h2>Mitigation</h2>
                                    <div class="btn-box">
                                        <div class="btn-one">
                                            <a class="thm-btn" href="{{ route('contact') }}">
                                                <span class="txt">Learn More</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="contact-info">
                                        <ul>
                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>Serving all of Florida</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-envelope"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p><a href="{{ url('mailto:yourmail@email.com') }}">Tyler@apexmitigation.com</a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="social-links">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-envelope"></span></a>
                                        <a href="#"><span class="icon-phone"></span></a>
                                        <a href="#"><span class="icon-instagram"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Swiper Slide Single-->


                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-one__pagination"></div>
            </div>
        </section>
        <!--End Main Slider One-->


        <!--Start Feauture One-->
        <section class="feauture-one">
            <div class="container">
                <div class="row">
                  
                </div>
            </div>
        </section>
        <!--End Feauture One-->

        <!--Start About One-->
        <section class="about-one">
            <div class="shape1 float-bob-y"><img src="{{ asset('/assets/img/shape/about-v1-shape1.png') }}" alt="" loading="lazy"></div>
            <div class="container">
                <div class="row">
                    <!--Start About One Img-->
                    <div class="col-xl-5 wow animated fadeInRight" data-wow-delay="0.1s">
                        <div class="about-one__img">
                            <div class="inner">
                                <img src="{{ asset('/assets/img/about/about-v1-img1.jpg') }}" alt="" loading="lazy">
                            </div>
                           <div class="experience-box">
                        <div class="counter-box">
                            <h2 class="count" style="color: #e53e3e;">24/7</h2>
                        </div>
                        <div class="text-box">
                            <h3 style="color: #e53e3e;">Emergency<br>Response</h3>
                        </div>
                    </div>
                        </div>
                    </div>
                    <!--End About One Img-->

                    <!--Start About One Content-->
                    <div class="col-xl-7 wow animated fadeInLeft" data-wow-delay="0.1s">
                        <div class="about-one__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h5>About Apex Mitigation</h5>
                                </div>
                                <h2>Water Damage Mitigation <br>
                                    & Restoration Experts</h2>
                            </div>

                            <div class="text-box">
                                <p>Apex Mitigation specializes in water damage mitigation and restoration. 
Our team responds quickly to remove damaged materials, dry affected areas, 
and restore safe humidity levels inside your home or business. </p>
                            </div>


                            <div class="about-one__content-bottom">
                                <div class="about-one__content-bottom-author-box">
                                    <div class="btn-box">
                                        <a class="thm-btn" href="{{ route('about') }}">
                                            <span class="txt">Get Help Now</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text">
                                    <h4>Need our services? <a href="{{ url('tel:123456789') }}"> Call us now: 1-(800)-DRYOUT</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About One Content-->
                </div>
            </div>
        </section>
        <!--End About One-->

        <!--Start Service One-->
        <section class="service-one">
            <div class="service-one__shape2" style="background-image: url(assets/img/shape/service-v1-shape2.png);">
            </div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5>OUR SERVICES</h5>
                    </div>
                    <h2>Our Mitigation Services</h2>
                </div>
                <div class="row">
                    <!--Start Service One Single-->
                    <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="service-one__single">
                            <div class="shape1"><img src="{{ asset('/assets/img/shape/service-v1-shape1.png') }}" alt="" loading="lazy"></div>
                            <div class="service-one__single-inner">
                                <div class="count-text">01</div>
                                <div class="icon-box">
                                    <span class="icon-construction"></span>
                                </div>
                                <div class="content-box">
                                    <h2><a href="{{ route('architecture') }}">Water Damage Removal & Demo</a></h2>
                                    <p>Our team safely removes compromised materials from your property to prevent further damage and contamination. This includes drywall, insulation, flooring, cabinetry, appliances, and other affected materials.</p>
                                    <div class="btn-box">
                                        <a href="{{ route('architecture') }}">VIEW SERVICE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Service One Single-->

                    <!--Start Service One Single-->
                    <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="service-one__single">
                            <div class="service-one__single-inner">
                                <div class="count-text">02</div>
                                <div class="icon-box">
                                    <span class="icon-construction-machine"></span>
                                </div>
                                <div class="content-box">
                                    <h2><a href="{{ route('architecture') }}">Structural Drying</a></h2>
<p>Our team uses professional drying equipment including air movers, dehumidifiers, and moisture monitoring tools to remove moisture and restore safe humidity levels inside your home or business, helping prevent further damage caused by excess moisture.</p>                                    <div class="btn-box">
                                        <a href="{{ route('architecture') }}">VIEW SERVICE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Service One Single-->

                    <!--Start Service One Single-->
                    <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="service-one__single">
                            
                            <div class="service-one__single-inner">
                                <div class="count-text">03</div>
                                <div class="icon-box">
                                    <span class="icon-check-list"></span>
                                </div>
                                <div class="content-box">
                                    <h2><a href="{{ route('architecture') }}">Xactimate Estimate</a></h2>
                                    <p>Our certified estimators create detailed Xactimate reports documenting the damage to your property. These estimates can be submitted directly to your insurance company to help speed up the claims process.</p>
                                    <div class="btn-box">
                                        <a href="{{ route('architecture') }}">VIEW SERVICE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Service One Single-->

                    <!--Start Service One Single-->
                    <div class="col-xl-6 col-lg-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="service-one__single">
                            <div class="shape1"><img src="{{ asset('/assets/img/shape/service-v1-shape1.png') }}" alt="" loading="lazy"></div>
                            <div class="service-one__single-inner">
                                <div class="count-text">04</div>
                                <div class="icon-box">
                                    <span class="icon-interior-design"></span>
                                </div>
                                <div class="content-box">
                                    <h2><a href="{{ route('architecture') }}">Dry Ice Blasting</a></h2>
                                    <p>Dry ice blasting is a non-abrasive cleaning process used to remove contaminants, mold residue, and smoke damage from structural surfaces without damaging the underlying material.</p>
                                    <div class="btn-box">
                                        <a href="{{ route('architecture') }}">VIEW SERVICE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Service One Single-->
                </div>
            </div>
        </section>
        <!--End Service One-->

        <!--Start Project One-->
        <section class="project-one">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5>OUR RECENT PROJECTS</h5>
                    </div>
                    <h2><br>
                        Check Our Work</h2>
                </div>
                <div class="row">
                    <!--Start Project One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="project-one__single">
                            <div class="project-one__single-img">
                                <img src="{{ asset('/assets/img/project/project-v1-img1.jpg') }}" alt="" loading="lazy">
                                <div class="overlay-btn">
                                    <a class="img-popup" href="{{ url('assets/img/project/project-v1-img1.jpg') }}"><span
                                            class="icon-search-interface-symbol"></span></a>
                                    <a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a>
                                </div>

                                <div class="overlay-text">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project One Single-->

                    <!--Start Project One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="project-one__single">
                            <div class="project-one__single-img">
                                <img src="{{ asset('/assets/img/project/project-v1-img2.jpg') }}" alt="" loading="lazy">
                                <div class="overlay-btn">
                                    <a class="img-popup" href="{{ url('assets/img/project/project-v1-img2.jpg') }}"><span
                                            class="icon-search-interface-symbol"></span></a>
                                    <a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a>
                                </div>

                                <div class="overlay-text">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project One Single-->

                    <!--Start Project One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="project-one__single">
                            <div class="project-one__single-img">
                                <img src="{{ asset('/assets/img/project/project-v1-img3.jpg') }}" alt="" loading="lazy">
                                <div class="overlay-btn">
                                    <a class="img-popup" href="{{ url('assets/img/project/project-v1-img3.jpg') }}"><span
                                            class="icon-search-interface-symbol"></span></a>
                                    <a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a>
                                </div>

                                <div class="overlay-text">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project One Single-->

                    <!--Start Project One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="project-one__single">
                            <div class="project-one__single-img">
                                <img src="{{ asset('/assets/img/project/project-v1-img4.jpg') }}" alt="" loading="lazy">
                                <div class="overlay-btn">
                                    <a class="img-popup" href="{{ url('assets/img/project/project-v1-img4.jpg') }}"><span
                                            class="icon-search-interface-symbol"></span></a>
                                    <a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a>
                                </div>

                                <div class="overlay-text">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project One Single-->
                </div>
            </div>
        </section>
        <!--End Project One-->


        <!--Start Faq One-->
        <section class="faq-one">
            <div class="shape1"><img src="{{ asset('/assets/img/shape/faq-v1-shape1.png') }}" alt="" loading="lazy"></div>
            <div class="container clearfix">
                <div class="faq-one__inner">
                    <div class="big-title">
                        <h2>FAQ</h2>
                    </div>
                    <ul class="accrodion-grp faq-one__accrodion" data-grp-name="faq-one-accrodion">
                        <!-- Start Faq One Single-->
                        <li class="accrodion active wow animated fadeInRight" data-wow-delay="0.1s">
                            <div class="accrodion-title">
                                <h3>What is water mitigation?</h3>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Water mitigation is the process of reducing or preventing further water damage after a flood, leak, or pipe burst. It involves removing standing water, extracting moisture from materials, and drying out the affected area to stop structural damage and prevent mold growth.</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Faq One Single-->

                        <!-- Start Faq One Single-->
                        <li class="accrodion wow animated fadeInRight" data-wow-delay="0.2s">
                            <div class="accrodion-title">
                                <h3>How quickly should I act after water damage?</h3>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>You should act immediately — within the first 24 to 48 hours. Mold can begin growing within 24 hours of water exposure. The sooner water is extracted and drying equipment is deployed, the less damage occurs and the lower your overall restoration costs will be.</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Faq One Single-->

                        <!-- Start Faq One Single-->
                        <li class="accrodion wow animated fadeInRight" data-wow-delay="0.3s">
                            <div class="accrodion-title">
                                <h3>Why choose dry ice blasting over other cleaning methods?</h3>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Dry ice blasting is non-abrasive, leaves no secondary waste, and introduces no water or chemicals into your structure. Unlike sandblasting or chemical cleaning, dry ice sublimates on contact — turning from solid to gas — so it removes mold residue, contaminants, and smoke damage without harming wood framing, concrete, or other underlying materials. It is also safe around electrical components and in enclosed spaces.</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Faq One Single-->

                        <!-- Start Faq One Single-->
                        <li class="accrodion wow animated fadeInRight" data-wow-delay="0.4s">
                            <div class="accrodion-title">
                                <h3>Does my insurance cover water mitigation?</h3>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Most homeowner and commercial property insurance policies cover sudden and accidental water damage such as a burst pipe or appliance failure. Our team prepares detailed Xactimate estimates that can be submitted directly to your insurance adjuster to help speed up the claims process.</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Faq One Single-->

                    </ul>
                </div>
            </div>
        </section>
        <!--End Faq One-->



        <!--Start Testimonials One-->
        <section class="testimonials-one">
            <div class="shape1"><img src="{{ asset('/assets/img/shape/testimonials-v1-shape1.png') }}" alt="" loading="lazy"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5>OUR CLIENT TESTIMONIALS</h5>
                    </div>
                    <h2>What Clients Say About Apex Mitigation</h2>
                </div>

                <div class="row">
                    <!--Start Testimonials Three Content-->
                    <div class="col-xl-12">
                        <div class="testimonials-one__inner">

                            <div class="testimonials-one__content">
                                <div class="swiper-container" id="testimonials-one__carousel">
                                    <div class="swiper-wrapper">
                                        <!--Start Swiper Slide-->
                                        <div class="swiper-slide">
                                            <div class="testimonials-one__content-single">
                                                <div class="rating-box">
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                </div>

                                                <div class="text-box">
                                                    <p>We are an architecture firm with a focus on beautiful but
                                                        functional design. At its <br> heart, we believe design is about
                                                        usability and accessibility — these are the guiding <br>
                                                        principles for our work. Read projects, our <br>
                                                        process and our team below.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Swiper Slide-->

                                        <!--Start Swiper Slide-->
                                        <div class="swiper-slide">
                                            <div class="testimonials-one__content-single">
                                                <div class="rating-box">
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                </div>

                                                <div class="text-box">
                                                    <p>We are an architecture firm with a focus on beautiful but
                                                        functional design. At its <br> heart, we believe design is about
                                                        usability and accessibility — these are the guiding <br>
                                                        principles for our work. Read projects, our <br>
                                                        process and our team below.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Swiper Slide-->

                                        <!--Start Swiper Slide-->
                                        <div class="swiper-slide">
                                            <div class="testimonials-one__content-single">
                                                <div class="rating-box">
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                    <a href="#"><i class="icon-star"></i></a>
                                                </div>

                                                <div class="text-box">
                                                    <p>We are an architecture firm with a focus on beautiful but
                                                        functional design. At its <br> heart, we believe design is about
                                                        usability and accessibility — these are the guiding <br>
                                                        principles for our work. Read projects, our <br>
                                                        process and our team below.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Swiper Slide-->
                                    </div>
                                </div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-pagination" id="testimonials-one__pagination"></div>
                            </div>

                            <div class="swiper-container" id="testimonials-one__thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonials-one__thumb-single ml0">
                                            <div class="testimonials-one__thumb-img">
                                                <div class="inner">
                                                    <img src="{{ asset('/assets/img/testimonial/testimonials-v1-img1.jpg') }}" alt="" loading="lazy">
                                                </div>
                                            </div>

                                            <div class="testimonials-one__thumb-single-text">
                                                <h2>Annete Black</h2>
                                                <p>Engineer</p>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="testimonials-one__thumb-single">
                                            <div class="testimonials-one__thumb-img">
                                                <div class="inner">
                                                    <img src="{{ asset('/assets/img/testimonial/testimonials-v1-img2.jpg') }}" alt="" loading="lazy">
                                                </div>
                                            </div>

                                            <div class="testimonials-one__thumb-single-text">
                                                <h2>Robert Hazelhood</h2>
                                                <p>CEO & Co Founder</p>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="testimonials-one__thumb-single">
                                            <div class="testimonials-one__thumb-img">
                                                <div class="inner">
                                                    <img src="{{ asset('/assets/img/testimonial/testimonials-v1-img3.jpg') }}" alt="" loading="lazy">
                                                </div>
                                            </div>

                                            <div class="testimonials-one__thumb-single-text">
                                                <h2>Anannya Islam</h2>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Testimonials Three Content-->
                </div>
            </div>
        </section>
        <!--End Testimonials One-->


        <!--Start Contact Section-->
        <section class="contact-two contact-home">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5>CONTACT US</h5>
                    </div>
                    <h2>Get in Touch With Us</h2>
                </div>
                <div class="contact-two__inner">
                    <div class="contact-two__inner-box">
                        <form action="{{ asset('assets/inc/sendemail.php') }}" class="contact-page__form contact-form-validated">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Your Name*" name="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="tel" placeholder="Your Phone*" name="phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Your Email*" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <textarea name="message" placeholder="Your Message*" required></textarea>
                                    </div>
                                    <div class="contact-page__btn">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">SEND MESSAGE</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Section-->


    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
