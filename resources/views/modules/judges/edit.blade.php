@extends('layouts.backend')

@section('nav-judges', 'active')
@section('content')

    {{-- HEADER --}}
    <x-modules.callout type="info">
        Edit Data Judges
    </x-modules.callout>

    <x-modules.index-form>
        <form action="{{ route('admin.judges.update', $data->id_judges) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')

            @include('modules.judges._form')

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.judges.index') }}" class="btn btn-block btn-secondary">
                        <i class="fas fa-undo mr-2"></i>Back
                    </a>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-warning">
                        <i class="fas fa-edit mr-2"></i>Edit
                    </button>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}

        </form>
    </x-modules.index-form>

@endsection
@include('components.sweetalert.scripts-edit')
