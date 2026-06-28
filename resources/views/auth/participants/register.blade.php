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
        <div class="mb-4">
            <h3>Welcome to ASEAN Hub</h3>
            {{-- <span>Sign in to continue your journey in the competition</span> --}}
            {{-- <span class="text-muted">Create your account and join the competition today</span> --}}
        </div>
    </div>

    <div class="card border-0 px-2 py-2" id="auth-card">
        <div class="card-body">
            <form action="{{-- route('register.store') --}}" method="post"> @csrf
            </form>
        </div>
        {{-- card-body --}}
    </div>
    {{-- card --}}

@endsection
@include('components.password.scripts')
@include('components.notify.scripts')
