@section('seo')
    @include('frontend.seo', [
        'name' => $about_us->seo_title ?? '',
        'title' => $about_us->seo_title ?? $about_us->title,
        'description' => $about_us->meta_description ?? '',
        'keyword' => $about_us->meta_keywords ?? '',
        'schema' => $about_us->seo_schema ?? '',
        'created_at' => $about_us->created_at,
        'updated_at' => $about_us->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <style>
        .objectives-section {
            background-color: #fdf6f8;
            /* light green background */
        }

        /* .objectives-wrapper {
                                                                                                                                                                                                                    max-width: 1000px;
                                                                                                                                                                                                                } */
        /* Title */
        .objectives-heading {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            position: relative;
            display: inline-block;
            margin-bottom: 25px;
        }

        /* Green underline */
        .objectives-heading::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 70px;
            height: 4px;
            background-color: #2ecc71;
            border-radius: 2px;
        }

        /* Content */
        .objectives-content ul>li {
            list-style-type: disc !important;
            display: list-item !important;
            position: static !important;
        }

        .objectives-content ol>li {
            list-style-type: decimal !important;
            display: list-item !important;
            position: static !important;
        }

        .objectives-content ul,
        .objectives-content ol {
            padding-left: 22px !important;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .objectives-heading {
                font-size: 26px;
            }
        }

        .objectives-heading {
            color: #333;
        }

        .objectives-content {
            color: #444;
        }

        .line-clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .read-more-btn {
            background: none;
            border: none;
            color: #00b3ea;
            font-weight: 600;
            padding: 0;
            margin-top: 6px;
            cursor: pointer;
        }

        .read-more-btn:hover {
            text-decoration: underline;
        }

        .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 12px;
        }

        .vision-icon {
            width: 64px;
            height: 64px;
            object-fit: contain;
            display: block;
        }
    </style>

    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">About Us</div>
                        <div class="page-title">
                            <h1>{{ $about_us->title ?? '' }}</h1>
                        </div>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $about_us->title ?? '' }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img class="img-fluid start" src="assets/img/page-banner/page-banner-start.svg" alt="">
                        <img class="img-fluid" src="{{ $about_us->banner_image ? asset($about_us->banner_image) : '' }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-company start -->
    <section class="about-modern">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT VISUAL -->
                <div class="col-lg-6">
                    <div class="about-visual">

                        <div class="about-main-img animate-slide-left">
                            <img src="{{ $about_us->image_1 ? $about_us->image_1 : '' }}" alt="About us">
                        </div>

                        <div class="about-float-card animate-fade-up">
                            <h3 class="text-white">1<span>+</span></h3>
                            <p>Years Experience</p>
                        </div>

                        <div class="about-secondary-img animate-slide-up">
                            <img src="{{ $about_us->image_2 ? $about_us->image_2 : '' }}" alt="Team">
                        </div>

                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-6">
                    <div class="about-info animate-slide-right">
                        <span class="about-tag">ABOUT US</span>
                        <h2>Who we are?</h2>
                        <div class="about-text">
                            {!! $about_us->description ?? '' !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- objectives section --}}
    <section class="objectives-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="objectives-wrapper">
                        <h2 class="objectives-heading">
                            {{ $objectives->title ?? 'Objectives' }}
                        </h2>

                        <div class="objectives-content">
                            {!! $objectives->description ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- our mission and vision --}}
    <section class="py-5 "
        style="background-image: url({{ asset('frontend/assets/image/missionbg.png') }});
                  background-position:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="row">
                <!-- Mission Card -->
                <div class="col-md-6 py-3">
                    <div class="service-card-home p-5 h-100 vision-align card">
                        <div class="icon mb-2">
                            <img class="vision-icon" src="{{ $our_mission->image_1 }}" alt="Mission" loading="lazy">

                        </div>

                        <h5 class="fw-bold ">
                            {{ $our_mission->title ?? 'Our Mission' }}
                        </h5>

                        <p class="text-justify mission-desc line-clamp-4" style="color:black;">
                            {{ strip_tags($our_mission->description ?? 'Our mission') }}
                        </p>

                        <button class="read-more-btn d-none mt-2">Read More ></button>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="col-md-6 py-3">
                    <div class="service-card-home p-5 h-100 vision-align card">
                        <div class="icon mb-2">
                            <img class="vision-icon"
                                src="{{ asset($our_vision->image_1 ?? 'frontend/assets/image/our-vision.png') }}"
                                alt="Vision">
                        </div>

                        <h5 class="fw-bold ">
                            {{ $our_vision->title ?? 'Our Vision' }}
                        </h5>

                        <p class="text-justify mission-desc line-clamp-4" style="color:black;">
                            {{ strip_tags($our_vision->description ?? 'Our vision') }}
                        </p>

                        <button class="read-more-btn d-none mt-2">Read More ></button>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section
        class="our-team our-team-home-1 bg-dark_red pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-team__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp"
                        data-wow-delay=".3s">
                        <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                class="img-fluid mr-10" src="assets/img/home/line.svg" alt="">
                            {{ $settings['teams_title'] }}</span>
                        <h2 class="title color-d_black">{{ $settings['teams_subtitle'] ?? '' }}</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                @foreach ($teams as $team)
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="team-item team-item-three text-center mb-30 d-block overflow-hidden wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="media">
                                <img class="img-fluid" src="{{ $team->image ? $team->image : '' }}" alt="">

                                <div class="social-profile">
                                    <ul>
                                        <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $team->whatsapp }}"><i class="fab fa-whatsapp"></i></a></li>
                                        <li><a href="{{ $team->email }}"><i class="fab fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="text d-flex align-items-center justify-content-center">
                                <div class="left">
                                    <h5 class="title color-white">{{ $team->name ?? '' }}</h5>
                                    <span class="position color-white font-la fw-500">{{ $team->position ?? '' }}</span>
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

    <!-- testimonial start -->
    <section
        class="testimonial test pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                    <div class="employee-friendly__content wow fadeInUp" data-wow-delay=".3s">
                        <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                class="img-fluid mr-10" src="assets/img/home/line.svg"
                                alt="">{{ $settings['testioninal_title'] ?? '' }}</span>
                        <h2 class="title color-pd_black">{{ $settings['testioninal_subtitle'] ?? '' }}</h2>
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
                                    <div class="testimonial-slider-home-1 mt-65 mt-md-50 mt-sm-40 mt-xs-30 wow fadeInUp"
                        data-wow-delay=".5s">

                        @foreach ($testimonials as $testimonial)
                            <div class="slider-item {{ $loop->first ? 'active' : '' }}">
                                <div class="testimonial__item testimonial-item-three">

                                    <div
                                        class="testimonial__item-header d-flex justify-content-between align-items-center mb-30 mb-sm-25 mb-xs-20">
                                        <div class="left d-flex align-items-center">
                                            <div class="media overflow-hidden">
                                                <img class="img-fluid" src="{{ $testimonial->image }}" alt="">
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

                                    <div class="description text-justify line-clamp-5 font-la mb-10 testi-des">
                                        <p>{!! $testimonial->description !!}</p>
                                    </div>

                                    <!-- Button always exists, JS decides visibility -->
                                    <button type="button"
                                        class="btn-link testimonial-btn color-red d-none border-0 bg-transparent p-0 mb-25 open-testimonial-modal"
                                        data-bs-toggle="modal" data-bs-target="#testimonialModal"
                                        data-image="{{ $testimonial->image }}"
                                        data-name="{{ $testimonial->name ?? 'name' }}"
                                        data-role="{{ $testimonial->role ?? 'Client' }}"
                                        data-description="{!! e($testimonial->description) !!}">
                                        Read More
                                        <i class="far fa-chevron-double-right"></i>
                                    </button>

                                    <div class="testimonial__item-footer d-flex justify-content-between">
                                        <div class="socail-link">
                                            <span class="name"><strong>{{ $testimonial->name ?? '' }}</strong></span>
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

    <script>
        document.querySelectorAll('.mission-desc').forEach(desc => {
            const btn = desc.nextElementSibling;

            // Check if text overflows (needs Read More)
            if (desc.scrollHeight > desc.clientHeight) {
                btn.classList.remove('d-none');
            }

            btn.addEventListener('click', () => {
                if (desc.classList.contains('line-clamp-4')) {
                    desc.classList.remove('line-clamp-4');
                    btn.textContent = '< Read Less';
                } else {
                    desc.classList.add('line-clamp-4');
                    btn.textContent = 'Read More >';
                }
            });
        });
    </script>
@endsection
