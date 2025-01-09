<link rel="icon" type="image/png" href="{{ url('/assets/image/itk.png') }}">

{{-- Font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">

{{-- bootstrap 5 --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
@vite(['resources/scss/app.scss', 'resources/js/app.js'])

@stack('css')
<link rel="stylesheet" href="{{ url('/assets/css/layout/main.css') }}">

<link rel="stylesheet" href="{{ url('/assets/font-awesome/css/all.min.css') }}">
<link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
