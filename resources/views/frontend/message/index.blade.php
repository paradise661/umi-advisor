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
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">{{ $message_page->title }}</div>
                        <div class="page-title">
                            <h1>{{ $message_page->title }}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $message_page->title }}</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img class="img-fluid start" src="assets/img/page-banner/page-banner-start.svg" alt="">
                        <img class="img-fluid" src="{{ asset($message_page->banner_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="row g-4">
                @foreach ($messages as $item)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a class="stretched-link"
                            href="{{ route('frontend.messagesingle', ['slug' => $item->slug ?? 'unknown']) }}">
                            <div class="profile-card">
                                <div class="image-wrapper">
                                    <img src="{{ $item->image }}" alt="{{ $item->title }}" class="img-fluid">

                                    <div class="profile-overlay">
                                        <div class="overlay-content">
                                            <h5 class="text-white mb-0">{{ $item->title }}</h5>
                                            <p class="text-light small mb-0">{{ $item->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
