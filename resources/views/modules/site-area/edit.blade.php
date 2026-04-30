@extends('layouts.backend')

@section('nav-site-area', 'active')
@section('content')

    <x-modules.callout type="info">
        Edit Site Area on ASEAN Hub
    </x-modules.callout>

    <x-modules.index-form>

        <form action="{{ route('admin.site-area.update', $data->id_site_area) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="Title"
                        name="title"
                        type="text"
                        :value='$data->title'
                        :required=true />
                    <x-modules.form-textarea
                        label="Description"
                        name="description"
                        :value='$data->description'
                        :required=true />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.site-area.index') }}" class="btn btn-block btn-secondary">
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
        {{-- form --}}

    </x-modules.index-form>

@endsection
@include('components.sweetalert.scripts-edit')
