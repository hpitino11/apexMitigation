<!--Start Main Header One -->
        <header class="main-header main-header-one style4">
            <div id="sticky-header" class="menu-area">
                <div class="main-header-four__top">
                    <div class="container">
                        <div class="main-header-four__top-inner">
                            <div class="header-contact-box">
                                <ul>
                                    <li><a href="{{ url('tel:123456789') }}">1(800)234-34-45</a></li>
                                    <li><a href="{{ url('mailto:yourmail@email.com') }}">xafrancompany@gmail.com</a></li>
                                </ul>
                            </div>

                            <div class="header-social-links">
                                <ul>
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li><a href="#"><span class="icon-tik-tok"></span></a></li>
                                    <li><a href="#"><span class="icon-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-header-four__bottom">
                    <div class="container">
                        <div class="menu-area__inner">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="main-header-one__inner">
                                        <div class="main-header-one__left">
                                            <div class="logo-box">
                                                <a href="{{ route('home') }}"> <img src="{{ asset('/assets/img/resource/logo-2.png') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>

                                        <div class="main-header-one__middle">
                                            <div class="navbar-wrap main-menu">
                                                <ul class="navigation">
                                                    @include('frontend.includes.partials.navbar')
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="main-header-one__right">
                                            <div class="header-search-box">
                                                <a href="#"
                                                    class="main-menu__search search-toggler icon-search-interface-symbol">
                                                </a>
                                            </div>

                                            <div class="header-shopping-cart">
                                                <a href="#"><span class="icon-shopping-cart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/resource/logo-2.png') }}" alt="Logo"></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="contact-info">
                                    <div class="icon-box"><span class="icon-call"></span>
                                    </div>
                                    <p><a href="{{ url('tel:123456789') }}">(629) 555-0129</a></p>
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header One -->