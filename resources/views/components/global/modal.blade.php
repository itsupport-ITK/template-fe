<div class="modal fade" id="{{ $id }}" tabindex="-1" >
    <div class="modal-dialog modal-dialog-centered {{ $size }}">
        <div class="modal-content">
            <div class="modal-header modal-title">
                <x-heading-medium class="mb-0" id="modalTitle" text="{{ $title }}" />
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            <div class="modal-body">
                
                {{ $slot }}

            </div>
            <div class="modal-footer {{ $display }}">
                <x-button color="secondary" type="button" data-bs-dismiss="modal">{{ __('messages.button.close') }}</x-button>
                <x-button color="{{ $btnSubmitColor }}" type="submit">{{ $submitName }}</x-button>
              </div>
        </div>
    </div>
</div>