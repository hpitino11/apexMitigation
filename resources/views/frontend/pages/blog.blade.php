@extends('frontend.layouts.app')
@section('title', 'Blog')
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
                        <li class="active">OUR BLOG</li>
                    </ul>
                    <h2>Our Blog</h2>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!-- Start Blog One -->
        <section class="blog-one">
            <div class="container">
                <div class="row">
                    <!-- Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img1.jpg') }}" alt="">
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
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img2.jpg') }}" alt="">
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
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img3.jpg') }}" alt="">
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

                    <!-- Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img4.jpg') }}" alt="">
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
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img5.jpg') }}" alt="">
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
                                    <img src="{{ asset('/assets/img/blog/blog-v1-img6.jpg') }}" alt="">
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
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection