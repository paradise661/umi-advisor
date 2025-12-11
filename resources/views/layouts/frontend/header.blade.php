<header class="header header-1 header-3">
    <div class="top-header d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="header-right-socail d-flex align-items-center">
                        <h6 class="font-la color-white fw-normal">Follow On:</h6>
                        <div class="social-profile">
                            <ul>
                                @foreach ($socials as $social)
                                    <li><a href="{{ $social->link }}"><i class="{{ $social->icon }}"></i></a></li>
                                @endforeach
                                {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                {{-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="header-cta d-flex justify-content-end">
                        <ul>
                            <li><a><i class="ri-phone-fill"></i> {{ $settings['site_phone'] ?? '' }}</a></li>
                            <li><a href="mailto:{{ $settings['site_email'] ?? '' }}"><i
                                        class="ri-mail-line"></i></i>{{ $settings['site_email'] ?? '' }}</a></li>
                            {{-- <li><a><i class="fal fa-clock"></i> </a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-wraper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="header-logo">
                            <div class="logo">
                                <a href="/">
                                    <img style="height: 50px"
                                        src="{{ $settings['site_main_logo'] ? asset($settings['site_main_logo']) : asset('assets/images/logo.png') }}"
                                        alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="header-menu d-none d-xl-block">
                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="/">Home</a>
                                        {{-- <ul>
                                            <li><a href="index.html">home 1</a></li>
                                            <li><a href="index-2.html">home 2</a></li>
                                            <li><a href="index-3.html">home 3</a></li>
                                            <li><a href="index-4.html">home 4</a></li>
                                            <li><a href="index-5.html">home 5</a></li>
                                        </ul> --}}
                                    </li>
                                    <li>
                                        <a>About us</a>

                                        <ul>
                                            <li><a href="{{ route('frontend.about') }}">Our Company</a></li>
                                            <li><a href="{{ route('frontend.service') }}">Service</a></li>
                                            {{-- <li><a href="{{ route('frontend.event') }}">Events</a></li> --}}
                                            <li><a href="{{ route('frontend.team') }}">Team</a></li>
                                            <li><a href="{{ route('frontend.testimonial') }}">Testimonial</a></li>
                                            {{-- <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="services-details.html">Services Details</a></li>
                                            <li><a href="our-project-details.html">Our Project Details</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="404.html">404</a></li> --}}
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.abroad') }}">Countries</a>

                                        <ul>
                                            @foreach ($footer_countries as $country)
                                                <li><a
                                                        href="{{ route('frontend.abroadsingle', $country->slug) }}">{{ $country->title }}</a>
                                                </li>

                                            @endforeach
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('frontend.course') }}">Our Courses</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.blog') }}">Blog</a>

                                        {{-- <ul>
                                            <li><a href="blog.html">Blog 1</a></li>
                                            <li><a href="blog-standard.html">Blog 2</a></li>
                                        </ul> --}}
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.contact.submit') }}">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-right d-flex align-items-center">
                            <div class="header-search">
                                <a class="search-toggle" data-selector=".header-search">
                                    <span class="fas fa-search"></span>
                                </a>

                                <form class="search-box" action="#" method="get">
                                    <div class="form-group d-flex align-items-center">
                                        <input type="search" name="s" value="" class="search-input" id="search"
                                            placeholder="Search">
                                        <button type="submit" class="search-submit"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <a href="{{ route('frontend.contact.submit') }}" class="header-btn">Get A Quote <i
                                    class="far fa-chevron-double-right"></i></a>
                            <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                <div class="mobile-nav-wrap">
                                    <div id="hamburger">
                                        <i class="fal fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu - responsive menu  -->
    <div class="mobile-nav mobile-nav-red">
        <button type="button" class="close-nav">
            <i class="fal fa-times-circle"></i>
        </button>
        <nav class="sidebar-nav">
            <div class="navigation">
                <div class="consulter-mobile-nav">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                            {{-- <ul>
                                <li><a href="index.html">home 1</a></li>
                                <li><a href="index-2.html">home 2</a></li>
                                <li><a href="index-3.html">home 3</a></li>
                                <li><a href="index-4.html">home 4</a></li>
                                <li><a href="index-5.html">home 5</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            <a>About us</a>

                            <ul>
                                <li><a href="{{ route('frontend.about') }}">Our Company</a></li>
                                <li><a href="{{ route('frontend.service') }}">Service</a></li>
                                {{-- <li><a href="{{ route('frontend.event') }}">Events</a></li> --}}
                                <li><a href="{{ route('frontend.team') }}">Team</a></li>
                                <li><a href="{{ route('frontend.testimonial') }}">Testimonial</a></li>
                                {{-- <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                                <li><a href="our-project-details.html">Our Project Details</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="404.html">404</a></li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('frontend.abroad') }}">Countries
                            </a>

                            <ul>
                                @foreach ($footer_countries as $country)
                                            <l i><a
                                                    href="{{ route('frontend.abroadsingle', $country->slug) }}">{{ $country->title }}</a>
                                    </li>

                                @endforeach
                    </ul>
                    </li>

                    <li>
                        <a href="{{ route('frontend.course') }}">Our Courses</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.blog') }}">Blog</a>

                        {{-- <ul>
                            <li><a href="blog.html">Blog 1</a></li>
                            <li><a href="blog-standard.html">Blog 2</a></li>
                        </ul> --}}
                    </li>
                    <li>
                        <a href="{{ route('frontend.contact.submit') }}">Contact us</a>
                    </li>
                    </ul>
                </div>
                <div class="sidebar-nav__bottom mt-20">
                    <div class="sidebar-nav__bottom-contact-infos mb-20">
                        <h6 class="color-black mb-5">Contact Info</h6>
                        <ul>
                            {{-- <li><a><i class="fal fa-clock"></i> Mon – Fri: 8.00 – 18.00</a></li> --}}
                            <li><a href="mailto:{{ $settings['site_email'] ?? '' }}"><i
                                        class="icon-email"></i>{{ $settings['site_email'] ?? '' }}</a>
                            </li>
                            <li>
                                <a class="header-contact d-flex align-items-center">
                                    <div class="icon">
                                        <i class="icon-call"></i>
                                        <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                    </div>
                                    <div class="text">
                                        <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                        <h5 class="fw-500">{{ $settings['site_phone'] ?? '' }}</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-nav__bottom-social">
                        <h6 class="color-black mb-5">Follow On:</h6>

                        <ul>
                            {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
                            @foreach ($socials as $social)
                                <li><a href="{{ $social->link }}"><i class="{{ $social->icon }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas-overlay -->
    <!-- header end -->
    <div class="header-gutter home"></div>
    <!-- header end -->
</header>