<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('backsite.layouts.partials.meta')

    <title>KanbanVerse | @yield('title')</title>
    @vite(['public/styles/home.css'])
    {{-- @vite('public/styles/home.css') --}}
    {{-- <link rel="stylesheet" href="{{ asset('styles/home.css') }}"> --}}
</head>

<body>
    @yield('content')
</body>

</html>
