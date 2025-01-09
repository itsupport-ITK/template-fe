<nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbarMain">
    
    <span id="sidebarCollapse" class="btn text-white bg-primary">
        <i class="fas fa-align-left" id="sideArrowLeft"></i>
    </span>

    <div class="d-flex ms-auto">
        <ul class="navbar-nav ms-auto flex-row align-items-center">


            {{-- <div class="dropdown me-3">
                <a class="link-offset-2 link-offset-3-hover link-underline-opacity-0 link-underline-opacity-75-hover text-primary fw-bold link-underline-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    
                    @if (app()->currentLocale() == 'id')
                    ID
                    @endif
                    @if (app()->currentLocale() == 'en')
                        EN
                    @endif
                    <i class="fas fa-caret-down fa-fw"></i>
                </a>
            
                <div class="dropdown-menu dropdown-menu-end text-end">
                    
                    <form action="{{ route('setting.update') }}" method="POST" id="settingForm">
                        @method('put')
                        @csrf
                        <input type="hidden" name="language" id="languageSetting">
                    </form>

                    @foreach ($global_languages as $lang)
                        <li><a class="dropdown-item lang-select" href="#" data-value="{{ $lang['value'] }}">{{ $lang['description'] }}</a></li>
                    @endforeach
                </div>
            </div> --}}

            <div class="dropdown">
                <span type="button" class="d-flex align-items-center" id="dropdownUser" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mx-1 fw-bold text-primary"><img src="{{ Avatar::create('Contoh Nama')->toBase64() }}" alt="" width="35"></span> <i class="fas fa-caret-down fa-fw"></i>
                </span>
                <div class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="dropdownUser">
                    <small class="dropdown-item-text text-muted font-weight-bold">email@itk.ac.id</small>
                    
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item text-danger">{{ __('messages.button.logout') }}</button>
                    </form>
                </div>
            </div>
        </ul>
    </div>
</nav>

@push('javascript')
    <script>
        const langSelect = document.querySelectorAll('.lang-select');
        const languageSetting = document.querySelector('#languageSetting');
        const settingForm = document.querySelector('#settingForm');

        for (const [index, lang] of langSelect.entries()) {

            lang.addEventListener('click', function(){  
                
                languageSetting.value = lang.getAttribute('data-value');
                settingForm.submit();
            });
        }
    </script>
@endpush