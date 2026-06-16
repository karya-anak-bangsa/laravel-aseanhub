@extends('layouts.auth')

@section('nav-register', 'active')
@section('content')

    <div class="text-center">
        <div class="mb-3">
            <img src="{{ asset('img/dki-jakarta.webp') }}" style="height:90px">
        </div>
        <div class="mb-4">
            <h4 class="fw-bold">Start Your Journey in ASEAN Hub</h4>
            <span class="text-muted">Create your account and join the competition today</span>
        </div>
    </div>

    <div class="card border-0 px-2 py-2" id="auth-card">
        <div class="card-body">
            <form action="{{ route('register.store') }}" method="post">
                @csrf

                <div class="row">
                    {{-- <div class="col-lg-6 mb-4">
                        <label for="role" class="form-label">Join As</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                            <select class="form-select" name="role" id="role">
                                <option value="" disabled selected></option>
                                <option value="participants">Participants</option>
                                <option value="voters">Voters</option>
                            </select>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" id="email" autocomplete="email">
                        </div>
                    </div> --}}

                    <div class="col-lg-12 mb-3">
                        <label for="role" class="form-label">Join As</label>
                        <div class="input-group">
                            <select class="form-select" name="role" id="role">
                                <option value="" disabled selected></option>
                                <option value="participants">Participants</option>
                                <option value="voters">Voters</option>
                            </select>
                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="full_name" class="form-label">Team Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="team_name" id="team_name">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="email" autocomplete="email">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password">
                            <span class="input-group-text" id="togglePassword">
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </span>
                        </div>
                        <small class="text-muted">Password minimum 8 characters</small>
                    </div>
                    <div class="col-lg-12 mb-0">
                        <button type="submit" class="btn btn-login btn-warning w-100">
                            <i class="fas fa-user-plus me-2"></i>Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
        {{-- card-body --}}
    </div>
    {{-- card --}}

@endsection
@include('components.password.scripts')
@include('components.sweetalert.scripts-alert')
