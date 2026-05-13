@if (Auth::guard('participants')->check())
    {{-- 1. DASHBOARD --}}
    <li class="nav-item">
        <a href="{{ route('participants.dashboard') }}" class="nav-link @yield('nav-dashboard')">
            <i class="nav-icon fa-solid fa-building-columns"></i>
            <p>Main Dashboard</p>
        </a>
    </li>

    {{-- 2. PROFILE PARTICIPANT --}}
    <li class="nav-header mt-2">PROFILE PARTICIPANT</li>
    <li class="nav-item">
        <a href="{{ route('participants.update-profile.show', auth('participants')->user()->id_participants) }}" class="nav-link @yield('nav-participants')">
            <i class="nav-icon fa-solid fa-book"></i>
            <p>Update Profile</p>
        </a>
    </li>

    {{-- 3. PARTICIPANTS RESULTS --}}
    <li class="nav-header mt-2">PARTICIPANT RESULTS</li>
    <li class="nav-item">
        <a href="" class="nav-link @yield('nav-test')">
            <i class="nav-icon fa-solid fa-book"></i>
            <p>Urban Design</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link @yield('nav-test')">
            <i class="nav-icon fa-solid fa-book"></i>
            <p>Assessment Results</p>
        </a>
    </li>
@endif
