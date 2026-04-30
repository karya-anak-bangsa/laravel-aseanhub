<div class="form-group">

    <label for="{{ $name }}" class="{{ $required ? 'required' : '' }}">
        {{ $label }}
    </label>

    @if ($type === 'file')
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="{{ $name }}" id="{{ $name }}">
            <label class="custom-file-label border-dark" for="{{ $name }}">Choose file</label>
        </div>
    @else
        <input
            type="{{ $type }}" class="form-control border-dark"
            name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}">
    @endif

    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
