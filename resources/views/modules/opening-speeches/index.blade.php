@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-opening-speeches', 'active')
@section('content')

    @if (session('notify'))
        <div id="notify-data"
            data-status="{{ session('notify.status') }}"
            data-text="{{ session('notify.text') }}">
        </div>
    @endif

    {{-- - 1. Judul --}}
    <x-modules.callout type="info">
        Information of Opening Speeches
    </x-modules.callout>

    <x-modules.index-table>
        <x-slot:header>

        </x-slot>
        <x-slot:thead>
            <tr>
                <th width="15%" class="text-center">Photo</th>
                <th width="20%" class="text-left">Full Name</th>
                <th width="50%" class="text-left">Opening Speech</th>
                <th width="10%" class="text-center">Action</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">
                        <img src="{{ $item->photo_url }}"
                            class="rounded-circle" width="150" height="150" loading="lazy"
                            alt="Foto {{ $item->name }}">
                    </td>
                    <td class="text-left">
                        <span class="text-bold">{{ $item->name ?? '-' }}</span><br>
                        <small class="text-muted">{{ $item->position ?? '-' }}</small>
                    </td>
                    <td class="text-left">{!! $item->message ?? '-' !!}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.opening-speeches.edit', $item->id_opening_speeches) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
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
