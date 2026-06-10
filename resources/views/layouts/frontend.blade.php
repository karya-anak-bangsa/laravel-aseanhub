<!DOCTYPE html>
<html lang="en">

    <head>
        {{-- set metadata on this website --}}
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>ASEAN Hub International Design Competition 2026</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        {{-- Favicons --}}
        <link href="{{ asset('img/dki-jakarta.webp') }}" rel="icon">
        <link href="{{ asset('img/dki-jakarta.webp') }}" rel="apple-touch-icon">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;500;600;700&display=swap">

        {{-- Vendor CSS Files --}}
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/aos/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/glightbox/css/glightbox.min.css') }}">

        {{-- Main CSS File --}}
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/css/main.css') }}">

        {{-- plugin style - fontawesome 6.7.2 --}}
        <link rel="stylesheet" href="{{ asset('template-plugins/fontawesome-6.7.2/css/all.min.css') }}">

        @stack('styles')
    </head>

    <body class="index-page">

        <header id="header" class="header position-relative">
            @include('layouts.partials-frontend.header')
        </header>

        <main class="main">
            @yield('content')
        </main>

        <footer id="footer" class="footer dark-background">
            @include('layouts.partials-frontend.footer')
        </footer>

        {{-- Scroll Top --}}
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        {{-- Vendor JS Files --}}
        <script src="{{ asset('template-frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <script src="{{ asset('template-frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

        {{-- Main JS File --}}
        <script src="{{ asset('template-frontend/assets/js/main.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const judgesSlider = document.querySelector('#judges-slider');
                if (judgesSlider) {
                    new Swiper('#judges-slider', {
                        loop: true,
                        speed: 500,
                        autoplay: {
                            delay: 2500
                        },
                        slidesPerView: 1,
                        spaceBetween: 25,
                        breakpoints: {
                            480: {
                                slidesPerView: 2
                            },
                            720: {
                                slidesPerView: 4
                            },
                        },
                        pagination: {
                            el: '#judges-slider .swiper-pagination',
                            type: 'bullets',
                            clickable: true,
                        }
                    });
                }
            });
        </script>

        {{-- scripts fontawesome 6.7.2 --}}
        <script src="{{ asset('template-plugins/fontawesome-6.7.2/js/all.min.js') }}"></script>

        @stack('scripts')
    </body>

</html>
