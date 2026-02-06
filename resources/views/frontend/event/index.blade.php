@section('seo')
    @include('frontend.seo', [
        'name' => $event_page->seo_title ?? '',
        'title' => $event_page->seo_title ?? $event_page->title,
        'description' => $event_page->meta_description ?? '',
        'keyword' => $event_page->meta_keywords ?? '',
        'schema' => $event_page->seo_schema ?? '',
        'created_at' => $event_page->created_at,
        'updated_at' => $event_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    @if ($event_page)
          <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden"
        style="background-image: url('{{ $event_page->banner_image ? asset($event_page->banner_image) : '' }}');">

        <div class="page-banner__overlay"></div>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        {{-- <div class="transparent-text">About Us</div> --}}
                        <div class="page-title">
                            <h1>{{ $event_page->title ?? '' }}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $event_page->title }} </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    @endif
    <div class="container py-5">
        <!-- Events Grid -->
        <div class="row g-4">
            @foreach ($events as $event)
                @php
                    $eventDate = \Carbon\Carbon::parse($event->date);
                    $today = now()->startOfDay();
                    $isExpired = $eventDate->lt($today);

                    $formattedDate = $eventDate->format('d M Y');
                    $formattedTime = \Carbon\Carbon::parse($event->time)->format('h:i A');
                @endphp
                <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <div class="row shadow">
                        <div class="col-lg-6">
                            <div class="card event-card h-100">
                                <!-- Status Badge -->
                                <span class="badge status-badge {{ $isExpired ? 'badge-expired' : 'badge-upcoming' }}">
                                    {{ $isExpired ? 'Expired' : 'Upcoming' }}
                                </span>
                                <!-- Event Image -->
                                <div class="event-image">
                                    <img class="img-fluidevent" style="height: 280px" src="{{ asset($event->image) }}"
                                        alt="{{ $event->name ?? '' }}">
                                </div>
                                <!-- Event Details -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="event-details">
                                <h3 class="event-title">{{ $event->name ?? '' }}</h3>
                                <p class="event-description">
                                    {!! Str::words(strip_tags($event->description ?? ''), 18, '...') !!}
                                </p>
                                <div class="event-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar info-icon"></i>
                                        <span><strong>{{ $formattedDate }}</strong></span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock info-icon"></i>
                                        <span>{{ $formattedTime }} onwards</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt info-icon"></i>
                                        <span>{{ $event->location ?? '' }}</span>
                                    </div>
                                </div>
                                <a class="btn btn-register btn-upcoming"
                                    href="{{ route('frontend.eventsingle', $event->slug) }}">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
