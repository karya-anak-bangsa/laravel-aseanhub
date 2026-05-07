@if (Auth::guard('admin')->check())
    {{-- 1. DASHBOARD --}}
    <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link @yield('nav-dashboard')">
            <i class="nav-icon fa-solid fa-building-columns"></i>
            <p>Main Dashboard</p>
        </a>
    </li>

    {{-- USER ACCESS --}}
    <li class="nav-header mt-2">USER ACCESS</li>
    <li class="nav-item">
        <a href="{{ route('admin.judges.index') }}" class="nav-link @yield('nav-judges')">
            <i class="nav-icon fa-solid fa-user-graduate"></i>
            <p>Judges</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.participants.index') }}" class="nav-link @yield('nav-participants')">
            <i class="nav-icon fa-solid fa-users"></i>
            <p>Participants</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.voters.index') }}" class="nav-link @yield('nav-voters')">
            <i class="nav-icon fa-solid fa-users"></i>
            <p>Voters</p>
        </a>
    </li>

    {{-- PARTICIPANT RESULTS --}}
    <li class="nav-header mt-2">RESULTS OF ASEAN HUB</li>
    <li class="nav-item">
        <a href="" class="nav-link @yield('nav-test')">
            <i class="nav-icon fa-solid fa-box-archive"></i>
            <p>Urban Design</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link @yield('nav-test')">
            <i class="nav-icon fa-solid fa-file-contract"></i>
            <p>Assessment Results</p>
        </a>
    </li>

    {{-- Company Profile --}}
    <li class="nav-header mt-2">COMPANY PROFILE</li>
    {{-- <li class="nav-item">
        <a href="" class="nav-link @yield('nav-test')">
            <i class="nav-icon fas fa-landmark"></i>
            <p>Identitas Website</p>
        </a>
    </li> --}}
    <li class="nav-item">
        <a href="{{ route('admin.about-aseanhub.index') }}" class="nav-link @yield('nav-about-aseanhub')">
            <i class="nav-icon fa-solid fa-landmark"></i>
            <p>About ASEAN Hub</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.opening-speeches.index') }}" class="nav-link @yield('nav-opening-speeches')">
            <i class="nav-icon fas fa-comment-dots"></i>
            <p>Opening Speeches</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.about-competition.index') }}" class="nav-link @yield('nav-about-competition')">
            <i class="nav-icon fas fa-message"></i>
            <p>About Competition</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.timeline.index') }}" class="nav-link @yield('nav-timeline')">
            <i class="nav-icon fas fa-calendar-days"></i>
            <p>Timeline & Event</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.site-area.index') }}" class="nav-link @yield('nav-site-area')">
            <i class="nav-icon fas fa-map"></i>
            <p>Site Area</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.photo-gallery.index') }}" class="nav-link @yield('nav-photo-gallery')">
            <i class="nav-icon fas fa-camera"></i>
            <p>Photo Gallery</p>
        </a>
    </li>
@endif
