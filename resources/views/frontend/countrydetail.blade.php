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
    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">{{ $abroad_page->title }}</div>
                        <div class="page-title">
                            <h1>{{ $abroad_page->title }}</h1>
                        </div>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $abroad_page->title }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img class="img-fluid start" src="assets/img/page-banner/page-banner-start.svg" alt="">
                        <img class="img-fluid" src="{{ asset($abroad_page->banner_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
    class="our-team our-team-home-1 bg-dark_red pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120">
    <div class="container">
        <div class="row g-4">

            <!-- LEFT CONTENT -->
            <div class="col-lg-8">
                @foreach ($abroadstudies as $country)
                    <div class="courses-author-main py-3">
                        <img src="{{ asset($country->image) }}" alt="{{ $country->name }}" class="img-fluid mb-3">
                        <div class="services-details__content">
                            <h2>{{ $country->title }}</h2>

                            <!-- LINE CLAMP (optional) -->
                            <p class="line-clamp-5">
                                {!! $country->description !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- RIGHT STICKY FORM -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 120px;">
                    <div class="contact-card p-5 rounded shadow-sm bg-white border">

                        <span class="badge px-3 py-2 mb-3 d-inline-block"
                            style="background:#00b3ea; color:#fff;">
                            {{ $settings['contact_form_title'] }}
                        </span>

                        <h3 class="fw-bold mb-4">
                            {{ $settings['contact_form_subtitle'] }}
                        </h3>

                        <form action="{{ route('frontend.contact.submit.home') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <input class="form-control py-3" type="text" name="name" placeholder="Your Name" required>
                            </div>

                            <div class="mb-3">
                                <input class="form-control py-3" type="email" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="mb-3">
                                <input class="form-control py-3" type="text" name="course" placeholder="Subject">
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control py-3" name="message" rows="5"
                                    placeholder="Your Message" required></textarea>
                            </div>

                            <button class="btn w-100 py-3 text-white"
                                style="background:#00b3ea; border:none;">
                                Submit Message
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
