@section('seo')
    @include('frontend.seo', [
    'name' => $service_page->seo_title ?? '',
    'title' => $service_page->seo_title ?? $service_page->title,
    'description' => $service_page->meta_description ?? '',
    'keyword' => $service_page->meta_keywords ?? '',
    'schema' => $service_page->seo_schema ?? '',
    'created_at' => $service_page->created_at,
    'updated_at' => $service_page->updated_at,
])
@endsection
@extends('layouts.frontend.master')
@section('content')
    {{-- @if ($service_page)
        <div class="hero-banner2 position-relative ">
            <div class="row g-0 text-bannner-section">
                <div class="col-md-6 d-flex justify-content-center align-items-center py-5">
                    <div class="text-center page-banner-lft px-4">
                        <h1 class="text-white font-weight-bold">{{ $servicesingle->title ?? 'About Us' }}</h1>
                        <p class="breadcrumb-text text-white">
                            <a href="{{ route('frontend.home') }}" class="text-white text-decoration-none">Home</a> /
                            <a href="{{ route('frontend.service') }}"
                                class="text-white text-decoration-none">{{ $service_page->title ?? 'About Us' }}</a> /
                            <a href="#"
                                class="text-white text-decoration-none">{{ $servicesingle->title ?? 'About Us' }}</a>
                        </p>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-container-banner">
                        <div class="img-wrapper-2">
                            <img src="{{ asset($service_page->banner_image) }}" alt="Creative Design" class="background-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 py-5">
                    <div class="country-main-section ">
                        <div class="country-img-wrapper">
                            <img src="{{ asset($servicesingle->image_1) }}" class="country-image" alt="">
                        </div>
                        <div class="country-content pt-3">
                            <h2 class="heading-css">{{ $servicesingle->title }}
                            </h2>
                            <div class="text-css mb-3">
                                <p>{!! $servicesingle->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 py-3">
                    <div class="sticky-sidebar" style="position: sticky; top: 85px;">
                        <p class="course-detail-heading">Top Services</p>
                        @foreach ($services as $course)
                            <div class="shadow course-detail-list-card d-flex gap-3 position-relative">
                                <div class="main-img-course-detail-container">
                                    <img src="{{ asset($course->image_1 ?? 'frontend/assets/images/default.jpg') }}"
                                        alt="{{ $course->title }}" class="main-img-course-detail">
                                </div>
                                <div class="course-detail-card-text">
                                    <div class="fotter-headings">
                                        {!! $course->title !!}
                                    </div>
                                    <div class="line-clamp-2 text-css">
                                        {{ $course->short_description }}
                                    </div>
                                </div>
                                <a class="stretched-link" href="{{ route('frontend.servicesingle', $course->slug) }}"></a>
                            </div>
                        @endforeach
                    </div>
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
                                    <h1>{{ $servicesingle->title }}</h1>
                                </div>
                            </div>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $service_page->title }}</li>
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
            <!-- team-area start -->
    <section class="services-details pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-115 overflow-hidden">
        <div class="container">
            <div class="row" data-sticky_parent>
                <div class="col-xl-8" data-sticky_column>
                    <div class="media mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                        <img src="{{ $servicesingle->image }}" alt="">
                    </div>

                    <div class="services-details__content">
                        <h2>{{ $servicesingle->short_description }}</h2>

                        <p>{!! $servicesingle->description !!}</p>

                        {{-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis
                            aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>

                        <ul>
                            <li>Instant Business Growth</li>
                            <li>Easy Customer Service</li>
                            <li>24/7 Quality Service</li>
                            <li>Quality Cost Service</li>
                        </ul>

                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis
                            aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>

                        <hr>

                        <h4>Working Challenge</h4>

                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

                        <figure>
                            <img src="assets/img/services-details/services-details-1.png" alt="">

                            <ul>
                                <li>Will give you a complete account</li>
                                <li>Easy Customer Service</li>
                                <li>Excepteur sint occaecat cupidatat non.</li>
                                <li>The master-builder of human happiness</li>
                                <li>Duis aute irure dolor in reprehenderit</li>
                                <li>complete account of the system</li>
                            </ul>
                        </figure>

                        <hr>

                        <h4>Frequently Asked Questions</h4>

                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p> --}}
                    </div>

                    {{-- <div class="faq mt-40 mt-md-35 mt-sm-25 mt-xs-20" id="faq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="h-faq-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="true" aria-controls="faq-1">
                                    <i class="icon-question-4"></i> What should i included my personal details? 
                                </button>
                            </h2>

                            <div id="faq-1" class="accordion-collapse collapse show" aria-labelledby="h-faq-1" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="h-faq-2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                                    <i class="icon-question-4"></i> How do consultants solve problem?
                                </button>
                            </h2>

                            <div id="faq-2" class="accordion-collapse collapse" aria-labelledby="h-faq-2" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="h-faq-3">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                                    <i class="icon-question-4"></i> We can help your business to grow?
                                </button>
                            </h2>

                            <div id="faq-3" class="accordion-collapse collapse" aria-labelledby="h-faq-3" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-xl-4">
                    <div class="main-sidebar" data-sticky_column>
                        <div class="single-sidebar-widget mb-40 pt-30 pr-30 pb-40 pl-30 pl-xs-20 pr-xs-20">
                            <h4 class="wid-title mb-30 mb-xs-20 color-d_black text-capitalize">Our provide</h4>

                            <div class="widget_categories">
                                <ul>
                                    @foreach ($more_services as $service)
                                    <li><a href="{{ route('frontend.servicesingle',$service->slug) }}">{{ $service->title }} <i class="fas fa-long-arrow-alt-right"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area end -->

@endsection    