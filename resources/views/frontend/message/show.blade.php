@section('seo')
    @include('frontend.seo', [
        'name' => $message_page->seo_title ?? '',
        'title' => $message_page->seo_title ?? $message_page->title,
        'description' => $message_page->meta_description ?? '',
        'keyword' => $message_page->meta_keywords ?? '',
        'schema' => $message_page->seo_schema ?? '',
        'created_at' => $message_page->created_at,
        'updated_at' => $message_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    {{-- @if ($message_page)
        <div class="hero-banner2 position-relative ">
            <div class="row g-0 text-bannner-section">
                <div class="col-md-6 d-flex justify-content-center align-items-center py-5">
                    <div class="text-center page-banner-lft px-4">
                        <h1 class="text-white font-weight-bold">{{ $message_page->title ?? 'About Us' }}</h1>
                        <p class="breadcrumb-text text-white">
                            <a href="{{ route('frontend.home') }}" class="text-white text-decoration-none">Home</a> /
                            <a href="#"
                                class="text-white text-decoration-none">{{ $message_page->title ?? 'About Us' }}</a>

                        </p>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-container-banner">
                        <div class="img-wrapper-2">
                            <img src="{{ asset($message_page->banner_image) }}" alt="Creative Design"
                                class="background-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif --}}
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden"
        style="background-image: url('{{ $message_page->banner_image ? asset($message_page->banner_image) : '' }}');">

        <div class="page-banner__overlay"></div>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        {{-- <div class="transparent-text">About Us</div> --}}
                        <div class="page-title">
                            <h1>{{ $message_page->title ?? '' }}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                               <a href="{{ route('frontend.message') }}">{{ $message_page->title }} </a>  </li>
                            <li class="breadcrumb-item active" aria-current="page">Message From {{ $messagesingle->title }}
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    {{-- about us section --}}
    {{-- about us section --}}
    <section class="about-us-section py-5">
        <div class="container">
            <div class="row gy-4"> {{-- Added gy-4 for vertical spacing on mobile --}}

                {{-- Image Column --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center" data-aos="fade-right"
                    data-aos-duration="1500">
                    <div class="about-us-img-ceo">
                        {{-- Note: Changed to $message_page->image based on your previous DB error --}}
                        <img src="{{ asset($messagesingle->image) }}" alt="{{ $messagesingle->name }}"
                            class="img-fluid rounded shadow">
                    </div>
                </div>

                {{-- Content Column --}}
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1500">
                    <div class="service-content-container">
                        <h6 class="my-2 color-blue">{{ $messagesingle->title ?? 'About us' }}</h6>

                        <h6 class="text-uppercase fw-bold color-red mb-2">
                            Message from {{ $messagesingle->short_description }}
                        </h6>

                        {{-- <h2 class="display-6 fw-bold mb-3">{{ $messagesingle->name }}</h2> --}}

                        <div class="message-body text-justify lead text-secondary">
                            {!! $messagesingle->description !!}
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
