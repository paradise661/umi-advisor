@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.seo', [
    'name' => $contact_page->seo_title ?? '',
    'title' => $contact_page->seo_title ?? $contact_page->title,
    'description' => $contact_page->meta_description ?? '',
    'keyword' => $contact_page->meta_keywords ?? '',
    'schema' => $contact_page->seo_schema ?? '',
    'created_at' => $contact_page->created_at,
    'updated_at' => $contact_page->updated_at,
])
@endsection
@section('content')
    <!-- page-banner start -->
            <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                                <div class="transparent-text">About Us</div>
                                <div class="page-title">
                                    <h1>{{ $contact_page->title }}</h1>
                                </div>
                            </div>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $contact_page->title }}</li>
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
    <!-- contact-us start -->
    <section class="contact-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-us__content wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-15 mb-xs-10 mb-20"><img src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10" alt="">{{ $settings['contact_section_title'] }}</h6>
                        <h2 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">{{ $settings['contact_title'] }}</h2>

                        <div class="description font-la">
                            <p>{{ $settings['contact_description'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row contact-us__item-wrapper mt-xs-35 mt-sm-40 mt-md-45">
                        {{-- <div class="col-sm-6">
                            <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".3s">
                                <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>

                                    <h5 class="title color-d_black">London Office</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    4517 Washington Ave. Manchester, Kentucky 39495
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="col-sm-6">
                            <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".5s">
                                <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-home-location"></i>
                                    </div>

                                    <h5 class="title color-d_black">Ontario Office</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    3891 Ranchview Dr. Richardson, California 62639
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".7s">
                                <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-phone"></i>
                                    </div>

                                    <h5 class="title color-d_black">Call Us Toll Free</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <ul>
                                        <li><a href="tell:{{ $settings['contact_phone'] }}">{{ $settings['contact_phone'] }}</a></li>
                                        {{-- <li><a href="tell:(208)555-0112">(208) 555-0112</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="contact-us__item mb-40 wow fadeInUp" data-wow-delay=".9s">
                                <div class="contact-us__item-header mb-25 mb-md-20 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-email"></i>
                                    </div>

                                    <h5 class="title color-d_black">Email Us</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <ul>
                                        {{-- <li><a href="mailto:consulter@example.com">consulter@example.com </a></li> --}}
                                        <li><a href="mailto:{{ $settings['contact_email'] }}">{{ $settings['contact_email'] }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr class="mt-md-45 mt-sm-30 mt-xs-30 mt-60">
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us end -->

    <!-- contact-us form end -->
    <section class="contact-form  mb-xs-80 mb-sm-100 mb-md-100 mb-120 overflow-hidden">
        <div id="contact-map" class="mb-sm-30 mb-xs-25">
            <iframe src="{{ $settings['contact_map'] }}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- contact-map -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                            <h6 class="sub-title fw-500 color-primary text-uppercase mb-15"><img src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> {{ $settings['contact_form_title'] }}</h6>
                            <h3 class="title color-d_black">{{ $settings['contact_form_subtitle'] }}</h3>
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
                                        <textarea placeholder="Your Message" name="message"></textarea>
                                    </div>

                            <button type="submit" class="theme-btn btn-sm">Submit Message <i class="far fa-chevron-double-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us form end -->

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    gravity: "top", // top or bottom
                    position: "right", // left, center or right
                    backgroundColor: "#4BB543", // green success color
                    stopOnFocus: true,
                }).showToast();
            });
        </script>
    @endif
@endsection
