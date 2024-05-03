@props(['label', 'name', 'type' => 'text', 'required' => false])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $label }}" @if($required) required @endif>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>