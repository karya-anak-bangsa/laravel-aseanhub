@extends('layouts.backend')

@section('nav-timeline', 'active')
@section('content')

    {{-- HEADER --}}
    <x-modules.callout type="info">
        Edit Timeline
    </x-modules.callout>

    <x-modules.index-form>

        <form action="{{ route('admin.timeline.update', $data->id_timeline) }}" method="post" enctype="multipart/form-data" class="confirm-submit">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-sm-12">
                    <x-modules.form-input
                        label="Title"
                        name="title"
                        type="text"
                        :value='$data->title ?? null'
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-textarea
                        label="Description"
                        name="description"
                        rows="5"
                        :value='$data->description ?? null'
                        :required=false />
                </div>
                <div class="col-sm-6">
                    <x-modules.form-input
                        label="Start Date"
                        name="date_start"
                        type="date"
                        :value="$data->date_start_input"
                        :required=true />
                </div>
                <div class="col-sm-6">
                    <x-modules.form-input
                        label="End Date"
                        name="date_end"
                        type="date"
                        :value="$data->date_end_input"
                        :required=true />
                </div>
                <div class="col-sm-12">
                    <x-modules.form-select
                        label="Phase"
                        name="phase_key"
                        :value="$data->phase_key"
                        :required="true"
                        :options="\App\Models\Timeline::phaseOptions()" />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.timeline.index') }}" class="btn btn-block btn-secondary">
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
