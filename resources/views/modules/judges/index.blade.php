@extends('layouts.backend')

{{-- push styles --}}
@include('components.datatables.styles')
@include('components.notify.styles')

{{-- content --}}
@section('nav-judges', 'active')
@section('content')

    @if (session('notify'))
        <div id="notify-data"
            data-status="{{ session('notify.status') }}"
            data-text="{{ session('notify.text') }}">
        </div>
    @endif

    {{-- - 1. Judul --}}
    <x-modules.callout type="info">
        Statistical Information of Data Judges
    </x-modules.callout>

    <div class="row">
        <x-modules.small-box
            color="bg-info"
            icon="fas fa-user-group"
            title="Total Judges"
            :value="$stats['total_judges']" />
        <x-modules.small-box
            color="bg-success"
            icon="fas fa-file-lines"
            title="Assessment One"
            :value="$stats['assessment_one']" />
        <x-modules.small-box
            color="bg-warning"
            icon="fas fa-file-lines"
            title="Assessment Two"
            :value="$stats['assessment_two']" />
        <x-modules.small-box
            color="bg-danger"
            icon="fas fa-flag-checkered"
            title="Final Assessment"
            :value="$stats['final_assessment']" />
    </div>

    <x-modules.index-table>
        <x-slot:header>
            <a href="{{ route('admin.judges.create') }}" class="btn btn-success">Add Data</a>
        </x-slot>
        <x-slot:thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-center">Photo</th>
                <th class="text-left">Full Name</th>
                <th class="text-left">Institution</th>
                <th class="text-left">Country</th>
                <th class="text-center text-nowrap">Action</th>
            </tr>
        </x-slot>
        <x-slot:tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ number_format($loop->iteration) }}</td>
                    <td class="text-center">
                        <img src="{{ $item->photo_url }}"
                            class="rounded-circle" width="128" height="128" loading="lazy"
                            alt="Foto {{ $item->judges_name }}">
                    </td>
                    <td class="text-left">
                        <span class="text-bold">{{ $item->judges_name ?? '-' }}</span><br>
                        <small class="text-muted">{{ $item->judges_task ?? '-' }}</small>
                    </td>
                    <td class="text-left">{{ $item->origin_institution ?? '-' }}</td>
                    <td class="text-left">{{ $item->origin_country ?? '-' }}</td>
                    <td class="text-center text-nowrap">

                        {{-- SHOW --}}
                        <a href="{{ route('admin.judges.show', $item->id_judges) }}" class="btn btn-sm btn-info">
                            <i class="fa-solid fa-display"></i>
                        </a>

                        {{-- EDIT --}}
                        <a href="{{ route('admin.judges.edit', $item->id_judges) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-edit"></i>
                        </a>

                        {{-- DELETE --}}
                        <form action="{{ route('admin.judges.destroy', $item->id_judges) }}" method="post" enctype="multipart/form-data" class="confirm-submit d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
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
@include('components.sweetalert.scripts-destroy')
