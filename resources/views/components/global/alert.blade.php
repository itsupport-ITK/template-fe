<div {{ $attributes->merge(['class' => "alert alert-".$type. " fw-bold"]) }}>
    {{ $message }} {{ $slot }}
</div>