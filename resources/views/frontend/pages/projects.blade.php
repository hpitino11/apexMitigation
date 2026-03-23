@extends('frontend.layouts.app')
@section('title', 'Our Projects')
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
                        <li class="active">PROJECTS</li>
                    </ul>
                    <h2>Our Projects</h2>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Project Three-->
        <section class="project-three project-three--project">
            <div class="container">
                <div class="row">
                    <!--Start Project Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-three__single">
                            <div class="project-three__single-inner">
                                <div class="project-three__single-img"
                                    style="background-image: url(assets/img/project/project-v3-img4.jpg);">
                                </div>
                                <div class="bg-overlay"></div>

                                <div class="project-three__overlay-icon">
                                    <ul>
                                        <li><a class="img-popup" href="{{ url('assets/img/project/project-v3-img4.jpg') }}"><span
                                                    class="icon-search-interface-symbol"></span></a>
                                        </li>
                                        <li><a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a></li>
                                    </ul>
                                </div>

                                <div class="project-three__single-content">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project Three Single-->

                    <!--Start Project Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-three__single">
                            <div class="project-three__single-inner">
                                <div class="project-three__single-img"
                                    style="background-image: url(assets/img/project/project-v3-img5.jpg);">
                                </div>
                                <div class="bg-overlay"></div>

                                <div class="project-three__overlay-icon">
                                    <ul>
                                        <li><a class="img-popup" href="{{ url('assets/img/project/project-v3-img5.jpg') }}"><span
                                                    class="icon-search-interface-symbol"></span></a>
                                        </li>
                                        <li><a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a></li>
                                    </ul>
                                </div>

                                <div class="project-three__single-content">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project Three Single-->

                    <!--Start Project Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-three__single">
                            <div class="project-three__single-inner">
                                <div class="project-three__single-img"
                                    style="background-image: url(assets/img/project/project-v3-img6.jpg);">
                                </div>
                                <div class="bg-overlay"></div>

                                <div class="project-three__overlay-icon">
                                    <ul>
                                        <li><a class="img-popup" href="{{ url('assets/img/project/project-v3-img6.jpg') }}"><span
                                                    class="icon-search-interface-symbol"></span></a>
                                        </li>
                                        <li><a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a></li>
                                    </ul>
                                </div>

                                <div class="project-three__single-content">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project Three Single-->

                    <!--Start Project Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-three__single">
                            <div class="project-three__single-inner">
                                <div class="project-three__single-img"
                                    style="background-image: url(assets/img/project/project-v3-img7.jpg);">
                                </div>
                                <div class="bg-overlay"></div>

                                <div class="project-three__overlay-icon">
                                    <ul>
                                        <li><a class="img-popup" href="{{ url('assets/img/project/project-v3-img7.jpg') }}"><span
                                                    class="icon-search-interface-symbol"></span></a>
                                        </li>
                                        <li><a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a></li>
                                    </ul>
                                </div>

                                <div class="project-three__single-content">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project Three Single-->

                    <!--Start Project Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-three__single">
                            <div class="project-three__single-inner">
                                <div class="project-three__single-img"
                                    style="background-image: url(assets/img/project/project-v3-img8.jpg);">
                                </div>
                                <div class="bg-overlay"></div>

                                <div class="project-three__overlay-icon">
                                    <ul>
                                        <li><a class="img-popup" href="{{ url('assets/img/project/project-v3-img8.jpg') }}"><span
                                                    class="icon-search-interface-symbol"></span></a>
                                        </li>
                                        <li><a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a></li>
                                    </ul>
                                </div>

                                <div class="project-three__single-content">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project Three Single-->

                    <!--Start Project Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-three__single">
                            <div class="project-three__single-inner">
                                <div class="project-three__single-img"
                                    style="background-image: url(assets/img/project/project-v3-img9.jpg);">
                                </div>
                                <div class="bg-overlay"></div>

                                <div class="project-three__overlay-icon">
                                    <ul>
                                        <li><a class="img-popup" href="{{ url('assets/img/project/project-v3-img9.jpg') }}"><span
                                                    class="icon-search-interface-symbol"></span></a>
                                        </li>
                                        <li><a href="{{ route('projectDetails') }}"><span class="icon-link"></span></a></li>
                                    </ul>
                                </div>

                                <div class="project-three__single-content">
                                    <p>San Fransisco</p>
                                    <h2><a href="{{ route('projectDetails') }}">Hotel Joshna Villa</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project Three Single-->
                </div>
            </div>
        </section>
        <!--End Project Three-->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection