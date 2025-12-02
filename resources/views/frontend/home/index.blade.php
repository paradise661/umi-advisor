@section('seo')
    @include('frontend.seo', [
        'name' => $settings['homepage_title'] ?? '',
        'title' => $settings['homepage_seo_title'] ?? '',
        'description' => $settings['home_seo_description'] ?? '',
        'keyword' => $settings['homepage_seo_keywords'] ?? '',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')




    <!-- banner-home start -->
    <section class="banner-home overflow-hidden pt-lg-100 pt-md-90 pt-sm-80 pt-xs-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="banner-home__content pb-lg-60 pb-md-50 pb-sm-45 pb-xs-40 wow fadeInLeft" data-wow-delay=".5s">
                        <h6 class="sub-title color-white mb-20 mb-sm-15 mb-xs-10 d-inline-block">{{ $sliders->short_description }}</h6>
                        <h1 class="title color-white fw-bold mb-20 mb-sm-15 mb-xs-10">{{ $sliders->title }}</h1>

                            <div class="description font-la color-white mb-45 mb-md-30 mb-sm-25 mb-xs-20">
                                <p>{!! $sliders->description !!}</p>
                            </div>

                            <div class="theme-btn__wrapper d-flex flex-wrap">
                                <a href="/contact-us" class="theme-btn fw-600 btn-red">Read more <i class="far fa-chevron-double-right"></i></a>
                                {{-- <a href="about.html" class="theme-btn fw-600 btn-white-border">Read More <i class="far fa-chevron-double-right"></i></a> --}}
                            </div>
                        </div>

                    </div>

                <div class="col-xl-6">
                    <div class="banner-home__media">
                        <img src="assets/img/banner/banner-start.svg" class="img-fluid start" alt="">
                        {{-- <img src="assets/img/banner/banner-home.png" class="img-fluid" alt=""> --}}
                        <img src="{{ $sliders->image }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-home end -->

    <div class="our-company-financial overflow-hidden">
        <div class="overly">
            <div class="container"></div>
        </div>
        <!-- financial-area start -->
        <section class="financial pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
            <div class="container">
                <div class="row mb-minus-30">
                    <div class="col-xl-4 col-md-6">
                        <div class="financial__item d-flex mb-30 wow fadeInUp" data-wow-delay=".3s" style="background-image: url(assets/img/home/financial__item-bg.png)">
                            <div class="icon">
                                <img src="assets/img/icon/growth.svg" alt="">
                                <!-- <i class="fal fa-analytics"></i> -->
                            </div>

                                <div class="text">
                                    <h6 class="title color-pd_black mb-10 mb-xs-5">{{ $settings['home_counter_students_title'] }}</h6>

                                    <div class="description font-la">
                                        <p>{{ $settings['home_counter_students'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="financial__item d-flex mb-30 wow fadeInUp" data-wow-delay=".5s" style="background-image: url(assets/img/home/financial__item-bg.png)">
                                <div class="icon">
                                    <img src="assets/img/icon/planning-1.svg" alt="">
                                    <!-- <i class="fal fa-analytics"></i> -->
                                </div>

                                <div class="text">
                                    <h6 class="title color-pd_black mb-10 mb-xs-5">{{ $settings['home_counter_scholarship_title'] }}</h6>

                                    <div class="description font-la">
                                        <p>{{ $settings['home_counter_scholarship'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="financial__item d-flex mb-30 wow fadeInUp" data-wow-delay=".7s" style="background-image: url(assets/img/home/financial__item-bg.png)">
                                <div class="icon">
                                    <img src="assets/img/icon/international.svg" alt="">
                                    <!-- <i class="fal fa-analytics"></i> -->
                                </div>

                                <div class="text">
                                    <h6 class="title color-pd_black mb-10 mb-xs-5">{{ $settings['home_counter_enrolled_title'] }}</h6>

                                    <div class="description font-la">
                                        <p>{{ $settings['home_counter_enrolled'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- financial-area end -->

            <!-- our-company start -->
            <section class="our-company pb-xs-80 pb-100 overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="our-company__meida wow fadeInUp" data-wow-delay=".3s">
                                <img src="{{ $about_us->image_1 }}" alt="" class="img-fluid">

                                <div class="years-experience overflow-hidden bg-red mt-20 mt-sm-10 mt-xs-10 text-center">
                                    <div class="number mb-5 color-white">
                                        <span class="counter">23</span><sup>+</sup>
                                    </div>

                                    <h5 class="title color-white">Years Experience</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="our-company__meida border-radius wow fadeInUp" data-wow-delay=".5s" style="height: 505px;">
                                <img src="{{ $about_us->image_2 }}" alt="" class="img-fluid">

                                {{-- <div class="horizental-bar bg-red"></div> --}}
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35 wow fadeInUp" data-wow-delay=".7s">
                                <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt="">{{ $about_us->title ?? 'About us' }}</span>
                                <h2 class="title color-pd_black mb-20 mb-sm-15 mb-xs-10">{{ $about_us->short_description }}</h2>

                                <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                                    <p>{!! $about_us->description !!}</p>
                                </div>

                                <div class="client-feedback d-flex flex-column flex-sm-row">
                                    <div class="client-feedback__item client-feedback__item-two text-center">
                                        <div class="client-feedback__item-header">
                                            <span class="color-red font-la fw-600 text-uppercase">Success Project</span>
                                        </div>

                                        <div class="client-feedback__item-body">
                                            <div class="number mb-10 mb-xs-5 color-pd_black fw-600">+<span class="counter">95</span>%</div>
                                            <div class="description font-la mb-10 mb-xs-5">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                                            </div>
                                            <div class="starts">
                                                <ul>
                                                    <li><span></span></li>
                                                    <li><span></span></li>
                                                    <li><span></span></li>
                                                    <li><span></span></li>
                                                    <li><span></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="client-feedback__item client-feedback__item-two text-center">
                                        <div class="client-feedback__item-header">
                                            <span class="color-red font-la fw-600 text-uppercase">Customer Review</span>
                                        </div>

                                    <div class="client-feedback__item-body">
                                        <div class="number mb-10 mb-xs-5 color-pd_black fw-600">+<span class="counter">4.7</span></div>
                                        <div class="description font-la mb-10 mb-xs-5">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                                        </div>
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-company end -->
    </div>

    <!-- planning-success start -->
    <section class="planning-success pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-130 overflow-hidden" style="background-image: url(assets/img/home/planning-success-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                    <div class="planning-success__content mb-xs-35 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="title mb-20 mb-sm-15 mb-xs-10 color-white">Good Business Planning Ensures Success.</h2>

                            <div class="description font-la color-white mb-40 mb-sm-30 mb-xs-20">
                                <p>{{ $service_section->short_description }}</p>
                            </div>

                            <a href="{{ route('frontend.service') }}" class="theme-btn btn-sm btn-red">View All Services <i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>

                <div class="col-sm-3">
                    <div class="planning-success__video wow fadeInUp" data-wow-delay=".5s">
                        <a href="https://www.youtube.com/watch?v=9xwazD5SyVg" class="popup-video mx-auto" data-effect="mfp-move-from-top"><i class="icon-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- planning-success end -->

    <!-- why-choose start -->
    <section class="why-choose why-choose__home pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose__content why-choose__content-home wow fadeInUp" data-wow-delay=".3s">
                        <div class="why-choose__text">
                            <span class="sub-title d-block fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> {{$settings['services_title']}}</span>
                            <h2 class="title color-pd_black">{{$settings['services_subtitle']}}</h2>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-6">
                        <div class="why-choose__content why-choose__content-home mt-md-25 mt-sm-20 mt-xs-20 wow fadeInUp" data-wow-delay=".5s">
                            <div class="description font-la">
                                <p>{{$settings['services_description']}}</p>
                            </div>

                            <a href="{{ route('frontend.service') }}" class="theme-btn btn-sm btn-red mt-30 mt-sm-25 mt-xs-20">{{$settings['services_button']}} <i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
    @php
        $icons = [
            '<i class="icon-consultation"></i>',
            '<i class="icon-lawyer"></i>',
            '<i class="icon-financial"></i>',
            '<i class="icon-management"></i>',
        ];
    @endphp
                <div class="row">
                    <div class="col-12">
                        <div class="why-choose__item-wrapper why-choose__item-two-wrapper d-grid justify-content-between mt-60 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp" data-wow-delay=".7s">
                            @foreach ($services as $key => $service)


                                <div class="why-choose__item why-choose__item-two" style="background-image: url(assets/img/home/why-choose__item-two-overly.png);">
                                    <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">


                                        {!! $icons[$key % count($icons)] !!}

                                    </div>

                                    <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">{{ $service->title }}</h6>

                                    <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                        <p>{!! $service->description !!}</p>
                                    </div>

                                    <a href="{{ route('frontend.servicesingle', $service->slug) }}" class="color-red d-block">Read More <i class="far fa-chevron-double-right"></i></a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why-choose end -->

    <!-- get-free end -->
    {{-- <section class="get-free get-free-home overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="get-free__content-wrapper overflow-hidden" style="background-image: url(assets/img/services/get-free-bg.png);">
                        <div class="get-free__content d-flex align-items-center justify-content-between">
                            <div class="get-free__content-text wow fadeInUp" data-wow-delay=".3s">
                                <h2 class="title mb-10 mb-xs-5 color-white">Get Free Quote</h2>

                                    <div class="description color-white font-la fw-500">
                                        Perfect solution for your Company
                                    </div>
                                </div>

                                <div class="get-free__content-form wow fadeInUp" data-wow-delay=".3s">
                                    <form class="d-flex flex-column flex-lg-row">
                                        <div class="single-personal-info">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="single-personal-info">
                                            <input type="email" placeholder="Your e-mail">
                                        </div>

                                    <button type="submit" class="theme-btn btn-sm">Get Quote <i class="far fa-chevron-double-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- get-free end -->

    <!-- work-process end -->
    {{-- <section class="work-process work-process-home bg-dark_red pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pricing__content mb-60 mb-sm-40 mb-xs-30 text-center wow fadeInUp" data-wow-delay=".3s">
                        <span class="sub-title d-block fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> Our Work Process</span>
                        <h2 class="title color-pd_black">How Our Services Work</h2>
                    </div>
                </div>
            </div>

                <div class="row mb-minus-30 last_no_bullet">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="work-process__item work-process__item-two mb-30 text-center wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon-wrapper d-flex">
                                <div class="icon">
                                    <i class="icon-research"></i>
                                </div>

                                <button class="theme-btn color-pd_black" style="background-image: url(assets/img/home/theme-btn-overly-1.png)">Step - 1</button>
                            </div>

                            <div class="text">
                                <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Research Your Problem</h6>

                                <div class="description font-la">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="work-process__item work-process__item-two mb-30 text-center wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon-wrapper d-flex">
                                <div class="icon">
                                    <i class="icon-worker-1"></i>
                                </div>

                                <button class="theme-btn color-pd_black" style="background-image: url(assets/img/home/theme-btn-overly-1.png)">Step - 2</button>
                            </div>

                            <div class="text">
                                <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Identifying Problem</h6>

                                <div class="description font-la">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="work-process__item work-process__item-two mb-30 text-center wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon-wrapper d-flex">
                                <div class="icon">
                                    <i class="icon-outline"></i>
                                </div>

                                <button class="theme-btn color-pd_black" style="background-image: url(assets/img/home/theme-btn-overly-1.png)">Step - 3</button>
                            </div>

                            <div class="text">
                                <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Solutions Your Problem</h6>

                                <div class="description font-la">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="work-process__item work-process__item-two mb-30 text-center wow fadeInUp" data-wow-delay=".9s">
                            <div class="icon-wrapper d-flex">
                                <div class="icon">
                                    <i class="icon-target-2"></i>
                                </div>

                                <button class="theme-btn color-pd_black" style="background-image: url(assets/img/home/theme-btn-overly-1.png)">Step - 4</button>
                            </div>

                            <div class="text">
                                <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Success Your Business</h6>

                            <div class="description font-la">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- work-process end -->

    <!-- our-portfolio-home start -->
    <section class="our-portfolio-home pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="our-portfolio-home__content text-center mb-60 mb-sm-50 mb-xs-40 wow fadeInUp" data-wow-delay=".3s">
                        <span class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block color-red"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> {{ $settings['courses_title'] }}</span>
                        <h2 class="title color-pd_black">{{ $settings['courses_subtitle'] }}</h2>
                    </div>
                </div>
            </div>

                <div class="row mb-minus-30">
                    @foreach ($courses as $course)


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="our-portfolio-home__item mb-30 wow fadeInUp" data-wow-delay=".3s">
                                <div class="featured-thumb">
                                    <div class="media overflow-hidden">
                                        <img src="{{ $course->image }}" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="content d-flex flex-row">
                                    <div class="left">
                                        <div class="post-author mb-5 mb-xs-5 text-uppercase">
                                            {{-- <a href="blog-details.html">Business, Finance</a> --}}
                                        </div>

                                        <h5 class="color-pd_black mb-15 mb-xs-10"><a href="blog-details.html">{{ $course->title }}</a></h5>
                                        <div class="description font-la">
                                            <p>{{ $course->short_description }}</p>
                                        </div>
                                    </div>

                                    <div class="btn-link-share">
                                        <a href="{{ route('frontend.coursesingle', $course->slug) }}" class="theme-btn color-pd_black" style="background-image: url(assets/img/home/theme-btn-overly.png)">View Details <i class="icon-arrow-right-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach 


                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="our-portfolio-home__read-more text-center mt-50 mt-md-40 mt-sm-35 mt-xs-30 wow fadeInUp" data-wow-delay=".3s">
                            <a href="{{ route('frontend.course') }}" class="theme-btn  btn-border">View All Courses <i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-portfolio-home end -->

        <!-- our-team-home-1 start -->
        <section class="our-team our-team-home-1 bg-dark_red pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="our-team__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp" data-wow-delay=".3s">
                            <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> {{ $settings['teams_title'] }}</span>
                            <h2 class="title color-d_black">{{ $settings['teams_subtitle'] }}</h2>
                        </div>
                    </div>
                </div>

                <div class="row mb-minus-30">
                    @foreach ($teams as $team)


                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="team-item team-item-three text-center mb-30 d-block overflow-hidden wow fadeInUp" data-wow-delay=".3s">
                                <div class="media">
                                    <img src="{{ $team->image }}" class="img-fluid" alt="">

                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{ $team->whatsapp }}"><i class="fab fa-whatsapp"></i></a></li>
                                            <li><a href="{{ $team->email }}"><i class="fab fa-google"></i></a></li>
                                            {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
                                            {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                            {{-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>

                                <div class="text d-flex align-items-center justify-content-center">
                                    <div class="left">
                                        <h5 class="title color-white">{{ $team->name }}</h5>
                                        <span class="position color-white font-la fw-500">{{ $team->position }}</span>
                                    </div>
                                </div>

                                {{-- <a href="team-details.html" class="theme-btn text-uppercase">View Details <i class="far fa-chevron-double-right"></i></a> --}}
                            </div>
                        </div>
                    @endforeach
                    <!-- team-item -->



                    <!-- team-item -->
                </div>
            </div>
        </section>
        <!-- our-team-home-1 end -->

        <!-- testimonial start -->
        <section class="testimonial test pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-9">
                        <div class="employee-friendly__content wow fadeInUp" data-wow-delay=".3s">
                            <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt="">{{ $settings['testioninal_title'] }}</span>
                            <h2 class="title color-pd_black">{{ $settings['testioninal_subtitle'] }}</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="slider-controls slider-controls-two mt-xs-15 wow fadeInUp" data-wow-delay=".3s">
                            <div class="testimonial-slider-arrows d-flex align-content-center justify-content-sm-end"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider-home-1 mt-65 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp" data-wow-delay=".5s">
                            @foreach ($testimonials as $testimonial)
                                <div class="slider-item active">
                                    <div class="testimonial__item testimonial-item-three">
                                        <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-30 mb-sm-25 mb-xs-20">
                                            <div class="left d-flex align-items-center">
                                                <div class="media overflow-hidden">
                                                    <img src="{{ $testimonial->image }}" class="img-fluid" alt="">
                                                </div>

                                                <div class="meta">
                                                    <div class="starts">
                                                        <ul>
                                                            <li><span></span></li>
                                                            <li><span></span></li>
                                                            <li><span></span></li>
                                                            <li><span></span></li>
                                                            <li><span></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="right">
                                                <i class="fal fa-quote-right"></i>
                                            </div>
                                        </div>

                                        <div class="description font-la mb-25">
                                            <p>{!! $testimonial->description !!}</p>
                                        </div>

                                        <div class="testimonial__item-footer d-flex justify-content-between">
                                            <div class="socail-link">
                                                {{-- <span class="name"><span>- </span></span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial end -->

        <div class="can-help-overly-home overflow-hidden">
            <div class="can-help-overly">
                <div class="container"></div>
            </div>
            <!-- can-help start -->
            <section class="can-help can-help-home-1 pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
                <div class="can-help-background" style="background-image: url(assets/img/home/can-help-background.png)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="can-help__content  mb-sm-40 mb-xs-40 mb-md-45 mb-lg-50 wow fadeInUp" data-wow-delay=".3s">
                                <h2 class="title color-white mb-sm-15 mb-xs-10 mb-20">{{ $settings['contact_form_title'] }}</h2>

                                <div class="description font-la mb-md-25 mb-sm-25 mb-xs-20 mb-lg-30 mb-40 color-white">
                                    <p>{{ $settings['contact_form_subtitle'] }}</p>
                                </div>

                                <div class="can-help__content-btn-group d-flex flex-column flex-sm-row">
                                    <a href="tel:+1235568824" class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                                        <div class="icon color-red">
                                            <i class="icon-call"></i>
                                            <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                        </div>
                                        <div class="text">
                                            <span class="font-la mb-10 d-block fw-500 color-white">Call Us Everyday</span>
                                            <h5 class="fw-500 color-white">{{ $settings['contact_phone'] }}</h5>
                                        </div>
                                    </a>

                                    <a href="mailto:consulter@gmail.com" class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                                        <div class="icon color-red">
                                            <i class="icon-email-1"></i>
                                            <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                        </div>
                                        <div class="text">
                                            <span class="font-la mb-10 d-block fw-500 color-white">Email Drop Us</span>
                                            <h5 class="fw-500 color-white">{{ $settings['contact_email'] }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <div class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85 wow fadeInUp" data-wow-delay=".5s">
                                <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                                    <h6 class="sub-title fw-500 color-red text-uppercase mb-15"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt="">{{ $settings['contact_title'] }}</h6>
                                    <h3 class="title color-d_black">{{ $settings['contact_section_title'] }}</h3>
                                </div>

                                <form action="{{ route('frontend.contact.submit.home') }}" method="POST">
                                    @csrf
                                    <div class="single-personal-info">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                    <div class="single-personal-info">
                                        <input type="email" placeholder="Your e-mail" name="email">
                                    </div>
                                    <div class="single-personal-info">
                                        <input type="text" placeholder="Subject" name="course">
                                    </div>
                                    <div class="single-personal-info">
                                        <textarea placeholder="Your Massage" name="message"></textarea>
                                    </div>

                                    <button type="submit" class="theme-btn btn-sm btn-red">Free Consultant <i class="far fa-chevron-double-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- can-help end -->

            <!-- blog-news start -->
            <section class="blog-news pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="blog-news__content text-center wow fadeInUp" data-wow-delay=".3s">
                                <span class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block color-red"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> {{ $settings['blogs_title'] }}</span>
                                <h2 class="title color-d_black">{{ $settings['blogs_subtitle'] }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="blog-news__bottom mt-60 mt-sm-50 mt-xs-40">
                        <div class="row mb-minus-30">
                            @foreach ($blogs as $blog)
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="blog-item blog-item-three mb-30 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="blog-featured-thumb mb-xs-30 mb-sm-30 mb-md-35 mb-lg-40 mb-50">
                                            <div class="media overflow-hidden">
                                                <img src="{{ $blog->image }}" class="img-fluid" alt="">
                                            </div>
                                            {{-- <div class="date">
                                                <span>27</span>
                                                <span>April</span>
                                                <span>2020</span>
                                            </div> --}}
                                        </div>

                                        <div class="content pr-sm-25 pr-xs-15 pl-xs-15 pl-sm-25 pr-xs-15 pr-30 pb-30 pl-30">
                                            <div class="post-author mb-5">
                                                {{-- <a href="blog.html">{{ $blog->short_description }}</a> --}}
                                            </div>

                                            <h4><a href="blog.html">{{ $blog->title }}</a></h4>

                                            <div class="btn-link-share mt-xs-10 mt-sm-10 mt-15">
                                                <a href="{{ route('frontend.blogsingle', $blog->slug) }}" class="theme-btn btn-border">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-news end -->
        </div>
@endsection
