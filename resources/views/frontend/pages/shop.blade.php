@extends('frontend.layouts.app')
@section('title', 'Our Shop')
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
                        <li class="active">OUR SHOP</li>
                    </ul>
                    <h2>Our Shop</h2>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Shop Page -->
        <section class="shop-page">
            <div class="container">
                <div class="shop-page__top">
                    <div class="shop-page__top-inner">
                        <div class="shop-page__top-left">
                            <p>Showing 1-8 of 16 results</p>
                        </div>

                        <div class="shop-page__top-right">
                            <div class="product__showing-sort">
                                <select class="selectpicker" aria-label="Default select example">
                                    <option selected>Default sorting</option>
                                    <option value="1">Default sorting 01</option>
                                    <option value="2">Default sorting 02</option>
                                    <option value="3">Default sorting 03</option>
                                </select>
                            </div>

                            <ul class="product-view-style">
                                <li><a href="#"><span class="fa fa-th"></span></a></li>
                                <li><a href="#"><span class="fa fa-list"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img1.jpg') }}" alt="#" loading="lazy">
                                <div class="text">Sale</div>
                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">Lather Bag</a></h4>
                                    <p>$325.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img2.jpg') }}" alt="#" loading="lazy">

                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">Eye Castal</a></h4>
                                    <p>$25.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img3.jpg') }}" alt="#" loading="lazy">
                                <div class="text">Sale</div>
                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">High Heel Baby</a></h4>
                                    <p>$75.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img4.jpg') }}" alt="#" loading="lazy">
                                <div class="text">Sale</div>
                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">White Shoes</a></h4>
                                    <p>$325.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img5.jpg') }}" alt="#" loading="lazy">

                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">Black Jacket</a></h4>
                                    <p>$99.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img6.jpg') }}" alt="#" loading="lazy">
                                <div class="text">Sale</div>
                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">Diamond Ring</a></h4>
                                    <p>$325.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img7.jpg') }}" alt="#" loading="lazy">
                                <div class="text">Sale</div>
                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">Makeup Box</a></h4>
                                    <p>$85.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img8.jpg') }}" alt="#" loading="lazy">

                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">Sofa With Balish</a></h4>
                                    <p>$89.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">
                                <img src="{{ asset('/assets/img/shop/shop-page-img9.jpg') }}" alt="#" loading="lazy">
                                <div class="text">Sale</div>
                                <div class="btn-box">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>

                            <div class="shop-page__single-content">
                                <div class="text-box">
                                    <h4><a href="{{ route('shopDetails') }}">Baby Sunglass</a></h4>
                                    <p>$35.00</p>
                                </div>

                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->

                    <ul class="styled-pagination text-center clearfix">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="arrow next active"><a href="#"><span class="icon-left-arrow"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Shop Page -->
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection