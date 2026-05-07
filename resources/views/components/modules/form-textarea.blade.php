<div class="form-group">

    <label for="{{ $name }}" class="{{ $required ? 'required' : '' }}">
        {{ $label }}
    </label>

    <textarea class="form-control border-dark summernote" name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}">
        {{ old($name, $value) }}
    </textarea>

    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
