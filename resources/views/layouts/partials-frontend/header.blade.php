<div class="container">

    <div class="header-top d-none d-lg-flex align-items-center justify-content-between">
        <div class="contact-info">
            <a href="" class="logo d-flex align-items-center">
                <img src="{{ asset('img/dki-jakarta.webp') }}" alt="">
                <img src="{{ asset('img/logo-asean.png') }}" alt="">
                <img src="{{ asset('img/dki-500.webp') }}" alt="">
            </a>
        </div>
        <div class="social-links">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-thumbs-up me-2"></i>Sign Up
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('participants.register.create') }}">As Participants</a></li>
                    <li><a class="dropdown-item" href="{{ route('voters.register.create') }}">As Voters</a></li>
                </ul>
            </div>
            <a href="{{ route('login') }}" class="btn btn-danger"><i class="fa-solid fa-right-to-bracket me-2"></i>Sign In</a>
        </div>
    </div>

    <div class="header-main d-flex align-items-center justify-content-between">

        <a href="" class="logo d-flex align-items-center">
            <h1 class="sitename ms-2">ASEAN Hub</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero">Home</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>Competition</span><i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="#opening-speeches">Opening Speech</a></li>
                        <li><a href="#about-competition">About Competition</a></li>
                        <li><a href="#timeline">Timeline &amp; Event</a></li>
                    </ul>
                </li>
                <li><a href="#prize-pool">Prize Pool</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>Explore Design</span><i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="#site-area">Site Map</a></li>
                        <li><a href="#photo-gallery">Photo Gallery</a></li>
                        <li><a href="#">Video Gallery</a></li>
                    </ul>
                </li>
                <li><a href="#judges">Judges</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</div>
