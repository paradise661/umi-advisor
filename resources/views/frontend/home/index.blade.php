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
           {{-- @if ($sliders->count())
    <section class="md:py-5 pb-4 py-5 slider-section">
        <div class="container">
            <div id="homeSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false">
                <div class="carousel-inner">
                    @foreach($sliders as $key => $slider)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="row center">
                                 Text area 
                                <div class="col-lg-6 d-flex justify-items-start align-items-center">
                                    <div>
                                        <div class="heading-title mb-3">
                                            <h1>{{ $slider->title }},
                                                <span>{{ $slider->short_description }}</span>
                                            </h1>
                                        </div>
                                        <div class="text-css mb-3">
                                            {!! $slider->description !!}
                                        </div>
                                        <a class="d-flex align-items-center justify-content-start mb-5" href="/contact-us">
                                            <button class="custom-btn btn-8">
                                                <span>Contact Us <i class="ri-arrow-right-up-line"></i></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                 Image area 
                                <div class="col-lg-6 p-0">
                                    <div class="home-img-border">
                                        <div class="home-img-wrapper">
                                            <div class="img-line">
                                                <div class="position-relative img-zindex my-3 w-100">
                                                    <img class="home-banner-img d-block w-100"
                                                         src="{{ asset($slider->image) }}"
                                                         alt="slider image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  row end
                        </div>
                    @endforeach
                </div>

                Prev/Next buttons 
                <button id="prev-icon" class="carousel-control-prev" type="button" data-bs-target="#homeSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button id="next-icon" class="carousel-control-next" type="button" data-bs-target="#homeSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    @endif --}}
    @if ($sliders->count())
        <section class="md:py-5 pb-4 slider-section">
            <div class="container-fluid p-0">
                                        <div id="homeSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false">
                    <div class="carousel-inner">
                        @foreach($sliders as $key => $slider)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <!-- Background Image -->
                                <div class="slider-bg" style="background-image: url('{{ asset($slider->image) }}');">
                                    <div class="slider-overlay"></div>

                                    <!-- Text Content on top -->
                                    <div class="carousel-caption text-start d-flex flex-column justify-content-center h-100">
                                        <div class="heading-title mb-3">
                                            <h1 class="text-white fw-bold">
                                                {{ $slider->title }},
                                                <span>{{ $slider->short_description }}</span>
                                            </h1>
                                        </div>
                                        <div class="text-css mb-3 text-white">
                                            {!! $slider->description !!}
                                        </div>
                                            <a class="d-flex align-items-center justify-content-start mb-5" href="/contact-us">
                                                    <button class="custom-btn btn-8">
                                                            <span>Contact Us <i class="ri-arrow-right-up-line"></i></span>
                                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                        @endforeach
                                </div>

                                 <!--   Prev/Next buttons -->
                                <button id="prev-icon" class="carousel-control-prev" type="button" data-bs-target="#homeSlider" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button id="next-icon" class="carousel-control-next" type="button" data-bs-target="#homeSlider" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                            </div>
                        </section>
    @endif
            @foreach ($popup as $popups)
            <!-- Bootstrap Modal -->
            <div class="modal fade" id="popupModal{{ $popups->id }}" tabindex="-1" aria-labelledby="popupModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="d-flex">
                            <div class="modal-headerpopup">
                                <button class="btn-close red-close-btn" data-bs-dismiss="modal" type="button"
                                    aria-label="Close">
                                </button>
                            </div>
                        </div>
                        <div class="modal-body text-center">
                            @if ($popups->image)
                                <img class="img-fluid popup-img" src="{{ asset($popups->image) }}" alt="Popup Image"
                                    style=" object-fit: fill;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Auto Trigger Script -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var myModal = new bootstrap.Modal(document.getElementById('popupModal{{ $popups->id }}'));
                    myModal.show();
                });
            </script>
        @endforeach
            {{-- <video src="{{asset('frontend/assets/image/student.mp4')}}" controls></video> --}}
            {{-- counter section --}}
             <section class="counter-section service-section d-none d-md-block" >
                <div class="container">
                    <div class="row col-xl-7 justify-content-start align-items-center">
                        <div class="col-md-4 col-6">
                            <div class="homebanner-card p-3 text-center">
                                <div class=" d-flex align-items-center justify-content-center">
                                    <img class=" icon-image" src={{ $settings['home_counter_scholarship_img'] ? asset($settings['home_counter_scholarship_img']) : asset('frontend/assets/image/icon1.png') }} alt="">
                                </div>
                                <div class="homecard-text-num">
                                    <p>{{ $settings['home_counter_scholarship'] ?? '' }}</p>
                                </div>
                                <p class="text-css-counter d-flex align-items-center justify-content-center">
                                    {{ $settings['home_counter_scholarship_title'] ?? '' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="homebanner-card p-3 text-center">
                                <div class=" d-flex align-items-center justify-content-center">
                                    <img class=" icon-image" src={{ $settings['home_counter_students_img'] ? asset($settings['home_counter_students_img']) : asset('frontend/assets/image/icon1.png') }} alt="">
                                </div>
                                <div class="homecard-text-num">
                                    <p>{{ $settings['home_counter_students'] ?? '' }}</p>
                                </div>
                                <p class="text-css-counter d-flex align-items-center justify-content-center">
                                    {{ $settings['home_counter_students_title'] ?? '' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="homebanner-card p-3 text-center">
                                <div class=" d-flex align-items-center justify-content-center">
                                    <img class=" icon-image" src={{ $settings['home_counter_enrolled_img'] ? asset($settings['home_counter_enrolled_img']) : asset('frontend/assets/image/icon1.png') }} alt="">
                                </div>
                                <div class="homecard-text-num">
                                    <p>{{ $settings['home_counter_enrolled'] ?? '' }} </p>
                                </div>
                                <p class="text-css-counter d-flex align-items-center justify-content-center">
                                    {{ $settings['home_counter_enrolled_title'] ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

            {{-- @endif --}}
            <section class="service-section py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 d-flex justify-content-center align-items-center"data-aos="fade-right"  data-aos-duration="2000">
                            <div class="service-content-container">
                                <h6 class="my-2">{{ $settings['services_title'] ?? '' }}</h6>
                                <h3 class="my-2"> {{ $settings['services_subtitle'] ?? '' }}</h3>
                                <p class="text-css-counter">
                                    {{ $settings['services_description'] ?? '' }}
                                </p>
                                <a class="d-flex align-items-center justify-content-start my-3" href=""> <button
                                        class="custom-btn btn-8"><span>Explore All <i
                                                class="ri-arrow-right-up-line"></i></span></button></a>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left"  data-aos-duration="2000">
                            <div class="row">
                                @foreach ($services as $service)
                                    <div class="col-lg-6 py-2">
                                        <div class="service-card">
                                            <!-- Floating Arrow Icon -->
                                            <div class="arrow-icon">
                                                <i class="ri-arrow-right-up-line"></i>
                                            </div>
                                            <!-- Icon -->
                                            <div class="service-icon">
                                                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" />
                                            </div>
                                            <!-- Title -->
                                            <h3 class="line-clamp-1">{{ $service->title }}</h3>
                                            <!-- Description -->
                                            <div class="line-clamp-3"><p>{{($service->short_description) }}</p></div>
                                            <!-- Read More Link -->
                                            <a href="{{ route('frontend.servicesingle', $service->slug) }}" class="read-more pt-2">
                                                Read More <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- about us section --}}
            <section class="about-us-section py-5">
                <div class="container">
                    <div class="row">
                        {{-- Image --}}
                        <div class="col-lg-6 d-flex align-items-center justify-content-center"  data-aos="fade-up" data-aos-duration="2000">
                            <div class="about-us-img">
                                <img src="{{ asset($about_us->image_1) }}" alt="{{ $about_us->title }}">
                            </div>
                        </div>
                        {{-- Content --}}
                        <div class="col-lg-6 d-flex align-items-center justify-content-center"  data-aos="fade-up" data-aos-duration="2000">
                            <div class="service-content-container">
                                <h6 class="my-2">{{ $about_us->title ?? 'About us' }}</h6>
                                <h3 class="my-2">{{ $about_us->short_description }}</h3>
                                <div class="text-css-counter line-clamp-14">
                                    {!! $about_us->description !!}
                                </div>
                                {{-- Optional Counters (JSON or Relationship Based) --}}
                                {{-- <div class="row">
                                    <div class="col-md-3 ">
                                        <div class=" p-3 text-center">
                                            <div class=" d-flex align-items-center justify-content-center">
                                                <img class=" icon-image-about" src={{ asset('frontend/assets/image/icon1.png') }}
                                                    alt="">
                                            </div>
                                            <div class="homecard-text-num">
                                                <p>{{ $settings['home_counter_scholarship'] ?? '' }}</p>
                                            </div>
                                            <p class="text-css-counter d-flex align-items-center justify-content-center">
                                                {{ $settings['home_counter_scholarship_title'] ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div class=" p-3 text-center">
                                            <div class=" d-flex align-items-center justify-content-center">
                                                <img class=" icon-image-about" src={{ asset('frontend/assets/image/icon1.png') }}
                                                    alt="">
                                            </div>
                                            <div class="homecard-text-num">
                                                <p>{{ $settings['home_counter_students'] ?? '' }}</p>
                                            </div>
                                            <p class="text-css-counter d-flex align-items-center justify-content-center">
                                                {{ $settings['home_counter_students_title'] ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div class=" p-3 text-center">
                                            <div class=" d-flex align-items-center justify-content-center">
                                                <img class=" icon-image-about" src={{ asset('frontend/assets/image/icon1.png') }}
                                                    alt="">
                                            </div>
                                            <div class="homecard-text-num">
                                                <p>{{ $settings['home_counter_enrolled'] ?? '' }} </p>
                                            </div>
                                            <p class="text-css-counter d-flex align-items-center justify-content-center">
                                                {{ $settings['home_counter_enrolled_title'] ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- Read More --}}
                                <a class="d-flex align-items-center justify-content-md-start justify-content-center my-3"
                                    href="{{ route('frontend.about') }}">
                                    <button class="custom-btn btn-8">
                                        <span>Read More <i class="ri-arrow-right-up-line"></i></span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--  country section --}}
            <section class="py-5 page-bg-color ">
                <div class="container">
                    <div class="service-content-container text-center">
                        <h6 class="my-2"> {{ $settings['countries_title'] ?? '' }}</h6>
                        <h3 class="my-2"> {{ $settings['countries_subtitle'] ?? '' }} </h3>
                    </div>
                    <div class="row g-3 py-5">
                        @foreach ($countries as $item)
                            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
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
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="d-flex align-items-center justify-content-start my-3" href=""> <button
                                class="custom-btn btn-8"><span>Explore All <i
                                        class="ri-arrow-right-up-line"></i></span></button></a>
                    </div>
                </div>
                </div>
            </section>
            {{-- course section --}}
            <section class="testimonail-section py-5">
                <div class="container">
                    <div class="service-content-container text-center">
                        <h6 class="my-2">{{ $settings['courses_title'] ?? '' }}</h6>
                        <h3 class="my-2"> {{ $settings['courses_subtitle'] ?? '' }} </h3>
                    </div>
                    <div class="row py-5">
                        @foreach ($courses as $index => $course)
                            @php
        $isOdd = $index % 2 == 0; // 0-based index: 0 = 1st = odd position visually
                            @endphp

                            @if ($isOdd)
                                {{-- Odd position: Image Left, Content Right --}}
                                <div class="col-lg-6 py-3">
                                    <div class="course-img shadow rounded" data-aos="fade-right"  data-aos-duration="2000">
                                        <img src="{{ asset($course->image) }}" class="shadow rounded"
                                            alt="{{ $course->title }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 py-3 d-flex align-items-center justify-content-center">
                                    <div class="service-content-container" data-aos="fade-left"  data-aos-duration="2000">
                                        <h5 class="my-2">{{ $course->title }}</h5>
                                        <p class="text-css-counter">
                                            {{ Str::limit($course->short_description, 300) }}
                                        </p>
                                        <a class="d-flex align-items-center justify-content-start my-3"
                                            href="{{ route('frontend.coursesingle', $course->slug) }}">
                                            <button class="custom-btn btn-8">
                                                <span>Read More <i class="ri-arrow-right-up-line"></i></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            @else
                                {{-- Even position: Content Left, Image Right --}}
                                <div class="col-lg-6 py-3 d-flex align-items-center justify-content-center">
                                    <div class="service-content-container" data-aos="fade-right"  data-aos-duration="2000">
                                        <h5 class="my-2">{{ $course->title }}</h5>
                                        <p class="text-css-counter">
                                            {{ Str::limit($course->short_description, 300) }}
                                        </p>
                                        <a class="d-flex align-items-center justify-content-start my-3"
                                            href="{{ route('frontend.coursesingle', $course->slug) }}">
                                            <button class="custom-btn btn-8">
                                                <span>Read More <i class="ri-arrow-right-up-line"></i></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 py-3">
                                    <div class="course-img shadow rounded" data-aos="fade-left"  data-aos-duration="2000">
                                        <img src="{{ asset($course->image) }}" class="shadow rounded"
                                            alt="{{ $course->title }}">
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <div class="d-flex align-items-center justify-content-center">
                            <a class="d-flex align-items-center justify-content-start my-3"
                                href="{{ route('frontend.course') }}">
                                <button class="custom-btn btn-8">
                                    <span>Explore All <i class="ri-arrow-right-up-line"></i></span>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </section>
            {{-- testimonial section --}}
            <section class="testimonial-section py-5 page-bg-color">
                <div class="container">
                    <div class="service-content-container text-center">
                        <h6 class="my-2"> {{ $settings['testioninal_title'] ?? '' }}</h6>
                        <h3 class="my-2"> {{ $settings['testioninal_subtitle'] ?? '' }} </h3>
                    </div>
                    <div class="row pt-2">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="2000">
                            <div class="testi-side-banner">
                                <img src="{{ asset('frontend/assets/image/testi.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex justify-content-center align-items-center">
                            <!-- Swiper Container -->
                            <div class="swiper mySwiper py-4">
                                <div class="swiper-wrapper">
                                    @foreach ($testimonials as $testimonial)
                                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                            <div class="scholar-main-card bg-white">
                                                <div class="p-3 my-4">
                                                    <div class="swiper-icon center"><i class="ri-double-quotes-l"></i></div>

                                                    <div class="text-css text-center line-clamp my-2">
                                                        {!! $testimonial->description !!}
                                                    </div>

                                                    <div class="scholar-img-container center mb-2">
                                                        <img class="scholarship-img" src="{{ asset($testimonial->image) }}"
                                                            alt="{{ $testimonial->name }}">
                                                    </div>

                                                    <div class="name center">
                                                        <p>{{ $testimonial->name }}</p>
                                                    </div>

                                                    <div class="center">
                                                        @for ($i = 0; $i < $testimonial->rating; $i++)
                                                            <svg class="rating w-5 h-5 text-warning"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 2l2.72 5.792H18l-4.271 4.324 1.013 7.057L10 15.16l-5.742 3.013 1.013-7.057L2 7.792h4.28L10 2z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                                {{-- <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script>
                    const swiper = new Swiper('.mySwiper', {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: 1,
                            },
                        },
                    });
                </script>
            </section>
            {{-- faq section --}}
            <section class="faq-section py-5">
                <div class="container">
                    <div class="service-content-container text-center">
                        <h6 class="my-2"> {{ $faq_page->title ?? 'About Us' }}</h6>
                        <h3 class="my-2"> {{ $faq_page->short_description ?? 'About Us' }}</h3>
                    </div>
                    @php $i = 0; @endphp
                    <div class="row">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <div class="accordion" id="accordionExample" data-aos="fade-right"  data-aos-duration="2000">
                                @foreach ($faq as $index => $item)
                                    @php
        $headingId = 'heading' . $index;
        $collapseId = 'collapse' . $index;
        $isFirst = $index === 0;
                                    @endphp
                                    <div class="accordion-item accordion-card mb-2">
                                        <h2 class="accordion-header" id="{{ $headingId }}">
                                            <button class="accordion-button {{ $isFirst ? '' : 'collapsed' }}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}"
                                                aria-expanded="{{ $isFirst ? 'true' : 'false' }}"
                                                aria-controls="{{ $collapseId }}">
                                                {{ $item->question }}
                                            </button>
                                        </h2>
                                        <div id="{{ $collapseId }}"
                                            class="accordion-collapse collapse {{ $isFirst ? 'show' : '' }}"
                                            aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $item->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-img-container" data-aos="fade-left"  data-aos-duration="2000">
                                <img src="{{ asset('frontend/assets/image/faq.jpg') }}" alt="FAQ Image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- blog section --}}
            <section class="blog-section py-5 page-bg-color">
                <div class="container">
                    <div class="service-content-container text-center">
                        <h6 class="my-2"> {{ $settings['blogs_title'] ?? '' }}</h6>
                        <h3 class="my-2"> {{ $settings['blogs_subtitle'] ?? '' }} </h3>
                    </div>
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-6 position-relative" data-aos="fade-up" data-aos-duration="2000">
                                <div class="shadow blog-card bg-white">
                                    <div class="my-3">
                                        <div class="blog-media-wrapper">
                                            <img class="study-card-img" src="{{ asset($blog->image) }}"
                                                alt="{{ $blog->title }}">
                                            <div class="blog-icon">
                                                <span class="icons"><i class="ri-heart-line"></i></span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between mt-2">
                                                <p class="bodypart-css">
                                                    <span><i class="ri-calendar-line offer-icon"></i></span>
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
                                                </p>
                                                <p class="book-text">
                                                    <p class="book-text"><span><i
                                                        class="ri-eye-line offer-icon"></i></span>{{ $blog->views }}</p>
                                                </p>
                                            </div>

                                            <div class="subheadings my-1">
                                                <h3 class="line-clamp-2">{{ $blog->title }}</h3>
                                            </div>

                                            <div class="bodypart-css line-clamp-3 mb-2">
                                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 150) }}</p>
                                            </div>

                                            <div class="reviw-part d-flex justify-content-start">
                                                <div class="bodypart-css">
                                                    <span><i
                                                            class="ri-star-fill rating-blog"></i></span>{{ $blog->rating ?? '5' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="stretched-link" href="{{route('frontend.blogsingle', $blog->slug)}}"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            {{-- counry location section --}}
            {{-- <div class="container py-5">
                <div class="service-content-container text-center pb-5">
                    <h6 class="my-2"> Location</h6>
                    <h3 class="my-2"> Ready to study in your dream country? </h3>
                </div>
                <div class="shadow">
                    <ul class="nav nav-tabs" id="countryTab" role="tablist">
                        @foreach ($countrylocation as $index => $country)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if ($index == 0) active @endif"
                                    id="{{ Str::slug($country->countryname) }}-tab" data-bs-toggle="tab"
                                    data-bs-target="#{{ Str::slug($country->countryname) }}" type="button" role="tab"
                                    aria-controls="{{ Str::slug($country->countryname) }}"
                                    aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                    {{ $country->countryname }}
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content mt-3">
                        @foreach ($countrylocation as $index => $country)
                            <div class="tab-pane fade @if ($index == 0) show active @endif"
                                id="{{ Str::slug($country->countryname) }}" role="tabpanel"
                                aria-labelledby="{{ Str::slug($country->countryname) }}-tab">
                                <div class="country-location">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="country-location-img">
                                                <img src="{{ asset($country->image1) }}" alt="{{ $country->image1 }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="location-container">
                                                <h4>{{ $country->title ?? 'Helpful Education' }}</h4>

                                                <div class="country-location-flag">
                                                    <span>{{ strtoupper($country->country) }}</span>
                                                    @if ($country->flag)
                                                        <img src="{{ asset($country->image2) }}" alt="{{ $country->image2 }}">
                                                    @endif
                                                </div>

                                                <div class="location-content d-flex align-items-center py-2">
                                                    <i class="ri-map-pin-line location-icon"></i>
                                                    {{ $country->location }}
                                                </div>

                                                <p class="text-css">
                                                    {!! $country->description !!}
                                                </p>

                                                @if ($country->link)
                                                    <div>
                                                        <a href="{{ $country->link }}" target="_blank">
                                                            <button class="map-btn">Google Map</button>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div> --}}
@endsection
