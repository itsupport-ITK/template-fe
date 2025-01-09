@extends('layout.main')

@section('content')
<div class="container-fluid vh-100">
    <div id="wrapper">
        <nav id="sidebar">
            <a href="#">
                <img src="https://itk.ac.id/assets/image/Logo_ITK.webp" alt="itk" class="d-block w-50 m-auto">
            </a>

            <h6 class="text-center quicksand-font">{{ __('messages.app.info') }}</h6>
            <h3 class="text-center text-primary quicksand-font fw-bold">{{ __('messages.app.title') }}</h3>

            <ul class="list-unstyled components">

                @include('layout.sidebar')
            </ul>
        </nav>

        <div id="contentWrapper">
            
            @include('layout.navbar')

            <div class="pt-3 pb-3">
                @yield('breadcrumb')
                @yield('main-content')
            </div>

            <footer class="card card-body" id="footerMain" style="display: none;">
                ©️ Institut Teknologi Kalimantan.
            </footer>
        </div>

        <div class="overlay"></div>

    </div>
</div>
@endsection