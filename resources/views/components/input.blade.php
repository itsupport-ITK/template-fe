<input type="{{ $type }}" {{ $attributes->merge(['class' => 'form-control']) }} value="{{ old($attributes->get('name'), $value) }}">

{{-- @error('errorname', 'errorkey') errorkey untuk custom error bag --}} 
@error($errorTag == '' ? $attributes->get('name') : $errorTag, $errorKey)
<x-form-error-text :message="$message" />
@enderror