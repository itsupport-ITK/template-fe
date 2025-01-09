<textarea {{ $attributes->merge(['class' => 'form-control']) }}>{{ old($attributes->get('name'), $value) }}
</textarea>
@error($errorTag == '' ? $attributes->get('name') : $errorTag, $errorKey)
<x-form-error-text :message="$message" />
@enderror