<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ __('messages.app.title') }}</title>
        
        @include('layout.head')

        @stack('css')

    </head>

    <body>
        @yield('content')

        <x-button color="primary" class="btn-top">
            <i class="fas fa-arrow-circle-up"></i>
        </x-button>

        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto" id="toastCategory"></strong>
                    <small>a few mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="toastBody">
                    
                </div>
            </div>
        </div>

        <form action="" method="POST" id="globalDeleteForm">
            @method('delete')
            @csrf
            <x-global.modal id="globalDeleteModal" title="" submit-name="{{ __('messages.button.delete') }}" btn-submit-color="danger">
                <div class="delete-body">

                </div>
            </x-global.modal>
        </form>
        
        @include('layout.script')

        @stack('javascript')
    </body>
</html>
