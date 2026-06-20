@extends('layouts.auth')

{{-- push styles --}}
@include('components.notify.styles')

{{-- content --}}
@section('nav-login', 'active')
@section('content')

    @include('components.notify.alert')

    <div class="card border-0 px-2 py-2" id="auth-card">
        <div class="card-body">
            <form action="{{ route('login.process') }}" method="post" enctype="multipart/form-data" class="confirm-submit">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" id="email" autocomplete="email">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password">
                        <span class="input-group-text" id="togglePassword">
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </span>
                    </div>
                    <small class="text-muted">Password minimum 8 characters</small>
                </div>
                <div class="mb-0">
                    <button type="submit" class="btn btn-login btn-warning w-100">
                        <i class="fas fa-paper-plane me-2"></i>Login
                    </button>
                </div>
            </form>
        </div>
        {{-- card-body --}}
    </div>
    {{-- card --}}

    <div class="mt-3">
        <a href="{{ route('register') }}" class="text-dark fw-bold">Create an account</a>
    </div>
@endsection

{{-- push scripts --}}
@include('components.password.scripts')
@include('components.notify.scripts')
@include('components.sweetalert.scripts-alert', [
    'title' => 'Sign In?',
    'text' => 'Please confirm to continue to your account.',
    'icon' => 'question',
    'confirmButtonText' => 'Yes, Sign In',
])
