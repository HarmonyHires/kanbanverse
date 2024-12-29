<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('backsite.layouts.partials.meta')

    <title>KanbanVerse | @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
</head>

<body>
    @yield('content')
</body>

</html>
