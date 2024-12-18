@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />

    <div class="flex h-screen">
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
                            <div class="bg-navy relative mx-8 p-8 rounded-xl">
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
                            <div class="bg-navy relative mx-8 p-8 rounded-xl">
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
                            <div class="bg-navy relative mx-8 p-8 rounded-xl">
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
                            <div class="bg-navy relative mx-8 p-8 rounded-xl">
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

        <div class="w-3/5 p-16">
            <h1 class="text-2xl font-semibold mb-12">Plan better. Work smarter. <br><span class="text-gray-300">Access your
                    Kanbanverse account today.</span></h1>

            <h1 class="text-4xl font-semibold mb-12">Register for your Kanbanverse account</h1>

            <div class="flex gap-3 justify-between">
                <div class="mb-4 w-full">
                    <label class="font-medium mb-3" for="first_name">
                        First Name
                    </label>
                    <input
                        class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="first_name" type="email" placeholder="First Name">
                </div>
                <div class="mb-4 w-full">
                    <label class="font-medium mb-3" for="last_name">
                        Last Name
                    </label>
                    <input
                        class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="last_name" type="email" placeholder="Last Name">
                </div>
            </div>

            <div class="mb-4 w-full">
                <label class="font-medium mb-3" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="email@example.com">
            </div>

            <div class="mb-4 w-full">
                <label class="font-medium mb-3" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="Password">
            </div>

            <div class="mb-6 w-full">
                <label class="font-medium mb-3" for="confirm_password">
                    Confirm Password
                </label>
                <input
                    class="shadow appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="confirm_password" type="password" placeholder="Confirm Password">
            </div>

            <div class="flex items-start">
                <input id="agree" type="checkbox"
                    class="w-4 h-4 text-blue-500 border-gray-300 rounded focus:ring-blue-500" />
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


            <button
                class="bg-dark_navy transition-all text-white font-bold py-4 px-8 rounded w-full mt-8 focus:outline-none focus:shadow-outline">
                Register
            </button>

            <div class="mt-8 text-center">
                <p class="text-gray-500">Already have an account? <a href="{{ route('login') }}"
                        class="text-blue-500 font-semibold">Login</a></p>
            </div>
        </div>


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
    @endsection
