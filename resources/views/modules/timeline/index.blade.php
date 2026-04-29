@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-timeline', 'active')
@section('content')

    @if (session('notify'))
        <div id="notify-data"
            data-status="{{ session('notify.status') }}"
            data-text="{{ session('notify.text') }}">
        </div>
    @endif

    {{-- - 1. Judul --}}
    <x-modules.callout>
        Timeline of Event ASEAN HUB 2026
    </x-modules.callout>

    {{-- 2. Index Blade --}}
    <x-modules.index-table>
        <x-slot:header></x-slot>
        <x-slot:thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-left">Title</th>
                <th class="text-left">Start</th>
                <th class="text-left">Finish</th>
                <th class="text-left">Description</th>
                <th class="text-left">Phase</th>
                <th class="text-left">Is Current</th>
                <th class="text-center">Action</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ number_format($loop->iteration) }}</td>
                    <td class="text-left">{{ $item->title ?? '-' }}</td>
                    <td class="text-left">{{ $item->date_start_formatted }}</td>
                    <td class="text-left">{{ $item->date_end_formatted }}</td>
                    <td class="text-left">{!! $item->description ?? '-' !!}</td>
                    <td class="text-left">
                        <span class="badge badge-info badge-custom">
                            {{ $item->phase_label }}
                        </span>
                    </td>
                    <td class="text-left">
                        @if ($item->is_current)
                            <span class="badge badge-success badge-custom">Running</span>
                        @else
                            <span class="badge badge-secondary badge-custom">Not Running</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.timeline.edit', $item->id_timeline) }}" class="btn btn-sm btn-warning">
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
