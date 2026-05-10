@if ($preview)
    <div class="mb-2">
        <img src="{{ $preview }}"
            class="rounded border"
            width="150"
            loading="lazy"
            alt="Preview Image">
    </div>
@endif

<div class="form-group">

    <label for="{{ $name }}" class="{{ $required ? 'required' : '' }}">
        {{ $label }}
    </label>

    <img src="{{ $data->photo_url }}" width="128" class="mb-2 rounded">

    <div class="custom-file">
        <input type="file" class="custom-file-input" name="{{ $name }}" id="{{ $name }}">
        <label class="custom-file-label border-dark" for="{{ $name }}">Choose file</label>
    </div>

    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
