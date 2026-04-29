@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-about-competition', 'active')
@section('content')

    @if (session('notify'))
        <div id="notify-data"
            data-status="{{ session('notify.status') }}"
            data-text="{{ session('notify.text') }}">
        </div>
    @endif

    <x-modules.callout type="info">
        Information of About Competition
    </x-modules.callout>

    <x-modules.index-table>
        <x-slot:header></x-slot>
        <x-slot:thead>
            <tr>
                <th class="text-left">Competition</th>
                <th class="text-left">TOR</th>
                <th class="text-left text-nowrap">Date</th>
                <th class="text-center text-nowrap">Action</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            <tr>
                <td class="text-left">
                    <span class="text-bold">{{ $data->title ?? '-' }}</span><br>
                    <span class="text-dark">{{ $data->tag ?? '-' }}</span><br>
                    <small class="text-muted">{!! $data->description ?? '-' !!}</small>
                </td>

                <td class="text-left">
                    <span class="text-bold">{{ $data->title_tor ?? '-' }}</span><br>
                    <small class="text-muted">{!! $data->description_tor ?? '-' !!}</small>
                </td>
                <td class="text-left text-nowrap">{{ $data->event_date_input ?? '-' }}</td>
                <td class="text-center text-nowrap">
                    <a href="{{ route('admin.about-competition.edit', $data->id_about_competition) }}" class="btn btn-sm btn-warning">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                </td>
            </tr>
        </x-slot>
        <x-slot:footer>
            <small class="text-danger">
                <div class="text-right">Data Access {{ now()->format('Y/m/d - H:i') }} WIB</div>
            </small>
        </x-slot>
    </x-modules.index-table>

@endsection

{{-- push scripts --}}
@include('components.datatables.scripts')
@include('components.notify.scripts')
