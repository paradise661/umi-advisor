<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('seo')
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="{{ $settings['site_fav_icon'] ? asset($settings['site_fav_icon']) : asset('frontend/assets/image/logo.png') }}"
        rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    {{--
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}"> --}}
    {{--
    <link rel="stylesheet" href="{{ asset('frontend/assets/js/scrollScript.js') }}"> --}}
    <script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
        media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* Hide Google top bar and branding */
        .goog-te-banner-frame.skiptranslate,
        .goog-te-banner-frame,
        .goog-logo-link,
        .goog-te-gadget span {
            display: none !important;
        }

        body {
            top: 0px !important;
        }

        .skiptranslate {
            display: none !important;
        }
    </style>
</head>

<body>
    @include('layouts.frontend.header')
    <main>
        @yield('content')
        <div>
            <a class="btn-whats pulse-viber" href="viber://chat?number=%2B9779855069231" target="_blank">
                <i class="fa fa-viber"></i></a>
        </div>
        <div>
            <a class="btn-whats pulse" href="https://api.whatsapp.com/send?phone=9779855069231&text=
        " target="_blank">
                <i class="fa fa-whatsapp"></i></a>
        </div>
        <div id="google_translate_element" style="display:none;"></div>
        <div class="dropdown dropup pulse-translate">
            <button class="btn btn-outline-primary dropdown-toggle bg-primary" type="button" id="langDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-globe text-white"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="langDropdown">
                <li><a class="dropdown-item" href="#" onclick="translateLanguage('en')">🇺🇸 English</a></li>
                <li><a class="dropdown-item" href="#" onclick="translateLanguage('ne')">🇳🇵 नेपाली</a></li>
                <li><a class="dropdown-item" href="#" onclick="translateLanguage('ja')">🇯🇵 日本語</a></li>
            </ul>
        </div>


    </main>
    @include('layouts.frontend.footer')
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const header = document.querySelector("#header");
            const navLogo = document.querySelector("#nav-logo");

            const handleScroll = () => {
                const scrollTop = window.scrollY;
                if (scrollTop > 100) {
                    header.classList.add('sticky');
                    // navLogo.style.filter = 'invert(100%) brightness(1000%)'; // Makes the logo white
                } else {
                    header.classList.remove('sticky');
                    // navLogo.style.filter = 'invert(0%) brightness(100%)'; // Restores the original colors
                }
            };
            window.addEventListener("scroll", handleScroll);
        });
    </script>
    @stack('js')
    <script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('frontend/assets/js/scrollScript.js') }}"></script>
    {{--
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}

    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,ne,ja',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function translateLanguage(lang) {
            var selectField = document.querySelector(".goog-te-combo");
            if (selectField) {
                selectField.value = lang;
                selectField.dispatchEvent(new Event("change"));
            }
        }
    </script>




</body>

</html>

<script src="scrollScript.js"></script>