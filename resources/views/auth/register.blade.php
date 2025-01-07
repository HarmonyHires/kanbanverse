@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />

    <div class="flex h-screen justify-center items-center">
        <div class="w-2/5 h-full bg-dark_navy px-8 py-6">
            <a href="{{ route('home') }}">
                <img class="object-contain w-52" src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <div class="mt-32 mb-20">
                <h1 class="text-white text-5xl font-bold leading-normal mb-3">Time Management <br> Made Easy <br> Experience
                    the <br> Kanban Advantage!</h1>
                <p class="text-gray-200 text-base">With Kanban, our project design becomes more structured and easier to
                    monitor. Every stage of design, from concept to final, becomes clearer.</p>
            </div>

            <div class="w-full">
                <div class="swiper progress-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-primary relative mx-8 p-8 rounded-xl">
                                <h5 class="text-white text-xl mb-3 font-semibold">Ez Project Bosqu</h5>
                                <p class="mb-4 text-gray-100 font-light">Before using Kanban, I was often overwhelmed by the
                                    number of
                                    tasks. Now, with Kanban, I can clearly see what I have to do and its priority. My
                                    productivity has increased dramatically.</p>

                                <div class="flex justify-between">
                                    <div class="flex gap-3 items-center">
                                        <div class="bg-gray-400 w-8 h-8 rounded-full"></div>
                                        <span class="text-white">Satya Garda Prasetyo</span>
                                    </div>
                                    <p>⭐⭐⭐⭐⭐</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-primary relative mx-8 p-8 rounded-xl">
                                <h5 class="text-white text-xl mb-3 font-semibold">WOW Amazing Project Saya Kelarr</h5>
                                <p class="mb-4 text-gray-100 font-light">Before using Kanban, I was often overwhelmed by the
                                    number of
                                    tasks. Now, with Kanban, I can clearly see what I have to do and its priority. My
                                    productivity has increased dramatically.</p>

                                <div class="flex justify-between">
                                    <div class="flex gap-3 items-center">
                                        <div class="bg-gray-400 w-8 h-8 rounded-full"></div>
                                        <span class="text-white">Kevien Nathallio Antonio</span>
                                    </div>
                                    <p>⭐⭐⭐⭐⭐</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-primary relative mx-8 p-8 rounded-xl">
                                <h5 class="text-white text-xl mb-3 font-semibold">I Love This Thing</h5>
                                <p class="mb-4 text-gray-100 font-light">Before using Kanban, I was often overwhelmed by the
                                    number of
                                    tasks. Now, with Kanban, I can clearly see what I have to do and its priority. My
                                    productivity has increased dramatically.</p>

                                <div class="flex justify-between">
                                    <div class="flex gap-3 items-center">
                                        <div class="bg-gray-400 w-8 h-8 rounded-full"></div>
                                        <span class="text-white">El Raffael</span>
                                    </div>
                                    <p>⭐⭐⭐⭐⭐</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-primary relative mx-8 p-8 rounded-xl">
                                <h5 class="text-white text-xl mb-3 font-semibold">I Love This Thing</h5>
                                <p class="mb-4 text-gray-100 font-light">Before using Kanban, I was often overwhelmed by the
                                    number of
                                    tasks. Now, with Kanban, I can clearly see what I have to do and its priority. My
                                    productivity has increased dramatically.</p>

                                <div class="flex justify-between">
                                    <div class="flex gap-3 items-center">
                                        <div class="bg-gray-400 w-8 h-8 rounded-full"></div>
                                        <span class="text-white">Dimas Ari Eka</span>
                                    </div>
                                    <p>⭐⭐⭐⭐⭐</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination !bottom-2 !top-auto !w-80 right-0 mx-auto"></div>
                </div>
            </div>
        </div>

        <form action="{{ route('auth.register') }}" method="POST" enctype="multipart/form-data" class="w-3/5 p-16">
            @csrf

            <h1 class="text-2xl font-semibold mb-12">Plan better. Work smarter. <br><span class="text-gray-300">Access your
                    Kanbanverse account today.</span></h1>

            <h1 class="text-4xl font-semibold mb-12">Register for your Kanbanverse account</h1>

            <div class="flex gap-3 justify-between">
                <div class="mb-4 w-full">
                    <label class="font-medium mb-3" for="first_name">
                        First Name
                    </label>
                    <input
                        class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline @error('first_name') border-red-500 @enderror"
                        id="first_name" type="text" name="first_name" placeholder="First Name">

                    @error('first_name')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4 w-full">
                    <label class="font-medium mb-3" for="last_name">
                        Last Name
                    </label>
                    <input
                        class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline @error('last_name') border-red-500 @enderror"
                        id="last_name" type="text" name="last_name" placeholder="Last Name">

                    @error('last_name')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-4 w-full">
                <label class="font-medium mb-3" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                    id="email" type="email" name="email" placeholder="email@example.com">

                @error('email')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 w-full">
                <label class="font-medium mb-3" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                    id="password" type="password" name="password" placeholder="Password">

                @error('password')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-start">
                <input id="agree" name="t&c" type="checkbox"
                    class="w-4 h-4 text-blue-500 border-gray-300 rounded focus:ring-blue-500 @error('t&c') border-red-500 @enderror">
                <label for="agree" class="ml-2 -mt-[3px]">
                    <p class="text-blue-gray-500 flex font-medium">
                        I agree with the
                        <a href="#" class="text-blue-500 font-medium transition-colors hover:text-blue-700">
                            &nbsp;terms and conditions
                        </a>
                        .
                    </p>
                </label>
            </div>
            @error('t&c')
                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror

            <button type="submit"
                class="bg-dark_navy transition-all text-white font-bold py-4 px-8 rounded w-full mt-8 focus:outline-none focus:shadow-outline">
                Register
            </button>

            <div class="mt-8 text-center">
                <p class="text-gray-500">Already have an account? <a href="{{ route('login') }}"
                        class="text-blue-500 font-semibold">Login</a></p>
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            new Swiper(".progress-slide-carousel", {
                loop: true,
                fraction: true,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".progress-slide-carousel .swiper-pagination",
                    type: "progressbar",
                },
            });
        </script>
    </div>
@endsection
