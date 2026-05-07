@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-photo-gallery', 'active')
@section('content')

    @if (session('notify'))
        <div id="notify-data"
            data-status="{{ session('notify.status') }}"
            data-text="{{ session('notify.text') }}">
        </div>
    @endif

    {{-- - 1. Callout --}}
    <x-modules.callout type="info">
        Photo Gallery and Moments
    </x-modules.callout>

    {{-- 2. Datatables --}}
    <x-modules.index-table>
        <x-slot:header>

        </x-slot>
        <x-slot:thead>
            <tr>
                <th width="15%" class="text-center">Photo</th>
                <th class="text-left">Title</th>
                <th width="45%" class="text-left">Description</th>
                <th class="text-left">Order</th>
                <th class="text-center">Action</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">
                        <img src="{{ $item->image_url }}"
                            class="rounded-circle" width="128" height="128" loading="lazy"
                            alt="Foto {{ $item->title }}">
                    </td>
                    <td class="text-left">{{ $item->title ?? '-' }}</td>
                    <td class="text-left">{!! $item->description ?? '-' !!}</td>
                    <td class="text-center">{{ $item->sort_order }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.photo-gallery.edit', $item->id_photo_gallery) }}" class="btn btn-sm btn-warning">
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
