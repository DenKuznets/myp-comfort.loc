<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>МУП КОМФОРТ</title>
    <link rel="stylesheet" href="{{ asset('/fonts/myFonts.css') }}">
    {{-- <link href = "{{ asset('/fonts/MerriweatherSans/stylesheet.css') }}" rel = "stylesheet" type = "text/css" /> --}}
    <link href="{{ asset('/fonts/OpenSans/stylesheet.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> --}}

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="{{ mix('/sass/index.scss') }}"> --}}
    @vite(['resources/src/assets/main.scss', 'resources/js/app.js'])
</head>

<body>
    <button class="burger">
        <img src="{{ asset('assets/img/burger.svg') }}" alt="">
    </button>
    @include('components.header')
    {{-- @include('components.main') --}}
    @yield("content")
    {{-- <div class="myDiv">
        @include('./components/swiper')
    </div> --}}
</body>

</html>
