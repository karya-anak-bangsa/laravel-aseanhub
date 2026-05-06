@extends('layouts.backend')

@section('nav-judges', 'active')
@section('content')

    <x-modules.callout type="info">
        Add Data Judges
    </x-modules.callout>

    <x-modules.index-form>
        <form action="{{ route('admin.judges.store') }}" method="post" enctype="multipart/form-data">

            @csrf
            @include('modules.judges._form')

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.judges.index') }}" class="btn btn-block btn-secondary">
                        <i class="fas fa-rotate-left mr-2"></i>Back
                    </a>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-success"
                        data-confirm data-icon="success"
                        data-title="Confirmation"
                        data-text="Are you sure want to save this data ?"
                        data-confirm-text="Save"
                        data-confirm-color="#28a745">

                        <i class="fas fa-save mr-2"></i>Save
                    </button>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}

        </form>
    </x-modules.index-form>

@endsection
{{-- @include('components.sweetalert.scripts') --}}
