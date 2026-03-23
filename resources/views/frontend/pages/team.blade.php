@extends('frontend.layouts.app')
@section('title', 'Our Team')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerFour')
    <!-- header area end -->
       
        
       <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/img/background/page-header-bg.jpg)">
            </div>

            <div class="container">
                <div class="page-header__inner text-center">
                    <ul class="thm-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">OUR TEAM</li>
                    </ul>
                    <h2>Our Team</h2>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!-- Start Team Two -->
        <section class="team-two">
            <div class="container">
                <div class="row">
                    <!-- Start Team Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/team/team-v2-img1.jpg') }}" alt="">
                                </div>

                                <div class="content-box">
                                    <h3><a href="{{ route('teamDetails') }}">Saiful Islam</a></h3>
                                    <p>Developer</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="icon-linkedin-big-logo"></i></a></li>
                                            <li><a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Two Single-->

                    <!-- Start Team Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/team/team-v2-img2.jpg') }}" alt="">
                                </div>

                                <div class="content-box">
                                    <h3><a href="{{ route('teamDetails') }}">Janes Cooper</a></h3>
                                    <p>Designer</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="icon-linkedin-big-logo"></i></a></li>
                                            <li><a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Two Single-->

                    <!-- Start Team Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/team/team-v2-img3.jpg') }}" alt="">
                                </div>

                                <div class="content-box">
                                    <h3><a href="{{ route('teamDetails') }}">James Bond</a></h3>
                                    <p>Creator</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="icon-linkedin-big-logo"></i></a></li>
                                            <li><a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Two Single-->

                    <!-- Start Team Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/team/team-v2-img4.jpg') }}" alt="">
                                </div>

                                <div class="content-box">
                                    <h3><a href="{{ route('teamDetails') }}">Saiful Islam</a></h3>
                                    <p>Developer</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="icon-linkedin-big-logo"></i></a></li>
                                            <li><a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Two Single-->

                    <!-- Start Team Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/team/team-v2-img5.jpg') }}" alt="">
                                </div>

                                <div class="content-box">
                                    <h3><a href="{{ route('teamDetails') }}">Janes Cooper</a></h3>
                                    <p>Designer</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="icon-linkedin-big-logo"></i></a></li>
                                            <li><a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Two Single-->

                    <!-- Start Team Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/team/team-v2-img6.jpg') }}" alt="">
                                </div>

                                <div class="content-box">
                                    <h3><a href="{{ route('teamDetails') }}">James Bond</a></h3>
                                    <p>Creator</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="icon-linkedin-big-logo"></i></a></li>
                                            <li><a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Two Single-->
                </div>
            </div>
        </section>
        <!-- End Team Two -->
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection