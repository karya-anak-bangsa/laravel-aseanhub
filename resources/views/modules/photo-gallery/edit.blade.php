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
                    <div class="form-group">
                        <label for="title" class="required">Title</label>
                        <input type="text" class="form-control border-dark" name="title" id="title" value="{{ old('title', $data->title ?? '') }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="description" class="required">Description</label>
                        <textarea class="form-control border-dark summernote" name="description" id="description" rows="15">
                            {{ old('description', $data->description ?? '') }}
                        </textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
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
