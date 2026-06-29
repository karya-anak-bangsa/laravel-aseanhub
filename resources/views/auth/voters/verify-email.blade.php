@extends('layouts.auth')

{{-- push styles --}}
@include('components.notify.styles')

{{-- content --}}
@section('nav-verify', 'active')
@section('content')

    @include('components.notify.alert')

    <div class="text-center">
        <div class="mb-3">
            <img src="{{ asset('img/dki-jakarta.webp') }}" style="height:90px">
        </div>
        <div class="mb-3">
            <h3>Email Verification</h3>
            <span>Please enter the verification code sent to your email.</span>
        </div>
    </div>

    <div class="card border-0 px-2 py-2" id="auth-card">
        <div class="card-body">
            <form action="{{ route('voters.verify-email.store', $voters->id_voters) }}"
                method="POST"
                enctype="multipart/form-data"
                class="confirm-submit">

                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" id="email" autocomplete="email" value="{{ $voters->email }}" readonly>
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="otp_code" class="form-label">Verification Code</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="otp_code" id="otp_code" autocomplete="one-time-code" autofocus>
                        <span class="input-group-text"><i class="fas fa-shield-alt"></i></span>
                    </div>
                    <small>Enter 6-digit verification code</small>
                </div>
                <div class="mb-0">
                    <button type="submit" class="btn btn-login btn-warning w-100">
                        <i class="fas fa-check-circle me-2"></i>Verify Email
                    </button>
                </div>
            </form>
        </div>
        {{-- card-body --}}
    </div>
    {{-- card --}}

    <div class="text-center mt-3 mb-0">
        <small>Didn't receive the verification code?</small><br>
        <form action="{{ route('voters.verify-email.resend', $voters->id_voters) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-link p-0">
                Resend Verification Code
            </button>
        </form>
    </div>

@endsection
@include('components.notify.scripts')
