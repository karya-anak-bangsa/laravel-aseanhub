<!DOCTYPE html>
<html lang="en">

    <head>
        {{-- set metadata on this website --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ASEAN HUB International Design Competition 2026</title>

        {{-- set icon --}}
        <link rel="icon" href="{{ asset('img/dki-jakarta.webp') }}" type="image/png">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;500;600;700&display=swap">

        {{-- Bootstrap 5.3.8 --}}
        <link rel="stylesheet" href="{{ asset('template-auth/bootstrap-5.3.8/dist/css/bootstrap.min.css') }}">

        {{-- Fontawesome 6.7.2 --}}
        <link rel="stylesheet" href="{{ asset('template-plugins/fontawesome-6.7.2/css/all.min.css') }}">

        {{-- custom css for layouts auth --}}
        <style>
            :root {
                --default-font: "Quicksand", "Inter", "Roboto", "Segoe UI", sans-serif;
                --heading-font: "Raleway", sans-serif;
                --nav-font: "Poppins", sans-serif;
            }

            :root {
                --warning-500: #ffb703;
                --warning-600: #f0a500;
                --warning-default: #fec107;
            }

            body {
                min-height: 100vh;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-weight: 700;
                font-family: var(--heading-font);
            }

            small,
            span,
            p {
                font-family: var(--default-font);
            }

            /* LEFT SIDE */
            #auth-left {
                min-height: 100vh;
                background-color: #f5f6fa;
            }

            #auth-left {
                background-image:
                    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                    url("{{ asset('/img/hero-monas-2.webp') }}");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: white;
            }

            #auth-left h1 {
                font-weight: 700;
                color: #f5f6fa;
            }

            #auth-left p {
                font-weight: 400;
                color: #f5f6fa;
            }

            /* RIGHT SIDE */
            #auth-right {
                min-height: 100vh;
                background-color: #f5f6fa;
            }

            #auth-card {
                width: 95%;
                height: auto;
                border-radius: .5rem;
                box-shadow: 0 10px 60px rgba(0, 0, 0, 0.05);
            }

            .form-label {
                font-weight: bold;
            }

            .form-control,
            .form-select {
                border-radius: .5rem;
                padding: 0.55rem 0.55rem;
            }

            .form-control:focus,
            .form-select:focus {
                border-color: var(--warning-default);
                box-shadow: 0 0 0 0.1rem rgba(254, 193, 7, 0.25);
            }

            .btn-login {
                font-weight: bold;
                border-radius: .5rem;
                padding: 0.55rem 0.55rem;
            }

            .btn-warning:hover {
                background-color: var(--warning-600);
                border-color: var(--warning-600);
            }
        </style>
        @stack('styles')
    </head>

    <body>

        <main class="container-fluid">
            <div class="row min-vh-100">
                <div class="col-sm-7 d-flex flex-column align-items-center justify-content-center p-0" id="auth-left">
                    <div class="text-center">
                        <h1 class="mb-3">ASEAN Hub International <br> Design Competition</h1>
                        <p class="lead mb-3">Join the competition, submit your ideas, and be part of ASEAN’s future.</p>
                    </div>
                </div>
                <div class="col-sm-5 d-flex flex-column align-items-center justify-content-center p-0" id="auth-right">
                    @yield('content')
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
        </main>
        {{-- main container --}}

        {{-- Bootstrap 5.3.8 --}}
        <script src="{{ asset('template-auth/bootstrap-5.3.8/dist/js/bootstrap.bundle.min.js') }}"></script>

        {{-- Fontawesome 6.7.2 --}}
        <script src="{{ asset('template-plugins/fontawesome-6.7.2/js/all.min.js') }}"></script>

        @stack('scripts')
    </body>

</html>
