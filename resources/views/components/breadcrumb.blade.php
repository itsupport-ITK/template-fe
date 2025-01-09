<nav aria-label="breadcrumb" class="bg-body-secondary p-3 rounded-2 mb-3">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ url($backurl) }}" class="link-offset-2 link-offset-3-hover link-underline-opacity-0 link-underline-opacity-75-hover text-danger link-underline-danger"><i class="fas fa-arrow-left"></i> {{ __('messages.link.back') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page"></li>
        {{ $slot }}
    </ol>
</nav>

@push('javascript')
    <script>
        $(document).ready(function(){
            const breadCrumbTitle = document.title;
            document.querySelector('.breadcrumb-item.active').textContent = breadCrumbTitle.substr(0, breadCrumbTitle.indexOf(' |'));
        }); 
    </script>
@endpush