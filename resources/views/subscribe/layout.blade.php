<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('backsite.layouts.partials.meta')

    <title>KanbanVerse | @yield('title')</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @include('subscribe.partials.navbar')
    <main>
        <div class="container mx-auto px-4 my-12">
            @yield('content')
        </div>
    </main>

    @yield('scripts')
</body>

</html>
