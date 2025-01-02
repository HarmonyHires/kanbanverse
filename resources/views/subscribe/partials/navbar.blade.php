<header class="bg-dark_navy">
    <div class="container mx-auto px-4 py-5 flex justify-between items-center">
        <a href="{{ route('home') }}">
            <img class="object-contain w-48 -mt-1" src="{{ asset('images/logo.png') }}" alt="">
        </a>

        <a class="text-white border px-6 py-2 hover:text-dark_navy hover:bg-white rounded" href="{{ route('dashboard') }}">Dashboard</a>
    </div>
</header>
