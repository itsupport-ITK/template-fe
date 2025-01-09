<a {{ $attributes->merge(['href' => $url]) }} {{ $attributes->merge(['class' => 'btn btn-' . $color]) }}>
    {{ $slot }}
</a>
