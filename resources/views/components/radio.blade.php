<div>
    <div class="form-check">
        <input {{ $attributes->merge(['class' => 'form-check-input']) }} type="radio">
        <label class="form-check-label" for="flexRadioDefault1">
            {{ $label  }}
        </label>
        {{-- {{ $slot }} --}}
    </div>
</div>
