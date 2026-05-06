@extends('layouts.backend')

@section('nav-judges', 'active')
@section('content')

    <x-modules.callout type="info">
        Add Data Judges
    </x-modules.callout>

    <x-modules.index-form>
        <form action="{{ route('admin.judges.store') }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @include('modules.judges._form')

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.judges.index') }}" class="btn btn-block btn-secondary">
                        <i class="fas fa-undo mr-2"></i>Back
                    </a>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-success">
                        <i class="fas fa-save mr-2"></i>Save
                    </button>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}

        </form>
    </x-modules.index-form>

@endsection
@include('components.sweetalert.scripts-create')
