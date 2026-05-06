<div class="container">

    <div class="header-top d-none d-lg-flex align-items-center justify-content-between">
        <div class="contact-info">
            <a href="" class="logo d-flex align-items-center">
                <img src="{{ asset('img/logo-asean.png') }}" alt="">
                <img src="{{ asset('img/dki-jakarta.webp') }}" alt="">
                <img src="{{ asset('img/dki-500.webp') }}" alt="">
            </a>
        </div>
        <div class="social-links">
            <a href="{{ route('register') }}" class="btn btn-primary me-2"><i class="fa-solid fa-thumbs-up me-2"></i>Sign Up</a>
            <a href="{{ route('login') }}" class="btn btn-danger me-0"><i class="fa-solid fa-right-to-bracket me-2"></i>Sign In</a>
        </div>
    </div>

    <div class="header-main d-flex align-items-center justify-content-between">

        <a href="" class="logo d-flex align-items-center">
            <h1 class="sitename ms-2">ASEAN Hub</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="">Home</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>Competition</span><i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="#opening-speeches">Opening Speech</a></li>
                        <li><a href="#">About Competition</a></li>
                        <li><a href="">Timeline &amp; Event</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Explore Design</span><i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Urban Design</a></li>
                    </ul>
                </li>
                <li><a href="">Prize Pool</a></li>
                <li><a href="">Judges</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</div>
