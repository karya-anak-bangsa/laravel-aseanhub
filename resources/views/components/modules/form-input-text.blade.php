<div class="form-group">

    <label for="{{ $name }}" class="{{ $required ? 'required' : '' }}">
        {{ $label }}
    </label>

    <input type="text" class="form-control border-dark"
        name="{{ $name }}" id="{{ $name }}"
        value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}">

    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
