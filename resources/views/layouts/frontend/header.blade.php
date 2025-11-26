<header>
    <div class="top-bar d-md-block d-none border-button">
        <div class="container d-flex justify-content-between align-items-center py-1 ">
            <div>
                <div class="d-flex gap-4">
                    <div class="top-location">
                        <i class="ri-map-pin-line"></i>{{ $settings['site_location'] ?? 'ktm' }}
                    </div>
                    <a href="mailto:{{ $settings['site_email'] ?? 'xyz@gmail.com' }}" class="top-email">
                        <i class="ri-mail-line"></i> {{ $settings['site_email'] ?? 'gmail' }}
                    </a>
                </div>
            </div>
            @if ($socials->isNotEmpty())
                <div class="d-flex gap-4">
                    @foreach ($socials as $item)
                        <a href="{{ $item->link }}"><i class="{{ $item->icon }}"></i></a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <nav id="header" class="navbar navbar-expand-lg main-nav-container py-3 shadow">
        {{-- {{$setting}} --}}
        <div class="container nav-text ">
            <a class="navbar-brand nav-logo nav-img " id="nav-logo" href="/"><img class=""
                    src="{{ $settings['site_main_logo'] ? asset($settings['site_main_logo']) : asset('frontend/assets/images/logo.png') }}"
                    alt="logo"></a>
            {{-- <a class="navbar-brand nav-logo nav-img" id="nav-logo" href=""><img
                    src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo"></a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="ri-menu-line header-menu-icon"></i></span>
            </button>
            <div class="collapse navbar-collapse new-nav-container" id="navbarScroll">
                <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll mh-100" style="--bs-scroll-height: 100px;">
                    <li class="nav-item nav-margin">
                        <a href="{{ route('frontend.home') }}" class="nav-link  nav-text">Home</a>
                    </li>
                    <li class="nav-item  dropdown nav-margin">
                        <a class="nav-link dropdown-toggle nav-text" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About Us
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu dropdown_border nav-text">
                            <li><a class="dropdown-item hover-effect border-css"
                                    href="{{ route('frontend.about') }}">Our Company</a>
                            </li>
                            <li><a class="dropdown-item hover-effect border-css"
                                    href="{{ route('frontend.service') }}">Service</a>
                            </li>
                            <li><a class="dropdown-item hover-effect border-css"
                                    href="{{ route('frontend.event') }}">Events</a>
                            </li>
                            <li><a class="dropdown-item hover-effect border-css" href="{{ route('frontend.team') }}">Our
                                    Teams</a>
                            </li>
                            <li><a class="dropdown-item hover-effect border-css"
                                    href="{{ route('frontend.messagefromfounder') }}">Message From Ceo</a>
                            </li>
                            {{-- <li><a class="dropdown-item hover-effect border-css"
                                    href="{{ route('frontend.gallery')}}">Gallery</a>
                            </li> --}}
                            <li class="">
                                <a href="{{ route('frontend.studentvoice') }}"
                                    class="dropdown-item hover-effect border-css">Student
                                    Voice</a>
                            </li>
                            <li><a class="dropdown-item hover-effect border-css"
                                    href="{{ route('frontend.testimonial') }}">Testimonial</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  dropdown nav-margin">
                        <a class="nav-link dropdown-toggle nav-text" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Study Abroad
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu dropdown_border nav-text">
                            @foreach ($footer_countries as $country)
                                <li><a class="dropdown-item hover-effect border-css"
                                        href="{{ route('frontend.abroadsingle', $country->slug) }}">{{ $country->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-margin">
                        <a class="nav-link dropdown-toggle nav-text" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Courses
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu dropdown_border nav-text">
                            @foreach ($footer_course as $course)
                                <li><a class="dropdown-item hover-effect border-css"
                                        href="{{ route('frontend.coursesingle', $course->slug) }}">{{ $course->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- <li class="nav-item dropdown nav-margin">
                        <a class="nav-link dropdown-toggle nav-text" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Services
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu dropdown_border nav-text">
                            @foreach ($footer_services as $service)
                            <li><a class="dropdown-item hover-effect border-css"
                                    href="{{ route('frontend.servicesingle', $service->slug) }}">{{ $service->title
                                    }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li> --}}

                    <li class="nav-item nav-margin">
                        <a href="{{ route('frontend.blog') }}" class="nav-link  nav-text">Blog</a>
                    </li>
                    {{-- <li class="nav-item nav-margin">
                        <a href="{{ route('frontend.studentvoice') }}" class="nav-link  nav-text">Student Voice</a>
                    </li> --}}
                    <li class="nav-item nav-margin"><a class="nav-link  nav-text"
                            href="{{ route('frontend.gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item nav-margin">
                        <a href="{{ route('frontend.contact') }}" class="nav-link  nav-text">Contact Us</a>
                    </li>


                </ul>
                <a href="{{ route('frontend.register') }}">
                    <button class="custom-btn btn-8"><span>Register <i
                                class="ri-arrow-right-up-line"></i></span></button>
                </a>
                {{-- <div id="google_translate_element"></div> --}}


            </div>
        </div>
        </div>
    </nav>
</header>