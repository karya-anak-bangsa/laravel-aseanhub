@extends('layouts.backend')

{{-- content --}}
@section('nav-participants', 'active')
@section('content')

    <div class="row d-flex align-items-stretch mb-4">
        <div class="col-sm-8">
            <div class="card card-outline card-info h-100">
                <div class="card-header">
                    <span class="text-bold"><i class="fa-solid fa-user-graduate mr-2"></i>Main Information</span>
                </div>
                <div class="card-body">
                    <table class="table border-bottom">
                        <tr>
                            <td width="50%" class="text-left text-bold">Team Name</td>
                            <td width="50%" class="text-right">{{ $data->team_name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-left text-bold">Team Leader</td>
                            <td width="50%" class="text-right">{{ $data->participants_name_1 ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-left text-bold">Member Team</td>
                            <td width="50%" class="text-right">
                                {{ $data->participants_name_2 ?? '-' }} <br>
                                {{ $data->participants_name_3 ?? '-' }} <br>
                                {{ $data->participants_name_4 ?? '-' }} <br>
                                {{ $data->participants_name_5 ?? '-' }} <br>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-left text-bold">Country</td>
                            <td width="50%" class="text-right">{{ $data->participants_country ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-left text-bold">Phone Number</td>
                            <td width="50%" class="text-right">{{ $data->participants_phone ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-left text-bold">Email</td>
                            <td width="50%" class="text-right">{{ $data->email ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row mb-4">
                <div class="col-sm-12">
                    <div class="card card-outline card-info h-100">
                        <div class="card-header">
                            <span class="text-bold"><i class="fa-solid fa-chart-simple mr-2"></i>Data Completeness</span>
                        </div>
                        <div class="card-body">
                            <table class="table border-bottom">
                                <tr>
                                    <td width="50%" class="text-left text-bold">Registration</td>
                                    <td width="50%" class="text-right">{!! $data->badge_registration ?? '-' !!}</td>
                                </tr>
                                <tr>
                                    <td width="50%" class="text-left text-bold">Urban Design</td>
                                    <td width="50%" class="text-right">{!! $data->badge_urban_design ?? '-' !!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-sm-12">
                    <div class="card card-outline card-info h-100">
                        <div class="card-header">
                            <span class="text-bold"><i class="fa-solid fa-chart-simple mr-2"></i>Status Competition</span>
                        </div>
                        <div class="card-body">
                            <table class="table border-bottom">
                                <tr>
                                    <td width="50%" class="text-left text-bold">Assessment One</td>
                                    <td width="50%" class="text-right">{!! $data->badge_assessment_one ?? '-' !!}</td>
                                </tr>
                                <tr>
                                    <td width="50%" class="text-left text-bold">Assessment Two</td>
                                    <td width="50%" class="text-right">{!! $data->badge_assessment_two ?? '-' !!}</td>
                                </tr>
                                <tr>
                                    <td width="50%" class="text-left text-bold">Final Assessment</td>
                                    <td width="50%" class="text-right">{!! $data->badge_assessment_final ?? '-' !!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
            </div>
        </div>
        {{-- col-sm --}}
    </div>
    {{-- row --}}

    <div class="row mb-0">
        <div class="col-sm-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <span class="text-bold"><i class="fa-solid fa-calendar mr-2"></i>Status & Activity Log</span>
                </div>
                <div class="card-body">
                    <table class="table border-bottom">
                        <tbody>
                            <tr>
                                <td class="text-left">Status Data</td>
                                <td class="text-right">
                                    <span class="badge badge-custom {{ $data->status_data == 'Active' ? 'badge-success' : 'badge-danger' }}">
                                        {{ $data->status_data ?? '-' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Last Updated</td>
                                <td class="text-right">
                                    {{ $data->updated_at?->format('Y/m/d') ?? '-' }} -
                                    {{ $data->updated_at?->format('H:i') ?? '-' }} WIB
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- card-body --}}
            </div>
            {{-- card --}}
        </div>
        {{-- col-sm --}}
    </div>
    {{-- row --}}

@endsection
