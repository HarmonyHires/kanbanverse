@extends('layouts.app')

@section('title', 'Solution Management Project')

@section('content')
    <div class="includes-bg-hero relative">
        <div class="bg-hero-overlay">

            {{-- NAVBAR --}}
            <header class="container mx-auto px-4 py-3 flex justify-between items-center flex-row">
                <img class="object-contain w-52" src="{{ asset('images/logo.png') }}" alt="logo_kanbanverse">
                <button id="mobile-menu-toggle" class="text-white focus:outline-none mt-3 block lg:hidden">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                        </path>
                    </svg>
                </button>

                <nav class="mt-4 hidden lg:block">
                    <ul class="flex flex-col lg:flex-row justify-between gap-4 lg:gap-14 items-center text-white">
                        <li class="hover:text-gray-300">
                            <a href="/">Home</a>
                        </li>
                        <li class="hover:text-gray-300">
                            <a href="#features">Features</a>
                        </li>
                        <li class="hover:text-gray-300">
                            <a href="#pricing">Pricing</a>
                        </li>
                        <li class="hover:text-gray-300">
                            <a href="#contact-us">Contact Us</a>
                        </li>
                    </ul>
                </nav>


                <div class="justify-between items-center gap-3 mt-4 hidden lg:flex">
                    @guest
                        <a class="px-10 py-3 border rounded-md text-sm font-medium text-white
                    hover:bg-white hover:text-black transition duration-300"
                            href="{{ route('login') }}">
                            Login
                        </a>
                        <a class="px-10 py-3 border rounded-md text-sm font-medium text-black bg-white
                hover:bg-transparent hover:text-white"
                            href="{{ route('register') }}">
                            Register
                        </a>
                    @else
                        <a class="px-10 py-3 border rounded-md text-sm font-medium text-white
                    hover:bg-white hover:text-black transition duration-300"
                            href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    @endguest
                </div>

                {{-- Mobile Navigation --}}
                <div id="mobile-menu" class="hidden lg:hidden absolute z-10 top-0 left-0 w-full h-full bg-navy">
                    <div class="flex flex-col justify-center items-center h-full">
                        <button id="mobile-menu-close"
                            class="text-white focus:outline-none mt-3 block lg:hidden absolute top-3 right-3">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                        <ul class="flex flex-col justify-between gap-4 items-center text-white">
                            <li class="hover:text
                                        -gray-300">
                                <a href="/">Home</a>
                            </li>
                            <li class="hover:text
                                        -gray-300">
                                <a href="#features">Features</a>
                            </li>

                            <li class="hover:text
                                        -gray-300">
                                <a href="#pricing">Pricing</a>
                            </li>
                            <li class="hover:text
                                        -gray-300">
                                <a href="#contact-us">Contact Us</a>
                            </li>
                        </ul>

                        <div class="flex justify-between items-center gap-3 mt-4">
                            <a class="px-10 py-3 border rounded-md text-sm font-medium text-white
                                       hover:bg-white hover:text-black transition duration-300"
                                href="#">
                                Sign In
                            </a>
                            <a class="px-10 py-3 border rounded-md text-sm font-medium text-black bg-white
                                       hover:bg-transparent hover:text-white"
                                href="#">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            {{-- HERO --}}
            <div class="container mx-auto px-4 flex justify-center flex-col h-3/4 items-center gap-4">
                <h1 class="text-white font-bold text-3xl lg:text-7xl text-center tracking-wide leading-tight">Time
                    Management Made
                    Easy Experience the Kanban <br> Advantage!</h1>
                <p class="text-gray-300 lg:text-xl mb-5 text-center">Boost your team's productivity with Kanban, the
                    ultimate visual
                    tool for organizing tasks and streamlining workflows.</p>
                <a class="lg:px-8 lg:py-4 px-4 py-3 border rounded-md text-black text-sm font-medium bg-white hover:bg-transparent hover:text-white"
                    href="#pricing">Get Started</a>
            </div>

        </div>
    </div>

    <main>
        {{-- FEATURE LOOKUP --}}
        <div
            class="container px-4 flex gap-5 mx-auto justify-center mt-[-60px] relative mb-12 flex-col lg:flex-row md:flex-col">
            <div class="flex gap-5 bg-white shadow-md rounded-md px-8 py-7 items-center">
                <img class="w-10" src="{{ asset('images/feature_task_icon.webp') }}" alt="feature_task_icon">
                <div>
                    <h5 class="font-semibold lg:text-xl">Smart Task Prioritization</h5>
                    <p class="text-sm text-gray-600">Automatically rank and highlight tasks across projects</p>
                </div>
            </div>
            <div class="flex gap-5 bg-white shadow-md rounded-md px-8 py-7 items-center">
                <img class="w-12" src="{{ asset('images/feature_team_icon.webp') }}" alt="feature_team_icon">
                <div>
                    <h5 class="font-semibold lg:text-xl">Team Performance Insights</h5>
                    <p class="text-sm text-gray-600">Gain a clear view of your team's productivity with real-time
                        analytics.</p>
                </div>
            </div>
            <div class="flex gap-5 bg-white shadow-md rounded-md px-8 py-7 items-center">
                <img class="w-12" src="{{ asset('images/feature_colab_icon.webp') }}" alt="feature_colab_icon">
                <div>
                    <h5 class="font-semibold lg:text-xl">Real-Time Collaboration</h5>
                    <p class="text-sm text-gray-600">Gain a clear view of your team's productivity with real-time
                        analytics.</p>
                </div>
            </div>
        </div>

        {{-- CTA #1 --}}
        <div class="bg-white border border-gray-200">
            <div class="container mx-auto px-4 py-8 lg:py-16 flex justify-between flex-col lg:flex-row items-center">
                <div>
                    <h3 class="text-md lg:text-[24px] font-semibold">Ready to get started ?</h3>
                    <h3 class="text-md lg:text-[24px]">Start free trial now!</h3>
                </div>
                <div class="flex justify-content-between items-center gap-3 mt-4">
                    <a class="px-4 lg:px-10 py-2 lg:py-3 border rounded-md text-sm font-medium text-white bg-navy hover:scale-110 transition duration-300"
                        href="#pricing">Start Free Trial</a>
                    <a class="px-4 lg:px-10 py-2 lg:py-3 border rounded-md text-black text-sm font-medium bg-white hover:bg-transparent"
                        href="#">Learn More</a>
                </div>
            </div>
        </div>

        {{-- BRAND SUPPORT --}}
        <div class="bg-navy mx-auto rounded-b-3xl mb-16 overflow-x-hidden">
            <div class="flex flex-row justify-between items-center gap-16 px-8 mx-auto container">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 128 128">
                    <path fill="#f7f7f7"
                        d="M31.85 57.91H17.09v4.38h10.47c-.52 6.14-5.63 8.76-10.45 8.76a11.7 11.7 0 0 1 0-23.4A11.36 11.36 0 0 1 25 50.82l3.07-3.18A15.6 15.6 0 0 0 17 43.26a16.09 16.09 0 1 0 .23 32.18c8.61 0 14.92-5.9 14.92-14.63a13 13 0 0 0-.27-2.9zm12.09-3.17a10.34 10.34 0 1 0 10.38 10.38a10.22 10.22 0 0 0-10.38-10.38M44 58.8a6.29 6.29 0 1 1-5.92 6.26A5.95 5.95 0 0 1 44 58.8m22.56-4.06a10.34 10.34 0 1 0 10.37 10.38a10.22 10.22 0 0 0-10.37-10.38m.06 4.06a6.29 6.29 0 1 1-5.92 6.26a5.95 5.95 0 0 1 5.92-6.26m22.11-4.05c-5.56 0-9.93 4.87-9.93 10.33a10.2 10.2 0 0 0 9.83 10.35a6.83 6.83 0 0 0 5.67-2.51v2c0 3.57-2.17 5.7-5.44 5.7A5.73 5.73 0 0 1 83.58 77l-4 1.66a10 10 0 0 0 9.3 6.09c5.53 0 9.74-3.48 9.74-10.78v-18.6h-4.31v1.75a7.32 7.32 0 0 0-5.58-2.37m.4 4.05c2.73 0 5.52 2.33 5.52 6.3s-2.79 6.27-5.58 6.27a5.88 5.88 0 0 1-5.72-6.23c0-4 2.86-6.34 5.78-6.34m28.8-4.08c-5.24 0-9.65 4.17-9.65 10.33a10 10 0 0 0 10.15 10.38a10.49 10.49 0 0 0 8.66-4.54l-3.58-2.38a5.79 5.79 0 0 1-5.07 2.85a5.32 5.32 0 0 1-5.07-3.13l13.87-5.75l-.72-1.69a9.36 9.36 0 0 0-8.6-6.06zm.18 4a4.12 4.12 0 0 1 3.83 2.21l-9.26 3.87a5.74 5.74 0 0 1 5.43-6.08m-16.44 16.1h4.56V44.33h-4.56z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 512 160">
                    <path fill="#ebebeb"
                        d="M79.655 0C35.664 0 0 35.663 0 79.654c0 43.993 35.664 79.653 79.655 79.653c43.996 0 79.656-35.66 79.656-79.653c0-43.988-35.66-79.65-79.657-79.65zm36.53 114.884a4.963 4.963 0 0 1-6.83 1.646c-18.702-11.424-42.246-14.011-69.973-7.676a4.967 4.967 0 0 1-5.944-3.738a4.96 4.96 0 0 1 3.734-5.945c30.343-6.933 56.37-3.948 77.367 8.884a4.965 4.965 0 0 1 1.645 6.83m9.75-21.689c-1.799 2.922-5.622 3.845-8.543 2.047c-21.41-13.16-54.049-16.972-79.374-9.284a6.22 6.22 0 0 1-7.75-4.138a6.22 6.22 0 0 1 4.141-7.745c28.929-8.778 64.892-4.526 89.48 10.583c2.92 1.798 3.843 5.622 2.045 8.538m.836-22.585C101.1 55.362 58.742 53.96 34.231 61.4c-3.936 1.194-8.098-1.028-9.29-4.964a7.453 7.453 0 0 1 4.965-9.294c28.137-8.542 74.912-6.892 104.469 10.655a7.44 7.44 0 0 1 2.606 10.209c-2.092 3.54-6.677 4.707-10.206 2.605zm89.944 2.922c-13.754-3.28-16.198-5.581-16.198-10.418c0-4.57 4.299-7.645 10.7-7.645c6.202 0 12.347 2.336 18.796 7.143c.19.145.437.203.675.165a.9.9 0 0 0 .6-.367l6.715-9.466a.903.903 0 0 0-.171-1.225c-7.676-6.157-16.313-9.15-26.415-9.15c-14.848 0-25.225 8.911-25.225 21.662c0 13.673 8.95 18.515 24.417 22.252c13.155 3.031 15.38 5.57 15.38 10.11c0 5.032-4.49 8.161-11.718 8.161c-8.028 0-14.582-2.71-21.906-9.046a.93.93 0 0 0-.656-.218a.9.9 0 0 0-.619.313l-7.533 8.96a.906.906 0 0 0 .086 1.256c8.522 7.61 19.004 11.624 30.323 11.624c16 0 26.339-8.742 26.339-22.277c.028-11.421-6.81-17.746-23.561-21.821zm59.792-13.564c-6.934 0-12.622 2.732-17.321 8.33V62c0-.498-.4-.903-.894-.903h-12.318a.9.9 0 0 0-.894.902v70.009c0 .494.4.903.894.903h12.318a.9.9 0 0 0 .894-.903v-22.097c4.699 5.26 10.387 7.838 17.32 7.838c12.89 0 25.94-9.92 25.94-28.886c.019-18.97-13.032-28.894-25.93-28.894zm11.614 28.893c0 9.653-5.945 16.397-14.468 16.397c-8.418 0-14.772-7.048-14.772-16.397c0-9.35 6.354-16.397 14.772-16.397c8.38 0 14.468 6.893 14.468 16.396m47.759-28.893c-16.598 0-29.601 12.78-29.601 29.1c0 16.143 12.917 28.784 29.401 28.784c16.655 0 29.696-12.736 29.696-28.991c0-16.2-12.955-28.89-29.496-28.89zm0 45.385c-8.827 0-15.485-7.096-15.485-16.497c0-9.444 6.43-16.298 15.285-16.298c8.884 0 15.58 7.093 15.58 16.504c0 9.443-6.468 16.291-15.38 16.291m64.937-44.258h-13.554V47.24c0-.497-.4-.902-.894-.902H374.05a.906.906 0 0 0-.904.902v13.855h-5.916a.9.9 0 0 0-.894.902v10.584a.9.9 0 0 0 .894.903h5.916v27.39c0 11.062 5.508 16.674 16.38 16.674c4.413 0 8.075-.914 11.528-2.873a.88.88 0 0 0 .457-.78v-10.083a.9.9 0 0 0-.428-.76a.87.87 0 0 0-.876-.039c-2.368 1.19-4.66 1.741-7.229 1.741c-3.947 0-5.716-1.798-5.716-5.812V73.49h13.554a.9.9 0 0 0 .894-.903V62.003a.873.873 0 0 0-.884-.903zm47.217.054v-1.702c0-5.006 1.921-7.238 6.22-7.238c2.57 0 4.633.51 6.945 1.28a.895.895 0 0 0 1.18-.858l-.001-10.377a.89.89 0 0 0-.637-.865c-2.435-.726-5.555-1.47-10.235-1.47c-11.367 0-17.388 6.405-17.388 18.516v2.606H428.2a.906.906 0 0 0-.904.902v10.638c0 .497.41.903.904.903h5.916v42.237c0 .504.41.904.904.904h12.308c.504 0 .904-.4.904-.904V73.487h11.5l17.616 42.234c-1.998 4.433-3.967 5.317-6.65 5.317c-2.168 0-4.46-.646-6.79-1.93a.98.98 0 0 0-.714-.067a.9.9 0 0 0-.533.485l-4.175 9.16a.9.9 0 0 0 .39 1.17c4.356 2.359 8.284 3.367 13.145 3.367c9.093 0 14.125-4.242 18.548-15.637l21.364-55.204a.88.88 0 0 0-.095-.838a.88.88 0 0 0-.733-.392h-12.822a.9.9 0 0 0-.856.605l-13.136 37.509l-14.382-37.534a.9.9 0 0 0-.837-.58h-21.04zm-27.375-.054h-12.318a.907.907 0 0 0-.903.902v53.724c0 .504.409.904.903.904h12.318c.495 0 .904-.4.904-.904v-53.72a.9.9 0 0 0-.904-.903zm-6.088-24.464c-4.88 0-8.836 3.95-8.836 8.828a8.835 8.835 0 0 0 8.836 8.836c4.88 0 8.827-3.954 8.827-8.836a8.83 8.83 0 0 0-8.827-8.828" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 128 128">
                    <path fill="#ebebeb"
                        d="m45.773 71.379l1.266-2.945c1.367 1.023 3.18 1.554 4.973 1.554c1.328 0 2.16-.511 2.16-1.289c-.02-2.164-7.93-.469-7.988-5.906c-.02-2.758 2.425-4.887 5.89-4.887c2.059 0 4.117.512 5.586 1.68l-1.183 3.004c-1.344-.86-3.016-1.473-4.606-1.473c-1.082 0-1.793.512-1.793 1.164c.02 2.125 7.988.961 8.07 6.153c0 2.82-2.382 4.804-5.808 4.804c-2.508 0-4.813-.593-6.567-1.86m48.5-4.007a3.647 3.647 0 0 1-6.828-1.797a3.65 3.65 0 0 1 3.649-3.66c1.363 0 2.547.758 3.18 1.86l3.484-1.942c-1.305-2.328-3.813-3.926-6.664-3.926c-4.223 0-7.645 3.438-7.645 7.668s3.422 7.664 7.645 7.664a7.59 7.59 0 0 0 6.664-3.926l-3.485-1.94zM59.902 51.55h4.364v21.403h-4.364V51.551zm39.571 0v21.403h4.359v-6.418l5.18 6.418h5.586l-6.586-7.625l6.097-7.113h-5.343l-4.934 5.906v-12.57h-4.36zM77.23 67.414c-.632 1.043-1.937 1.816-3.406 1.816a3.65 3.65 0 0 1-3.648-3.656a3.653 3.653 0 0 1 3.648-3.66c1.469 0 2.774.816 3.406 1.879zm0-9.2v1.74c-.714-1.208-2.488-2.048-4.343-2.048c-3.832 0-6.848 3.395-6.848 7.645c0 4.254 3.016 7.687 6.848 7.687c1.855 0 3.629-.84 4.343-2.043v1.739h4.364v-14.72zM18.805 67.39c0 1.493-1.203 2.7-2.692 2.7a2.693 2.693 0 0 1-2.691-2.7a2.69 2.69 0 0 1 2.691-2.695h2.692v2.696zm1.343 0a2.69 2.69 0 0 1 2.692-2.695a2.69 2.69 0 0 1 2.691 2.696v6.746a2.693 2.693 0 0 1-2.691 2.699a2.693 2.693 0 0 1-2.692-2.7zm2.692-10.831a2.693 2.693 0 0 1-2.692-2.7a2.69 2.69 0 0 1 2.692-2.695a2.69 2.69 0 0 1 2.691 2.695v2.7zm0 1.371a2.69 2.69 0 0 1 2.691 2.695c0 1.492-1.203 2.7-2.691 2.7h-6.746a2.693 2.693 0 0 1-2.692-2.7a2.69 2.69 0 0 1 2.692-2.695zm10.785 2.695a2.69 2.69 0 0 1 2.691-2.695a2.69 2.69 0 0 1 2.692 2.695c0 1.492-1.203 2.7-2.692 2.7h-2.691zm-1.344 0c0 1.492-1.203 2.7-2.691 2.7a2.693 2.693 0 0 1-2.692-2.7v-6.766a2.69 2.69 0 0 1 2.692-2.695a2.69 2.69 0 0 1 2.691 2.695zM29.59 71.441a2.69 2.69 0 0 1 2.691 2.696a2.693 2.693 0 0 1-2.691 2.699a2.693 2.693 0 0 1-2.692-2.7v-2.695zm0-1.351a2.693 2.693 0 0 1-2.692-2.7a2.69 2.69 0 0 1 2.692-2.695h6.746a2.69 2.69 0 0 1 2.691 2.696a2.693 2.693 0 0 1-2.691 2.699zm0 0" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24">
                    <path fill="#ebebeb"
                        d="M16.813 8.814s-.45.18-.973.756c-.524.577-.828 1.225-.603 1.397c.087.066.287.079.65-.25a2.9 2.9 0 0 0 .766-1.063c.234-.57.16-.833.16-.84m2.863 1.038c-.581-.299-1.006-.664-1.448-.89c-.422-.216-.695-.307-1.036-.261a1 1 0 0 0-.14.035s.176.6-.523 1.607c-.708 1.022-1.35 1.015-1.533.734c-.191-.296.056-.9.468-1.437c.432-.562 1.19-1.028 1.19-1.028s-.241-.148-.835.19c-.58.326-1.577 1.107-2.502 2.423c-.926 1.316-1.11 2.04-1.242 2.61s-.012 1.18.62 1.18s1.368-.964 1.576-1.299c.386-.624.637-1.581.112-1.45c-.259.065-.468.351-.6.627a2.7 2.7 0 0 0-.19.554a2.2 2.2 0 0 0-.513.298a4 4 0 0 0-.486.43s.002-.456.365-1.194c.364-.737 1.03-1.074 1.408-1.106c.34-.027.783.262.408 1.327s-1.483 2.36-2.646 2.376c-1.073.015-1.776-1.355-.282-3.745C13.501 9.19 15.441 8.38 16.07 8.29c.63-.09.835.187.835.187a2.7 2.7 0 0 1 1.197-.197c.77.052 1.364.596 2.15.979c-.205.195-.4.4-.575.592m3.454-.89c-.533.342-1.27.652-1.979.586c-.179.185-.371.4-.563.634c1.228.243 2.305-.519 2.877-1.167A3.8 3.8 0 0 0 24 8.248a4.8 4.8 0 0 1-.869.714m-1.636 3.462a.3.3 0 0 0 .023-.051a.124.124 0 0 0-.113-.108c-.117-.005-.277.017-.695.48a6.3 6.3 0 0 0-.89 1.263c-.24.438-.337.764-.2.848a.2.2 0 0 0 .146.015c.093-.022.199-.11.36-.295c.075-.088.158-.212.258-.349c.277-.376.973-1.563 1.111-1.803m-4.349.504c.07-.182.159-.541-.026-.682c-.199-.15-.705.201-.708.561c-.003.369.357.535.443.559c.05.013.066.01.09-.029a3 3 0 0 0 .201-.409m-.383.67a1.5 1.5 0 0 1-.348-.222a1.1 1.1 0 0 1-.26-.317c-.008-.012-.015-.003-.023.008c-.007.01-.039.039-.309.434c-.27.396-.684 1.216-.31 1.355c.241.09.641-.331.86-.61a5 5 0 0 0 .402-.614c.012-.023 0-.029-.012-.034m4.258.947c-.102.163-.218.476.117.281c.41-.236.994-1.123.994-1.123h.265a9 9 0 0 1-.803 1.054c-.415.46-.922.879-1.28.837c-.416-.048-.286-.596-.286-.596s-.596.635-1.01.59c-.557-.062-.387-.751-.387-.751s-.63.774-1.06.75c-.673-.04-.504-.859-.316-1.436c.1-.308.193-.55.193-.55s-.067.017-.21.038c-.076.011-.212.019-.212.019s-.28.495-.505.792s-1.178 1.322-1.74 1.117c-.518-.19-.346-.984-.044-1.615c.44-.92 1.68-2.243 2.396-2.068c.741.18.017 1.532.017 1.532s0 .005.007.009c.015.005.054.01.143-.008a1.6 1.6 0 0 0 .271-.08s.746-1.561 1.569-2.583c.823-1.02 2.465-2.78 3.11-2.354c.156.105.086.465-.126.902a3 3 0 0 1-.291.078c.142-.258.236-.475.264-.627c.097-.528-1.135.585-2.015 1.78a16.6 16.6 0 0 0-1.409 2.28a4 4 0 0 0 .454-.324a13 13 0 0 0 1.118-1.043a12 12 0 0 0 .951-1.098a3 3 0 0 0 .28-.029a12 12 0 0 1-1.05 1.24c-.35.355-.73.737-1.061 1.015a9 9 0 0 1-.931.691s-.77 1.553-.351 1.652c.246.06.732-.69.732-.69s.635-.967 1.017-1.404c.522-.593.97-.936 1.42-.942c.261-.005.415.273.415.273l.123-.19h.757s-1.414 2.398-1.527 2.579m2.111-5.58c-.533.341-1.27.651-1.979.585c-.18.185-.371.4-.564.634c1.229.243 2.305-.518 2.878-1.167A3.8 3.8 0 0 0 24 8.248a4.8 4.8 0 0 1-.869.714m-10.63 1.177h-.72l-.407.658h.72zm-3.41 2.277c.307-.42 1.152-1.891 1.152-1.891a.124.124 0 0 0-.112-.108c-.117-.006-.312.034-.7.519s-.688.87-.907 1.272c-.24.438-.346.747-.207.831a.2.2 0 0 0 .144.015c.09-.022.208-.113.369-.298a6 6 0 0 0 .262-.34m-3.863-1.99c-.199-.15-.705.201-.708.56c-.003.369.456.482.515.484a.1.1 0 0 0 .05-.01a.06.06 0 0 0 .024-.027a4 4 0 0 0 .146-.325c.07-.183.158-.541-.027-.682m-.3 1.27a1.7 1.7 0 0 1-.39-.18a.8.8 0 0 1-.279-.309c-.007-.012-.015-.003-.022.008s-.047.061-.318.458c-.27.398-.672 1.21-.296 1.35c.24.09.644-.334.864-.612a7 7 0 0 0 .455-.681c.009-.024 0-.03-.014-.034m5.88.244h.263s-1.321 1.912-2.068 1.823c-.416-.049-.293-.563-.293-.563s-.585.685-1.123.546c-.487-.125-.172-.936-.172-.936c-.056.022-1.111 1.211-1.853.926c-.776-.3-.373-1.296-.225-1.595c.125-.253.263-.499.263-.499s-.119.034-.195.051l-.186.04s-.367.596-.591.894c-.225.297-1.178 1.32-1.74 1.117s-.423-.99-.107-1.615c.512-1.012 1.726-2.256 2.458-2.068c.739.189.127 1.388.127 1.388s.147.019.5-.222c.507-.346 1.176-1.277 1.901-1.167c.342.051.66.4.225 1.064c-.139.213-.372.403-.55.215c-.111-.118-.014-.33.103-.477a.46.46 0 0 1 .39-.179s.12-.273-.185-.269c-.247.005-.871.58-1.223 1.16c-.323.533-.813 1.441-.322 1.639c.451.182 1.309-.836 1.706-1.37c.397-.533 1.302-1.742 2.062-1.79c.261-.017.417.221.417.221l.088-.139h.759s-1.43 2.387-1.542 2.567c-.088.141-.204.46.117.281c.322-.178.996-1.043.996-1.043m-.414 3.824a3.14 3.14 0 0 0-1.908-.557a1.17 1.17 0 0 0-.93.504c-.29-.505-.862-.815-1.747-.808c-1.43.016-2.849.676-3.972.675c-1.077 0-1.863-.677-1.837-1.88c.047-2.109 1.83-4.009 3.16-4.864c.767-.49 1.409-.637 1.828-.59c.306.034.674.388.442.909c-.341.761-.812.699-.795.335c.01-.237.168-.386.286-.469a.6.6 0 0 1 .278-.068c.068-.057.117-.474-.429-.337s-1.21.676-1.84 1.371c-.63.696-1.61 2.011-1.852 3.392c-.113.64-.039 1.808 1.48 1.795c1.287-.01 3.185-.859 4.929-.841a3.34 3.34 0 0 1 1.725.472c.451.278.992.684 1.184.961" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 512 100">
                    <path fill="#ebebeb"
                        d="M82.003 0a104.2 104.2 0 0 1 26.402 8.297c14.484 21.63 21.68 46.025 19.023 74.163c-11.082 8.286-21.831 13.313-32.4 16.603a80 80 0 0 1-6.935-11.421a68 68 0 0 0 10.94-5.326a66 66 0 0 1-2.677-2.118c-20.805 9.85-43.684 9.85-64.74 0c-.866.73-1.762 1.44-2.678 2.118a68 68 0 0 0 10.921 5.315a80.5 80.5 0 0 1-6.935 11.422C22.365 95.763 11.626 90.736.544 82.46C-1.722 58.188 2.807 33.566 19.516 8.317A104 104 0 0 1 45.939 0c1.147 2.056 2.506 4.822 3.422 7.022q14.494-2.22 29.26 0A77 77 0 0 1 82.003 0m253.933 31.687q10.567 0 17.544 4.533v13.17q-2.461-1.727-5.738-2.807q-3.274-1.08-7.016-1.08c-4.368 0-7.78.813-10.246 2.447s-3.703 3.763-3.703 6.405c0 2.59 1.196 4.709 3.592 6.374c2.397 1.655 5.868 2.488 10.428 2.488c2.345 0 4.66-.35 6.945-1.038c2.275-.7 4.238-1.553 5.878-2.56v12.737q-7.745 4.75-17.967 4.75c-5.736-.02-10.629-1.028-14.665-3.043s-7.086-4.75-9.119-8.204s-3.06-7.34-3.06-11.658s1.057-8.183 3.17-11.586q3.17-5.104 9.302-8.02c4.085-1.942 8.967-2.908 14.655-2.908m-52.917-.01c3.945 0 7.559.431 10.852 1.295c3.29.864 6.008 1.964 8.173 3.31v11.299c-2.216-1.347-4.753-2.406-7.65-3.208a33.6 33.6 0 0 0-8.92-1.182c-4.418 0-6.621.77-6.621 2.303c0 .72.342 1.254 1.026 1.614s1.942.73 3.764 1.12l7.045 1.296q6.904 1.22 10.287 4.276q3.383 3.054 3.382 9.037c0 4.37-1.86 7.834-5.596 10.404q-5.599 3.855-15.893 3.855c-4.037-.01-7.96-.514-11.766-1.522c-3.805-1.007-7.238-2.467-10.287-4.39V59.24q3.457 2.73 9.27 4.503c3.875 1.172 7.62 1.758 11.243 1.758q2.536 0 3.835-.679c.866-.452 1.3-.997 1.3-1.624c0-.72-.232-1.316-.706-1.8c-.473-.483-1.39-.884-2.747-1.223l-8.455-1.943c-4.842-1.151-8.275-2.745-10.317-4.79c-2.044-2.036-3.061-4.709-3.061-8.02c0-2.785.886-5.201 2.678-7.268q2.672-3.1 7.609-4.78c3.292-1.13 7.136-1.696 11.555-1.696M512 23.833v51.813h-17.263V66.22c-1.46 3.547-3.674 6.25-6.653 8.101c-2.98 1.84-6.664 2.766-11.032 2.766c-3.905 0-7.306-.967-10.217-2.91q-4.362-2.914-6.732-7.988c-1.57-3.382-2.367-7.206-2.367-11.483q-.075-6.615 2.507-11.874c1.712-3.506 4.136-6.24 7.257-8.204c3.12-1.963 6.684-2.95 10.68-2.95c8.082 0 13.548 3.524 16.408 10.564l.148.373V23.833zm-126.533 7.833c5.587 0 10.407.956 14.444 2.879c4.036 1.922 7.117 4.554 9.23 7.916c2.115 3.362 3.17 7.217 3.17 11.586c0 4.318-1.055 8.225-3.17 11.73c-2.113 3.506-5.204 6.26-9.27 8.276c-4.067 2.015-8.868 3.022-14.413 3.022c-5.547 0-10.348-.997-14.404-3.012c-4.067-2.015-7.166-4.77-9.301-8.276c-2.133-3.505-3.21-7.412-3.21-11.73c0-4.317 1.066-8.173 3.21-11.555c2.143-3.382 5.224-6.035 9.27-7.957c4.036-1.923 8.858-2.879 14.444-2.879m-132.36 11.802v32.404h-17.21V43.468c5.273 2.323 11.816 2.426 17.21 0m195.128-10.856c2.486 0 4.62.576 6.412 1.727v15.544c-1.791-1.203-4.107-1.799-6.975-1.799c-3.756 0-6.654 1.162-8.668 3.485c-2.022 2.324-3.03 5.942-3.03 10.836v13.241h-17.261V33.548h16.91v13.385c.936-4.894 2.457-8.502 4.55-10.836c2.084-2.323 4.78-3.485 8.062-3.485m-248.79-7.34c6.624 0 12.22 1.059 16.81 3.166c4.58 2.108 8.013 5.048 10.288 8.81c2.273 3.763 3.42 8.07 3.42 12.923c0 4.75-1.187 9.057-3.562 12.912c-2.376 3.866-5.99 6.92-10.85 9.17c-4.861 2.252-10.882 3.383-18.078 3.383h-25.506V25.272zM42.728 41.348c-6.432 0-11.505 5.912-11.505 13.098s5.184 13.087 11.505 13.087c6.432 0 11.515-5.901 11.505-13.087c.11-7.197-5.073-13.098-11.505-13.098m42.516 0c-6.432 0-11.505 5.912-11.505 13.098s5.184 13.087 11.505 13.087c6.432 0 11.505-5.901 11.505-13.087c.11-7.197-5.073-13.098-11.505-13.098m300.214 3.58c-3.01 0-5.366.853-7.087 2.56c-1.71 1.707-2.567 3.989-2.567 6.868q0 4.317 2.567 6.939c1.712 1.748 4.076 2.632 7.087 2.632c2.957-.01 5.294-.884 7.004-2.632c1.713-1.748 2.577-4.06 2.577-6.94c0-2.878-.856-5.17-2.577-6.867q-2.567-2.56-7.004-2.56m99.767.216q-4.363 0-6.975 2.56c-1.742 1.707-2.607 3.917-2.607 6.652c0 2.734.865 4.965 2.607 6.692s4.037 2.59 6.905 2.59c2.908-.01 5.243-.883 7.006-2.63c1.762-1.749 2.637-4.02 2.637-6.796c0-2.684-.856-4.873-2.567-6.55c-1.712-1.675-4.057-2.518-7.006-2.518m-287.038-7.063h-8.596v24.756h7.6c4.46 0 7.892-1.141 10.287-3.413c2.396-2.283 3.594-5.387 3.594-9.325c0-3.65-1.068-6.559-3.201-8.738c-2.134-2.18-5.365-3.28-9.684-3.28M244.51 22.24c4.752 0 8.606 3.534 8.606 7.895s-3.854 7.896-8.606 7.896c-4.754 0-8.607-3.535-8.607-7.896s3.853-7.895 8.607-7.895" />
                </svg>
            </div>
        </div>

        {{-- FEATURES --}}
        <div id="features" class="container px-4 mx-auto mb-16">
            <div class="text-center mb-12">
                <p class="text-navy font-medium mb-4">Advantages</p>
                <h1 class="text-2xl lg:text-4xl font-bold mb-4">Key Features to Boost your Team's Productivity</h1>
                <p class="text-gray-600 lg:text-base text-sm">Unlock your team's full potential with powerful features
                    designed to streamline
                    collaboration and
                    enhance productivity.</p>
            </div>

            <div class="flex justify-center mx-auto h-full gap-3 lg:gap-[150px] flex-col lg:flex-row items-center">
                <div class="bg-white border border-gray-200 p-8 w-80 h-full">
                    <span class="bg-navy text-white px-3 rounded-sm">1</span>
                    <h5 class="lg:text-xl text-md mt-6 font-semibold mb-3">To-Do List</h5>
                    <p class="text-gray-600 mb-8 text-sm lg:text-md">Keep tasks organized with a simple yet powerful
                        to-do list
                        that helps you prioritize, manage deadlines, and ensure nothing falls through the cracks.</p>
                    <img class="object-contain lg:w-full w-3/4" src="{{ asset('images/todo_icon.webp') }}"
                        alt="todo_icon">
                </div>
                <div class="bg-white border border-gray-200 p-8 w-80 h-full">
                    <span class="bg-navy text-white px-3 rounded-sm">2</span>
                    <h5 class="lg:text-xl text-md mt-6 font-semibold mb-3">Project Tracking</h5>
                    <p class="text-gray-600 mb-8 text-sm lg:text-md">Stay on top of your projects with clear, real-time
                        visibility
                        into task progress, deadlines, and team performance.</p>
                    <img class="object-contain lg:w-full w-3/4" src="{{ asset('images/project_tracking_icon.webp') }}"
                        alt="project_tracking_icon">
                </div>
                <div class="bg-white border border-gray-200 p-8 w-80 h-full">
                    <span class="bg-navy text-white px-3 rounded-sm">3</span>
                    <h5 class="lg:text-xl text-md mt-6 font-semibold mb-3">Mobile Access</h5>
                    <p class="text-gray-600 mb-8 text-sm lg:text-md">Mobile-friendly interface ensures users can access
                        and manage
                        your Kanban boards on the go, enhancing flexibility seamlessly.</p>
                    <img class="object-contain lg:w-3/4 w-3/4" src="{{ asset('images/mobile_access_icon.webp') }}"
                        alt="mobile_access_icon">
                </div>
            </div>
        </div>

        {{-- PRICING --}}
        <div id="pricing" class="container px-4 mx-auto mb-24">
            <div class="text-center mb-12">
                <p class="text-navy font-medium mb-4">Pricing</p>
                <h1 class="text-2xl lg:text-4xl font-bold mb-4">Choose the Perfect Plan for Your Team</h1>
                <p class="text-gray-600 lg:text-base text-sm">Find the right fit for your team's needs with flexible
                    pricing options.</p>
            </div>

            <div class="flex justify-center mx-auto items-center gap-10 lg:gap-[150px] h-full flex-col lg:flex-row">
                <div class="bg-white border border-gray-200 p-8 w-80">
                    <img src="{{ asset('images/starter_icon.webp') }}" alt="">
                    <h5 class="text-md lg:text-xl mt-6 font-semibold mb-3">Starter Plan</h5>
                    <p class="text-gray-600 text-sm mb-3">Perfect for individuals or small teams getting
                        started with task management</p>
                    <h1 class="mb-4 font-bold text-2xl">FREE</h1>
                    <hr class="mb-8">

                    <div class="flex gap-3">
                        <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                            alt="icon_ceklis">
                        <p class="font-medium text-sm">Task Management tools</p>
                    </div>
                    <div class="flex gap-3">
                        <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                            alt="icon_ceklis">
                        <p class="font-medium text-sm">Team Collaboration</p>
                    </div>
                    <div class="flex gap-3 mb-6">
                        <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                            alt="icon_ceklis">
                        <p class="font-medium text-sm">Basic Project Tracking</p>
                    </div>

                    <a class="bg-navy text-sm text-white hover:scale-105 transition duration-300 text-center py-3 flex mx-auto items-center align-middle justify-center rounded font-medium"
                        href="#">Choose Plan</a>
                </div>

                <div class="scale-105">
                    <div class="text-center bg-navy w-80 rounded-t-lg text-white text-sm py-1">Best Value</div>
                    <div class="bg-white border-s border-b border-r border-gray-200 p-8 w-80">
                        <img src="{{ asset('images/pro_icon.webp') }}" alt="">
                        <h5 class="text-md lg:text-xl mt-6 font-semibold mb-3">Pro Plan</h5>
                        <p class="text-gray-600 text-sm mb-3">Helping your teams growing and that need advanced
                            features
                            and flexibilty</p>
                        <h1 class="mb-4"><span class="font-bold text-2xl">$15</span> <span
                                class="text-gray-600 text-sm">/
                                month</span></h1>
                        <hr class="mb-8">

                        <div class="flex gap-3">
                            <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                                alt="icon_ceklis">
                            <p class="font-medium text-sm">Everything in Starter Plan</p>
                        </div>
                        <div class="flex gap-3">
                            <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                                alt="icon_ceklis">
                            <p class="font-medium text-sm">Team Up to 10 people </p>
                        </div>
                        <div class="flex gap-3 mb-6">
                            <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                                alt="icon_ceklis">
                            <p class="font-medium text-sm">Advanced Project Tracking</p>
                        </div>

                        <a class="bg-navy hover:scale-105 transition duration-300 text-white text-center py-3 flex mx-auto gap-3 items-center align-middle justify-center rounded font-medium text-sm"
                            href="#"><img src="{{ asset('images/star_pricing.webp') }}" alt="">Choose
                            Plan</a>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-8 w-80">
                    <img src="{{ asset('images/entrprise_icon.webp') }}" alt="">
                    <h5 class="text-md lg:text-xl mt-6 font-semibold mb-3">Enterprise Plan</h5>
                    <p class="text-gray-600 text-sm mb-3">Best for large teams and enterprises with multple projects
                        and complex workflows</p>
                    <h1 class="mb-4"><span class="font-bold text-2xl">$30</span> <span class="text-gray-600 text-sm">/
                            month</span></h1>
                    <hr class="mb-8">

                    <div class="flex gap-3">
                        <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                            alt="icon_ceklis">
                        <p class="font-medium text-sm">Everything on Pro Plan</p>
                    </div>
                    <div class="flex gap-3">
                        <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                            alt="icon_ceklis">
                        <p class="font-medium text-sm">Analysis Team Insight</p>
                    </div>
                    <div class="flex gap-3 mb-6">
                        <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                            alt="icon_ceklis">
                        <p class="font-medium text-sm">Super Project Tracking</p>
                    </div>

                    <a class="bg-navy text-white hover:scale-105 transition duration-300 text-center py-3 flex mx-auto gap-3 items-center align-middle justify-center rounded font-medium text-sm"
                        href="#">Choose Plan</a>
                </div>
            </div>
        </div>

        {{-- CTA #2 --}}
        <div class="mb-16 container mx-auto px-4">
            <div
                class="flex bg-white justify-between flex-col lg:flex-row items-start lg:items-center p-8 lg:p-12 border-gray-200 border rounded">
                <div class="lg:w-1/2">
                    <p class="text-sm text-navy font-medium mb-3">TRY IT NOW</p>
                    <h2 class="text-xl lg:text-3xl font-bold mb-3">Ready to Level Up Your Team Management ?</h2>
                    <p class="text-gray-600 text-sm lg:text-md">Take your team's productivity to new heights with
                        powerful tools
                        that simplify collaboration, streamline workflows, and keep everyone on track.</p>
                </div>
                <div class="flex justify-content-between items-center gap-3 mt-4">
                    <a class="lg:px-10 px-4 py-3 lg:py-3 border rounded-md text-sm font-medium text-white bg-navy hover:scale-110 transition duration-300"
                        href="#pricing">Start Free Trial</a>
                    <a class="lg:px-10 px-4 py-3 lg:py-3 border rounded-md text-black text-sm font-medium bg-white hover:bg-transparent"
                        href="">Learn More</a>
                </div>
            </div>
        </div>

        {{-- TESTIMONIAL --}}
        <div class="mb-16 container mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-navy font-medium mb-4">Testimonials</p>
                <h1 class="text-2xl lg:text-4xl font-bold mb-4">What Our Customers Say</h1>
                <p class="text-gray-600 lg:text-base text-sm">Hear from satisfied customers who have experienced the
                    benefits of
                    KanbanVerse firsthand.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 h-full">
                <div class="bg-white shadow rounded p-8">
                    <div class="flex gap-3 mb-3 items-center">
                        <img class="rounded-full object-contain w-12"
                            src="https://eu.ui-avatars.com/api/?name=John+Doe&size=250" alt="">
                        <div>
                            <h5 class="font-semibold text-md">John Doe</h5>
                            <p class="text-gray-600 text-sm">CEO, Company Name</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatum deserunt illum ratione sequi!
                        Iusto eveniet ducimus ipsum at doloribus tenetur, eligendi magnam[...]</p>
                </div>
                <div class="bg-white shadow rounded p-8">
                    <div class="flex gap-3 mb-3 items-center">
                        <img class="rounded-full object-contain w-12"
                            src="https://eu.ui-avatars.com/api/?name=John+Doe&size=250" alt="">
                        <div>
                            <h5 class="font-semibold text-md">John Doe</h5>
                            <p class="text-gray-600 text-sm">CEO, Company Name</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatum deserunt illum ratione sequi!
                        Iusto eveniet ducimus ipsum at doloribus tenetur, eligendi magnam[...]</p>
                </div>
                <div class="bg-white shadow rounded p-8">
                    <div class="flex gap-3 mb-3 items-center">
                        <img class="rounded-full object-contain w-12"
                            src="https://eu.ui-avatars.com/api/?name=John+Doe&size=250" alt="">
                        <div>
                            <h5 class="font-semibold text-md">John Doe</h5>
                            <p class="text-gray-600 text-sm">CEO, Company Name</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatum deserunt illum ratione sequi!
                        Iusto eveniet ducimus ipsum at doloribus tenetur, eligendi magnam[...]</p>
                </div>
                <div class="bg-white shadow rounded p-8">
                    <div class="flex gap-3 mb-3 items-center">
                        <img class="rounded-full object-contain w-12"
                            src="https://eu.ui-avatars.com/api/?name=John+Doe&size=250" alt="">
                        <div>
                            <h5 class="font-semibold text-md">John Doe</h5>
                            <p class="text-gray-600 text-sm">CEO, Company Name</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatum deserunt illum ratione sequi!
                        Iusto eveniet ducimus ipsum at doloribus tenetur, eligendi magnam[...]</p>
                </div>
            </div>
        </div>

        {{-- CONTACT US --}}
        <div id="contact-us" class="bg-navy text-white py-16">
            <div class="container mx-auto px-4 flex flex-col lg:flex-row">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h1 class="text-5xl font-semibold mb-5">Contact Us</h1>
                    <p class="mb-3">Email, call or complete the form to learn how KanbanVerse can solve your
                        messaging
                        problem.</p>
                    <p class="mb-3">support@kanbanverse.app-project.my.id</p>
                    <a class="underline" href="mailto:support@kanbanverse.app-project.my.id">Customer Support</a>
                </div>
                <div class="lg:w-1/2 px-8 py-6 bg-white text-navy rounded-lg shadow-lg">
                    <form action="">
                        <input type="email" placeholder="Email"
                            class="w-full p-2 border mb-3 border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-navy focus:border-transparent">
                        <textarea rows="5" placeholder="Message"
                            class="w-full p-2 border border-gray-200 rounded mb-3 focus:outline-none focus:ring-2 focus:ring-navy focus:border-transparent"></textarea>
                        <button
                            class="bg-navy text-white font-semibold py-2 px-6 rounded hover:bg-white hover:text-navy transition duration-300">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <button type="button"
            class="!fixed bottom-5 end-5 hidden rounded-full bg-navy p-4 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-navy hover:shadow-lg focus:bg-navy focus:shadow-lg focus:outline-none focus:ring-0 active:bg-navy active:shadow-lg"
            id="btn-back-to-top">
            <span class="[&>svg]:w-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                </svg>
            </span>
        </button>
    </main>

    {{-- FOOTER --}}
    <footer class="bg-white">
        <div class="container mx-auto px-4 flex py-8 lg:py-16 gap-12 lg:gap-32 flex-col lg:flex-row">
            <img class="object-contain mr-auto" src="{{ asset('images/logo_white.png') }}" alt="logo_white">

            <div class="flex w-full flex-wrap justify-around">
                <nav class="mb-3">
                    <h5 class="font-semibold text-lg mb-2">Company</h5>
                    <ul>
                        <li class="mb-2"><a class="text-gray-600 hover:text-navy" href="#">About Us</a></li>
                        <li class="mb-2"><a class="text-gray-600 hover:text-navy" href="#contact-us">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeToggle = document.getElementById('mobile-menu-close');
            const body = document.body;

            closeToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                body.classList.remove('overflow-hidden');
            });

            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                body.classList.toggle('overflow-hidden');
            });
        });
    </script>
    <script src="{{ asset('scripts/main.js') }}"></script>
@endsection
