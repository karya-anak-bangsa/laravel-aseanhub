@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-about-aseanhub', 'active')
@section('content')

    @if (session('notify'))
        <div id="notify-data"
            data-status="{{ session('notify.status') }}"
            data-text="{{ session('notify.text') }}">
        </div>
    @endif

    {{-- - 1. Judul --}}
    <x-modules.callout type="info">
        Information of About ASEAN Hub
    </x-modules.callout>

    <x-modules.index-table>
        <x-slot:header></x-slot>
        <x-slot:thead>
            <tr>
                <th width="15%" class="text-center">Image</th>
                <th width="20%" class="text-left">Title</th>
                <th width="50%" class="text-left">Description</th>
                <th width="10%" class="text-center">Action</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            <tr>
                <td class="text-center">
                    <img src="{{ $data->image_url }}"
                        class="rounded-circle" width="150" height="150" loading="lazy"
                        alt="Foto {{ $data->title ?? '-' }}">
                </td>
                <td class="text-left">{{ $data->title ?? '-' }}</td>
                <td class="text-left">{!! $data->description ?? '-' !!}</td>
                <td class="text-center">
                    <a href="{{ route('admin.about-aseanhub.edit', $data->id_about_aseanhub) }}" class="btn btn-sm btn-warning">
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
