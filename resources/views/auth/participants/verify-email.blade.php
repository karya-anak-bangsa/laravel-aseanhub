@extends('layouts.auth')

{{-- push styles --}}
@include('components.notify.styles')

{{-- content --}}
@section('nav-verify', 'active')
@section('content')

    @include('components.notify.alert')

@endsection
@include('components.notify.scripts')
