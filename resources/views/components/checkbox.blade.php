@props([
    'checked' => false
])

<div class="form-check" >
    <input {{ $attributes->merge(['class' => 'form-check-input']) }} type="checkbox" aria-label="{{ $attributes->get('id') }}" {{ $checked?'checked':'' }}>

    @if (isset($label))
    <label class="form-check-label" for="{{ $attributes->get('id') }}">
        {{ $label }}
    </label>
    @endif
</div>