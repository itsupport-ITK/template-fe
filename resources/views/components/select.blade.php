<select {{ $attributes->merge(['class' => 'form-select']) }}>
    <option selected disabled value="">Choose...</option>
    {{ $slot }}
</select>

@error($errorTag == '' ? $attributes->get('name') : $errorTag, $errorKey)
<x-form-error-text :message="$message" />
@enderror