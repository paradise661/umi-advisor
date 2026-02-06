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
                                {{ $message_page->title }} </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="row g-4">
                @foreach ($messages as $item)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('frontend.messagesingle', ['slug' => $item->slug ?? 'unknown']) }}"
                            class="message-card-link">

                            <div class="message-card">
                                <img src="{{ $item->image }}" alt="{{ $item->title }}">

                                <div class="message-overlay">
                                    <h5>Message From<br>{{ $item->title }}</h5>
                                    <p>{{ $item->short_description }}</p>
                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
