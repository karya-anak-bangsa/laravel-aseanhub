@extends('layouts.backend')

@section('nav-about-competition', 'active')
@section('content')

    <x-modules.callout type="info">
        Edit About Competition
    </x-modules.callout>

    <x-modules.index-form>

        <form action="{{ route('admin.about-competition.update', $data->id_about_competition) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')

            <div class="row mb-5">
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="Title Competition"
                        name="title"
                        type="text"
                        :value='$data->title ?? null'
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-textarea
                        label="Description Competition"
                        name="description"
                        rows=15
                        :value='$data->description ?? null'
                        :required=true />
                </div>
                <div class="col-sm-6">
                    <x-modules.form-input
                        label="Tag"
                        name="tag"
                        type="text"
                        :value="$data->tag"
                        :required=true />
                </div>
                <div class="col-sm-6">
                    <x-modules.form-input
                        label="Event Date"
                        name="event_date"
                        type="date"
                        :value='$data->event_date_input'
                        :required=true />
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="TOR Title"
                        name="title_tor"
                        type="text"
                        :value="$data->title_tor"
                        :required="true" />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-textarea
                        label="TOR Description"
                        name="description_tor"
                        rows="5"
                        :value="$data->description_tor"
                        :required="true" />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="TOR File (pdf)"
                        name="file_path"
                        type="file"
                        :value='$data->file_path'
                        :required=false />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.about-competition.index') }}" class="btn btn-block btn-secondary">
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
