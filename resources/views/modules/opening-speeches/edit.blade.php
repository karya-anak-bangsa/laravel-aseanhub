@extends('layouts.backend')

@section('nav-opening-speeches', 'active')
@section('content')

    {{-- HEADER --}}
    <x-modules.callout type="info">
        Edit Opening Speeches
    </x-modules.callout>

    <x-modules.index-form>

        <form action="{{ route('admin.opening-speeches.update', $data->id_opening_speeches) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="Name of Policy Maker"
                        name="name"
                        type="text"
                        :value='$data->name ?? null'
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="Position"
                        name="position"
                        type="text"
                        :value='$data->position ?? null'
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-textarea
                        label="Opening Speech"
                        name="message"
                        rows=15
                        :value='$data->message ?? null'
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <img src="{{ $data->photo_url }}" width="128" class="mb-2 rounded">
                    <x-modules.form-input
                        label="Photo"
                        name="photo"
                        type="file"
                        :required=false />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.opening-speeches.index') }}" class="btn btn-block btn-secondary">
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
