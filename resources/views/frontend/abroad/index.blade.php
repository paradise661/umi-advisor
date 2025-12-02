@section('seo')
    @include('frontend.seo', [
        'name' => $abroad_page->seo_title ?? '',
        'title' => $abroad_page->seo_title ?? $abroad_page->title,
        'description' => $abroad_page->meta_description ?? '',
        'keyword' => $abroad_page->meta_keywords ?? '',
        'schema' => $abroad_page->seo_schema ?? '',
        'created_at' => $abroad_page->created_at,
        'updated_at' => $abroad_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    {{-- @if ($abroad_page)
        <div class="hero-banner2 position-relative ">
            <div class="row g-0 text-bannner-section">
                <div class="col-md-6 d-flex justify-content-center align-items-center py-5">
                    <div class="text-center page-banner-lft px-4">
                        <h1 class="text-white font-weight-bold">{{ $abroad_page->title ?? 'About Us' }}</h1>
                        <p class="breadcrumb-text text-white">
                            <a href="{{ route('frontend.home') }}" class="text-white text-decoration-none">Home</a> /
                            <a href="#"
                                class="text-white text-decoration-none">{{ $abroad_page->title ?? 'About Us' }}</a>
                        </p>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-container-banner">
                        <div class="img-wrapper-2">
                            <img src="{{ asset($abroad_page->banner_image) }}" alt="Creative Design" class="background-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <section class="py-5 page-bg-color ">
        <div class="container">
            <div class="row g-3 py-5">
                @foreach ($abroadstudies as $item)
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="3000">
                        <div class="country-card-container p-3 shadow rounded-lg bg-white position-relative">
                            <div class="country-img">
                                <img src="{{ asset($item->image) }}" alt="">
                                <div class="overlay"></div>
                            </div>
                            <div class="country-flag"><img src="{{ asset($item->image_1) }}" alt=""></div>
                            <div class="py-2">
                                <h3 class="pr-2 blog-heading">{{ $item->title }}</h3>
                                <p class="line-clamp-4">{{ $item->short_description }}</p>
                            </div>
                            <a href="{{ route('frontend.abroadsingle', $item->slug) }}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section> --}}
    <!-- page-banner start -->
            <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                                <div class="transparent-text">About Us</div>
                                <div class="page-title">
                                    <h1>{{ $abroad_page->title }}</h1>
                                </div>
                            </div>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $abroad_page->title }}</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="col-md-6">
                            <div class="page-banner__media mt-xs-30 mt-sm-40">
                                <img src="assets/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                                <img src="assets/img/page-banner/page-banner.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-team our-team-home-1 bg-dark_red pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="our-team__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center wow fadeInUp" data-wow-delay=".3s">
                            <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="assets/img/home/line.svg" class="img-fluid mr-10" alt=""> {{ $settings['countries_title'] }}</span>
                            <h2 class="title color-d_black">{{ $settings['countries_subtitle'] }}</h2>
                        </div>
                    </div>
                </div>

                <div class="row mb-minus-30">
                    @foreach ($abroadstudies as $abroad)
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="team-item team-item-three text-center mb-30 d-block overflow-hidden wow fadeInUp" data-wow-delay=".3s">
                                <div class="media">
                                    <img src="{{ $abroad->image }}" class="img-fluid" alt="">
                                    {{-- <div class="social-profile">
                                        <ul>
                                            <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{ $team->whatsapp }}"><i class="fab fa-whatsapp"></i></a></li>
                                            <li><a href="{{ $team->email }}"><i class="fab fa-google"></i></a></li>

                                        </ul>
                                    </div> --}}
                                </div>

                                <div class="text d-flex align-items-center justify-content-center">
                                    <div class="left">
                                        <a href="{{ route('frontend.abroadsingle',$abroad->slug) }}"><h5 class="title color-white">{{ $abroad->title }}</h5></a>
                                        {{-- <span class="position color-white font-la fw-500">{{ $team->position }}</span> --}}
                                    </div>
                                </div>

                                {{-- <a href="team-details.html" class="theme-btn text-uppercase">View Details <i class="far fa-chevron-double-right"></i></a> --}}
                            </div>
                        </div>
                    @endforeach
                    <!-- team-item -->
                </div>
            </div>
        </section>

@endsection
