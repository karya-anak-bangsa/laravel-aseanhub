@extends('layouts.backend')

{{-- push styles --}}
@include('components.notify.styles')
@include('components.datatables.styles')

{{-- content --}}
@section('nav-dashboard', 'active')
@section('content')

    @include('components.notify.alert')

    {{-- Benner --}}
    <x-modules.dashboard-banner>
        Welcome to ASEAN Hub International Design Competition by Provincial Government of DKI Jakarta
    </x-modules.dashboard-banner>

    {{-- Information of Administrator --}}
    <x-modules.dashboard-profile
        title="Information of Administrator"
        collapse="true"
        :fields="[
            'Full Name' => $admin->admin_name,
            'Email Account' => $admin->email,
        ]">
    </x-modules.dashboard-profile>

    {{-- COMPETITION OVERVIEW --}}
    <div class="row mb-3">
        <div class="col-sm-12">
            <x-modules.callout type="info" color="info" icon="fa-chart-simple">
                Statistical Information of ASEAN HUB 2026
            </x-modules.callout>
        </div>
        <x-modules.small-box
            color="bg-lightblue"
            icon="fas fa-user-gear"
            title="Total Admin"
            :value="$stats['admin'] ?? 0" />
        <x-modules.small-box
            color="bg-success"
            icon="fas fa-user-graduate"
            title="Total Judges"
            :value="$stats['judges'] ?? 0" />
        <x-modules.small-box
            color="bg-warning"
            icon="fas fa-users"
            title="Total Participants"
            :value="$stats['participants'] ?? 0" />
        <x-modules.small-box
            color="bg-danger"
            icon="fas fa-users"
            title="Total Voters"
            :value="$stats['voters'] ?? 0" />
    </div>

    {{-- JUDGES ASSESSMENT STRUCTURE   --}}
    <div class="row mb-3">
        <div class="col-sm-12">
            <x-modules.callout type="info" color="info" icon="fa-chart-simple">
                Judges Assessment Structure
            </x-modules.callout>
        </div>
        <x-modules.small-box
            color="bg-lightblue"
            icon="fas fa-file-lines"
            title="Assessment One"
            :value="$summary_judges['assessment_one'] ?? 0" />
        <x-modules.small-box
            color="bg-success"
            icon="fas fa-file-lines"
            title="Assessment Two"
            :value="$summary_judges['assessment_two'] ?? 0" />
        <x-modules.small-box
            color="bg-warning"
            icon="fas fa-flag-checkered"
            title="Final Assessment"
            :value="$summary_judges['final_assessment'] ?? 0" />
    </div>

    {{-- PARTICIPANT REGISTRATION STATUS --}}
    <div class="row mb-0">
        <div class="col-sm-12">
            <x-modules.callout type="info" color="info" icon="fa-chart-simple">
                Participants Registration Status
            </x-modules.callout>
        </div>
        <x-modules.small-box
            color="bg-lightblue"
            icon="fas fa-globe"
            title="Countries"
            :value="$summary_participants['countries']" />
        <x-modules.small-box
            color="bg-success"
            icon="fas fa-circle-check"
            title="Verified"
            :value="$summary_participants['verified']" />
        <x-modules.small-box
            color="bg-warning"
            icon="fas fa-hourglass-half"
            title="Pending"
            :value="$summary_participants['pending']" />
        <x-modules.small-box
            color="bg-danger"
            icon="fas fa-circle-xmark"
            title="Rejected"
            :value="$summary_participants['rejected']" />
    </div>

@endsection

{{-- push scripts --}}
@include('components.notify.scripts')
@include('components.datatables.scripts')
