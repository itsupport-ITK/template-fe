<div class="d-flex justify-content-center p-3">
    <div>
        <img src="{{ asset('assets/image/application/empty_data.svg') }}" alt="" width="200" class="mb-4">
        @if ($message != '')
        <x-empty-data-text :message="$message"/>
        @endif
    </div>
</div>