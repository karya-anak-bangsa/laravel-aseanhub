@extends('layouts.auth')

@section('nav-register', 'active')
@section('content')

    <div class="text-center">
        <div class="mb-3">
            <img src="{{ asset('img/dki-jakarta.webp') }}" style="height:100px">
        </div>
        <div class="mb-5">
            <h4 class="fw-bold">Start Your Journey in ASEAN Hub</h4>
            <span class="text-muted">Create your account and join the competition today</span>
        </div>
    </div>

    <div class="card border-0 px-2 py-2" id="auth-card">
        <div class="card-body">
            <form action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="role" class="form-label">Join As</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-users"></i></span>
                        <select class="form-select" name="role" id="role">
                            <option value="" disabled selected></option>
                            <option value="participants">Participants</option>
                            <option value="voters">Voters</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" id="email" autocomplete="email">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text" id="togglePassword">
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </span>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <small class="text-muted">Password minimum 8 characters</small>
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-login btn-warning w-100">
                        <i class="fas fa-user-plus me-2"></i>Register
                    </button>
                </div>
                {{-- <div class="mb-0">
                    <div class="text-center">
                        <span>Already have an account?</span>
                        <span><a href="{{ route('login') }}"> Login</a></span>
                    </div>
                </div> --}}
            </form>
        </div>
        {{-- card-body --}}
    </div>
    {{-- card --}}
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('alert'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "{{ session('alert.icon') }}",
                    title: "{{ session('alert.title') }}",
                    text: "{{ session('alert.text') }}",
                    confirmButtonColor: '#f59e0b'
                });
            });
        </script>
    @endif

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            let password = document.getElementById('password');
            let icon = document.getElementById('eyeIcon');
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
@endpush
