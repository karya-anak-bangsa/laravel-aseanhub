<div class="row">

    {{-- Judges Name --}}
    <div class="col-sm-6">
        <x-modules.form-input
            label="Judges Name"
            name="judges_name"
            type="text"
            :value="$data->judges_name ?? null"
            :required=true />
    </div>

    <div class="col-sm-6">
        <x-modules.form-select
            label="Task of Judges"
            name="judges_task"
            :options="config('asean.tasks')"
            :value="$data->judges_task ?? null"
            :required=true />
    </div>

    {{-- Origin Country --}}
    <div class="col-sm-6">
        <x-modules.form-select
            label="Origin of Country"
            name="origin_country"
            :options="config('asean.countries')"
            :value="$data->origin_country ?? null"
            :required=true />
    </div>

    <div class="col-sm-6">
        <x-modules.form-input
            label="Origin of Institution"
            name="origin_institution"
            type="text"
            :value="$data->origin_institution ?? null"
            :required=true />
    </div>

    <div class="col-sm-12">
        @if (!empty($data?->photo_url))
            <img class="mt-2 mb-2 rounded"
                src="{{ $data->photo_url }}"
                alt="{{ $data->judges_name }}"
                width="128">
        @endif
        <x-modules.form-input
            label="Photo of Judges"
            name="judges_photo"
            type="file"
            :required="empty($data)" />
    </div>

    <div class="col-sm-6">
        <x-modules.form-input
            label="Email"
            name="email"
            type="email"
            :value="$data->email ?? null"
            :required=true />
    </div>

    <div class="col-sm-6">
        <x-modules.form-input
            label="Password (min 8 characters)"
            name="password"
            type="password"
            :required="empty($data)" />
    </div>

</div>
{{-- row --}}
