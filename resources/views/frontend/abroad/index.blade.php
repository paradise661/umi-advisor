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
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $abroad_page->title }}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6">
                            <div class="page-banner__media mt-xs-30 mt-sm-40">
                                <img src="assets/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                                <img src="{{ asset($abroad_page->banner_image) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-team our-team-home-1 bg-dark_red pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
            <div class="container">
                <section class="courses-section">
                    <div class="container">
                        <div class="courses-block py-5">
                            <div class="row justify-content-center g-4">
                                    @foreach ($abroadstudies as $country)
                                        <div class="col-md-6">
                                            <div class="courses-card position-relative">  {{-- required for stretched-link --}}
                                                <a href="{{ route('frontend.abroadsingle', $country->slug) }}">


                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <div class="p-3">
                                                            <div class="courses-text line-clamp-4">
                                                                {{-- <a href="{{ route('frontend.abroadsingle', $country->slug) }}"> --}}
                                                                {!! $country->short_description ?? 'No description available.' !!}
                                                                {{-- </a> --}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5">
                                                        <div class="courses-author py-3">
                                                            <img src="{{ asset($country->image) }}" alt="{{ $country->name }}">
                                                            <div class="author-name">{{ $country->title }}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <a href="{{ route('frontend.abroadsingle', $country->slug) }}" class="stretched-link"></a> --}}

                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                        </div>
                    </div>
                </section>

            </div>
        </section>
@endsection
