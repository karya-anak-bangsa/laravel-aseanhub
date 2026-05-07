@extends('layouts.backend')

@section('nav-photo-gallery', 'active')
@section('content')

    {{-- - 1. Callout --}}
    <x-modules.callout type="info">
        Photo Gallery and Moments
    </x-modules.callout>

    {{-- 2. Form Edit --}}
    <x-modules.index-form>

        <form action="{{ route('admin.photo-gallery.update', $data->id_photo_gallery) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-sm-12">
                    <x-modules.form-input-text
                        label="Title"
                        name="title"
                        :value="$data->title ?? null"
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-textarea
                        label="Description"
                        name="description"
                        :value="$data->description"
                        :required=true />
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.photo-gallery.index') }}" class="btn btn-block btn-secondary">
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
