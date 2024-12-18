@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex h-screen">
        <div class="w-1/2 h-full bg-dark_navy px-20 py-6 flex flex-col justify-center items-center">
            <a href="{{ route('home') }}">
                <img class="object-contain w-72" src="{{ asset('images/logos.svg') }}" alt="logo">
            </a>

            <div class="w-full mt-12">
                <div class="mb-6 w-full">
                    <label class="font-medium text-white mb-3" for="email">
                        Email
                    </label>
                    <input
                        class="shadow text-white appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="email@example.com">
                </div>

                <div class="mb-6 w-full">
                    <label class="font-medium text-white mb-3" for="password">
                        Password
                    </label>
                    <input
                        class="shadow text-white appearance-none bg-transparent border mt-2 rounded w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password">
                </div>

                <div class="flex justify-between items-center mb-6">
                    <div class="flex items
                    -center">
                        <input class="mr-2" type="checkbox" id="remember">
                        <label class="text-white
                        cursor-pointer" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a class="text-white
                    cursor-pointer" href="">
                        Forgot password?
                    </a>
                </div>

                <button class="w-full mb-6 bg-white text-black py-4 px-6 rounded font-medium focus:outline-none focus:shadow-outline">
                    Login
                </button>

                <div class="mt-6 text-center">
                    <span class="text-white
                    ">Don't have an account?</span>
                    <a class="text-navy
                    font-medium" href="{{ route('register') }}">
                        Register
                    </a>
                </div>
            </div>
        </div>
        <div class="w-1/2 h-full px-8 py-6 flex flex-col justify-center items-center">
            <img src="{{ asset('images/bg_login.webp') }}" alt="bg_login">
            <h2 class="text-dark_navy text-4xl font-semibold mb-3">KanbanVerse</h2>
            <p class="text-center text-dark_navy text-xl">Time Management Made Easy Experience the <br> Kanban Advantage!</p>
        </div>
    </div>
@endsection
