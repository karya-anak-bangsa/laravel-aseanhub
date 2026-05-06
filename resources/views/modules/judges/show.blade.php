@extends('layouts.backend')

{{-- content --}}
@section('nav-judges', 'active')
@section('content')

    <div class="row d-flex align-items-stretch mb-4">
        <div class="col-sm-4">
            <div class="card card-outline card-info h-100">
                <div class="card-header">
                    <span class="text-bold">Photo</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body profile-card">
                    <img src="{{ $data->photoUrl }}"
                        class="rounded-circle profile-img" width="128"
                        alt="Foto {{ $data->judges_name }}">
                </div>
                <div class="card-footer">
                    <div class="text-dark text-center font-weight-bold ">
                        <span>{{ $data->judges_name ?? '-' }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card card-outline card-info h-100">
                <div class="card-header">
                    <span class="text-bold">Detail Data Judges</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table border-bottom">
                        <tr>
                            <td width="25%" class="text-bold">Full Name</td>
                            <td width="75%" class="text-dark">{{ $data->judges_name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td width="25%" class="text-bold">Country</td>
                            <td width="75%" class="text-dark">{{ $data->origin_country ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td width="25%" class="text-bold">Institution</td>
                            <td width="75%" class="text-dark">{{ $data->origin_institution ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td width="25%" class="text-bold">Task</td>
                            <td width="75%" class="text-dark">{{ $data->judges_task ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td width="25%" class="text-bold">Email</td>
                            <td width="75%" class="text-dark">{{ $data->email ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <small class="text-danger">
                        <div class="text-right">
                            Data Access {{ now()->format('Y-m-d') }} - {{ now()->format('H:i') }} WIB
                        </div>
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-sm-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <span class="text-bold">Status & Activity Log</span>
                </div>
                <div class="card-body">
                    <table class="table border-bottom">
                        <tbody>
                            <tr>
                                <td class="text-left text-dark">Status Data</td>
                                <td class="text-right text-dark">
                                    @if ($data->status_data == 'Active')
                                        <span class="badge badge-success badge-custom">
                                            {{ $data->status_data }}
                                        </span>
                                    @else
                                        <span class="badge badge-danger badge-custom">
                                            {{ $data->status_data }}
                                        </span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left text-dark">Last Updated</td>
                                <td class="text-right text-dark">
                                    {{ optional($data->updated_at)->format('Y/m/d') }} -
                                    {{ optional($data->updated_at)->format('H:i') }} WIB
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
