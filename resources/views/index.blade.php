@extends('layouts.app')

@push('content')

    <!-- Slider Section Start -->
    <div class="rs-slider style1">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
            <div class="slider-content slide1">
                <div class="container">
                    <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Senate Building</div>
                    <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Adeleke University</h1>
                </div>
            </div>
            <div class="slider-content slide2">
                <div class="container">
                    <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">World Leading University</div>
                    <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Adeleke University</h1>
                    <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        <a class="readon2 banner-style" href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Services Section Start -->
    <div class="rs-services style1">
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-6">
                <div class="service-item overly1">
                    <img src="{{image_url('services/1.jpg')}}" alt="">
                    <div class="content-part">
                        <img src="{{image_url('services/icons/1.png')}}" alt="">
                        <h4 class="title"><a href="#">University Life</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item overly2">
                    <img src="{{ image_url('services/1.jpg')}}" alt="">
                    <div class="content-part">
                        <img src="{{image_url('services/icons/2.png')}}" alt="">
                        <h4 class="title"><a href="#">Graduation</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item overly3">
                    <img src="{{ image_url('services/1.jpg')}}" alt="">
                    <div class="content-part">
                        <img src="{{image_url('services/icons/3.png')}}" alt="">
                        <h4 class="title"><a href="#">Athletics</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item overly4">
                    <img src="{{ image_url('services/1.jpg')}}" alt="">
                    <div class="content-part">
                        <img src="{{image_url('services/icons/1.png')}}" alt="">
                        <h4 class="title"><a href="#">Social</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style2 pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr-65 md-pr-15 md-mb-50">
                    <div class="about-intro">
                        <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="sub-title primary">About Adeleke University</div>
                            <h2 class="title mb-21 white-color">Welcome to Adeleke University</h2>
                            <div class="desc big white-color">Adeleke University is a private faith-based learning institution located in a serene and nature friendly atmosphere of 520 acres of land in the historic town of Ede, Osun State, South-Western part of Nigeria.</div>
                        </div>
                        <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <a class="readon2" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 lg-pl-0 ml--25 md-ml-0">
                    <div class="row rs-counter couter-area mb-40">
                        <div class="col-md-4">
                            <div class="counter-item one">
                                <h2 class="number rs-count kplus">2</h2>
                                <h4 class="title mb-0">Students</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-item two">
                                <h2 class="number rs-count">3.50</h2>
                                <h4 class="title mb-0">Average CGPA</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-item three">
                                <h2 class="number rs-count percent">95</h2>
                                <h4 class="title mb-0">Graduates</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row grid-area">
                        <div class="col-md-6 sm-mb-30">
                            <div class="image-grid">
                                <img src="{{image_url('about/style2/grid1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-grid">
                                <img src="{{image_url('about/style2/grid2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

@endpush
