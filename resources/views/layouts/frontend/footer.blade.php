<footer class="footer-class relative "
    style="background-image: url('{{ asset('frontend/assets/image/fotter.png') }}'); background-size: cover; background-position: center; ">
    <div class="fotter-section-background">
        <div class="top-bar-fotter py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex gap-4 align-items-center justify-content-center ">
                        <img src="{{asset('frontend/assets/images/support1.png')}}" alt=""> <a
                            href="tel:{{ $settings['site_phone'] ?? '+123456789' }}" class="fotter-headings">Reach Out
                            to Our Consultant <span
                                class="contact-info">{{ $settings['site_phone'] ?? '98777776' }}</span> </a>
                    </div>
                    <div class="col-lg-4 d-flex gap-4 align-items-center justify-content-center">
                        <img src="{{asset('frontend/assets/images/email.png')}}" alt=""> <a
                            href="{{ $settings['contact_email'] ?? 'asmita' }}" class="fotter-headings">{{
                            $settings['site_email'] ?? 'abc@gmail.com' }} </a>
                    </div>
                    <div class="col-lg-4">
                        @if ($socials->isNotEmpty())
                            <div class="d-flex gap-4 align-items-center justify-content-center footer-social">
                                <h4 class="mt-2 fotter-headings">Follow Us</h4>
                                @foreach ($socials as $item)
                                    <a href="{{ $item->link }}" target="_blank"><i class="{{ $item->icon }} social-icon">
                                        </i></a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container  pt-5 ">
            <div class="row w-100 py-2">
                <div class="col-lg-3 col-sm-6 mb-3 d-flex  align-lg-items-center justify-lg-content-center">
                    <div>
                        <div class="d-flex align-items-center justify-content-center"><img
                                src="{{ $settings['site_main_logo'] ? asset($settings['site_main_logo']) : asset('frontend/assets/images/logo.png') }}"
                                class="fotter-img " alt="logo"></div>
                        <div class="site-descrption  fotter-css py-2">
                            <p class="text-center">{{$settings['site_information']}}</p>
                            <div class="d-flex gap-2 py-1 f-text align-items-center justify-content-center"><i
                                    class="ri-map-pin-line icons-css"></i>
                                <p> {{ $settings['site_location'] ?? 'Kathmandu,Nepal' }}</p>
                            </div>
                            <div class="d-flex gap-2 py-1 f-text  align-items-center justify-content-center"><i
                                    class="ri-phone-fill icons-css"></i>
                                <a
                                    href="tel:{{ $settings['site_phone'] ?? '+123456789' }}">{{ $settings['site_phone'] ?? '98777776' }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6 mb-3 mt-lg-0 mt-3">
                    <h5 class="fotter-headings">Useful links</h5>
                    <ul class="nav flex-column fotter-text fotter-css">

                        <li class="nav-item fotter-link mb-2">
                            <a href="" class="nav-link p-0 ">
                                About us
                            </a>
                        </li>

                        {{-- <li class="nav-item fotter-link mb-2">
                            <a href="" class="nav-link p-0">
                                Our Team
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item fotter-link mb-2">
                            <a href="" class="nav-link p-0">
                                Why Chooose US
                            </a>
                        </li> --}}
                        <li class="nav-item fotter-link mb-2">
                            <a href="" class="nav-link p-0">
                                Study Destination
                            </a>
                        </li>
                        <li class="nav-item fotter-link mb-2">
                            <a href="" class="nav-link p-0">
                                Our Courses
                            </a>
                        </li>
                        <li class="nav-item fotter-link mb-2">
                            <a href="" class="nav-link p-0">
                                Our Services
                            </a>
                        </li>
                        <li class="nav-item fotter-link mb-2">
                            <a href="" class="nav-link p-0">
                                Blogs
                            </a>
                        </li>
                        <li class="nav-item fotter-link mb-2">
                            <a href="" class="nav-link p-0 ">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 mb-3 mt-lg-0 mt-3">
                    <h5 class="fotter-headings ">Our Services</h5>
                    <ul class="nav flex-column fotter-text  fotter-css">
                        @foreach ($footer_services as $service)
                            <li class="nav-item mb-2 fotter-link"><a href="" class="nav-link p-0 ">{{ $service->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-2 col-6 mb-3 mt-lg-0 mt-3">
                    <h5 class="fotter-headings">Study Abroad</h5>
                    <ul class="nav flex-column fotter-text fotter-css">
                        @foreach ($footer_countries as $country)
                            <li class="nav-item fotter-link mb-2"><a
                                    href="{{ route('frontend.abroadsingle', $country->slug) }}"
                                    class="nav-link p-0 ">{{ $country->title }}</a></li>
                        @endforeach
                        <li class="nav-item fotter-link mb-2">
                            <a href="{{ route('frontend.abroad') }}" class="nav-link p-0 ">
                                View All
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 mb-3 mt-lg-0 mt-3">
                    <h5 class="fotter-headings ">Our Courses</h5>
                    <ul class="nav flex-column fotter-text  fotter-css">
                        @foreach ($footer_course as $course)
                            <li class="nav-item fotter-link mb-2"><a
                                    href="{{ route('frontend.coursesingle', $course->slug) }}"
                                    class="nav-link p-0 ">{{ $course->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-2 col-6 mb-3 mt-lg-0 mt-3">
                    {{-- <iframe
                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fofficialroutineofnepalbanda%2Fposts%2Fpfbid02FmjRtzxQWV8kxjuz5ThVFTQSY3zas2Ai1hvVA5NUcUfBxK8KSSyadGPwHkRV8D8il&show_text=false&width=500"
                        width="240" height="240" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> --}}
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdearbandu&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
                        width="240" height="240" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>

        </div>


        <div class=" my-2 p-2 botton-bar-fotter  text-center">
            <p>
                {{ $settings['site_copyright'] ?? 'u00a9 2024 Company, Inc. All rights reserved' }}
            </p>
        </div>
    </div>
</footer>