@extends('frontend.layouts.app')
@section('title', 'Our Faq')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerFour')
    <!-- header area end -->
    <!-- header area end -->
     
         <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/img/background/page-header-bg.jpg)">
            </div>

            <div class="container">
                <div class="page-header__inner text-center">
                    <ul class="thm-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">OUR FAQ</li>
                    </ul>
                    <h2>Our Faq’s</h2>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Faq One-->
        <section class="faq-one faq-one--faq">
            <div class="container clearfix">
                <div class="row">

                    <div class="col-xl-6">
                        <ul class="accrodion-grp faq-one__accrodion" data-grp-name="faq-one-accrodion">
                            <!-- Start Faq One Single-->
                            <li class="accrodion active">
                                <div class="accrodion-title">
                                    <h3>What is water mitigation?</h3>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Water mitigation is the process of reducing or preventing the amount of water damage that occurs after a flood, leak, or other water-related incident. It involves removing standing water, extracting moisture from materials, and drying out the affected area to stop further damage and prevent mold growth.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h3>How quickly should I act after water damage?</h3>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>You should act immediately — within the first 24 to 48 hours. Mold can begin growing within 24 hours of water exposure. The sooner water is extracted and drying equipment is deployed, the less structural damage occurs and the lower your overall restoration costs will be.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h3>Does my insurance cover water mitigation?</h3>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Most homeowner and commercial property insurance policies cover sudden and accidental water damage, such as a burst pipe or appliance failure. Our team prepares detailed Xactimate estimates that can be submitted directly to your insurance adjuster to help speed up the claims process.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h3>How long does the drying process take?</h3>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>The drying process typically takes 3 to 5 days depending on the extent of the damage, the materials affected, and environmental conditions. Our technicians monitor moisture levels daily using professional meters and adjust equipment placement until all readings reach acceptable levels.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->
                        </ul>
                    </div>


                    <div class="col-xl-6">
                        <ul class="accrodion-grp faq-one__accrodion" data-grp-name="faq-one-accrodion">
                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h3>What materials might need to be removed after water damage?</h3>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Depending on the severity, we may need to remove drywall, insulation, flooring, baseboards, cabinetry, and other porous materials that cannot be adequately dried in place. Removing compromised materials is essential to prevent hidden mold growth and ensure the structure dries completely.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h3>Will there be mold after water damage?</h3>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Mold is a real risk any time water is left standing or materials remain wet for more than 24 hours. Proper mitigation — including thorough drying and removal of unsalvageable materials — significantly reduces the risk. If mold is already present, we can address it as part of the remediation process.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h3>Why choose dry ice blasting over other cleaning methods?</h3>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Dry ice blasting is non-abrasive, leaves no secondary waste, and does not introduce water or chemicals into your structure. Unlike sandblasting or chemical cleaning, dry ice sublimates on contact — turning directly from solid to gas — so it removes contaminants, mold residue, and smoke damage from surfaces without damaging wood framing, concrete, or other underlying materials. It is also safe to use around electrical components and in enclosed spaces.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h3>Do I need to leave my home during mitigation?</h3>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>In most cases you can remain in your home during the drying process, though the affected area will be sectioned off. If the damage is extensive or involves sewage contamination, temporary relocation may be recommended for health and safety reasons. Our team will walk you through what to expect before work begins.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Faq One-->

        <!-- Start Cta One -->
        <section class="cta-one">
            <div class="cta-one__pattern" style="background-image: url(assets/img/pattern/cta-v1-pattern.png);"></div>
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__content">
                        <h2>We are Always Ready to Help You <br>
                            & Answer Your Questions</h2>
                    </div>

                    <div class="cta-one__btn">
                        <a class="thm-btn" href="#">
                            <span class="txt">SERVICE MORE</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cta One -->
        

     <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection