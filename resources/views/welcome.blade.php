<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>МУП КОМФОРТ</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="{{ mix('/sass/index.scss') }}"> --}}
    @vite(['resources/sass/main.scss', 'resources/js/app.js'])
</head>

<body>
    

    {{-- <img src="{{ asset('/img/1.jpg') }}" alt=""> --}}

    @include('components.header')
    {{-- @include('components.main') ; --}}
</body>

</html>
