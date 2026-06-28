@extends('layouts.auth')

{{-- push styles --}}
@include('components.notify.styles')

{{-- content --}}
@section('nav-register', 'active')
@section('content')

    @include('components.notify.alert')

    <div class="text-center">
        <div class="mb-3">
            <img src="{{ asset('img/dki-jakarta.webp') }}" style="height:90px">
        </div>
        <div class="mb-3">
            <h3>Welcome to ASEAN Hub</h3>
            <span>Create your account and join the competition today</span>
        </div>
    </div>

    <div class="card border-0 px-2 py-2" id="auth-card">
        <div class="card-body">
            <form action="{{ route('voters.register.store') }}" method="post" enctype="multipart/form-data" class="confirm-submit">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="voters_name" class="form-label">Full Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="voters_name" id="voters_name">
                            <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                        </div>
                        @error('voters_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="email" autocomplete="email">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password">
                            <span class="input-group-text" id="togglePassword">
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </span>
                        </div>
                        <small>Password minimum 8 characters<br></small>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-0">
                        <button type="submit" class="btn btn-login btn-warning w-100">
                            <i class="fas fa-user-plus me-2"></i>Register
                        </button>
                    </div>
                    {{-- col --}}
                </div>
                {{-- row --}}
            </form>
        </div>
        {{-- card-body --}}
    </div>
    {{-- card --}}

@endsection
@include('components.password.scripts')
@include('components.notify.scripts')
@include('components.sweetalert.scripts-alert', [
    'title' => 'Create Account?',
    'text' => 'Please confirm to continue the registration process.',
    'icon' => 'question',
    'confirmButtonText' => 'Yes, Sign Up',
])
