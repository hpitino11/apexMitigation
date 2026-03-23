@extends('frontend.layouts.app')
@section('title', 'Error Page')
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
                        <li class="active">ERROR</li>
                    </ul>
                    <h2>Error Page</h2>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Error Page-->
        <section class="error-page">
            <div class="error-page__shape1">
                <img src="{{ asset('/assets/img/shape/error-page-bg.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__wrapper text-center">
                            <div class="error-page__content">
                                <h2>404</h2>
                                <h3>Opps! Page Not Found</h3>
                                <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('home') }}">
                                        <span class="txt">back to home</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Error Page-->

     <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection