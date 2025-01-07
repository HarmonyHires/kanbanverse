@extends('layouts.app')

@section('title', 'Solution Management Project')

@section('content')
    <div class="includes-bg-hero relative">
        <div class="bg-hero-overlay">
            {{-- NAVBAR --}}
            <header class="container mx-auto px-4 py-3 flex justify-between items-center flex-row gap-16">
                <img class="object-contain w-42" src="{{ asset('images/logo.png') }}" alt="logo_kanbanverse">

                <ul role="navigation"
                    class="mt-4 hidden lg:flex grow flex-col lg:flex-row justify-center gap-4 items-center text-white">
                    <li class="grow max-w-36">
                        <a class="text-base btn btn-ghost hover:bg-base-300/25 text-base-100 px-6 py-[22px] w-full border-0 tracking-wide"
                            href="#">Home</a>
                    </li>
                    <li class="grow max-w-36">
                        <a class="text-base btn btn-ghost hover:bg-base-300/25 text-base-100 px-6 py-[22px] w-full border-0 tracking-wide"
                            href="#features">Features</a>
                    </li>
                    <li class="grow max-w-36">
                        <a class="text-base btn btn-ghost hover:bg-base-300/25 text-base-100 px-6 py-[22px] w-full border-0 tracking-wide"
                            href="#pricing">Pricing</a>
                    </li>
                    <li class="grow max-w-36">
                        <a class="text-base btn btn-ghost hover:bg-base-300/25 text-base-100 px-6 py-[22px] w-full border-0 tracking-wide"
                            href="#contact-us">Contact Us</a>
                    </li>
                </ul>


                <div class="justify-between items-center gap-3 mt-4 hidden lg:flex">
                    @guest
                        <a class="text-base btn btn-primary px-6 py-[22px] tracking-wide" href="{{ route('login') }}">
                            Login
                        </a>
                        <a class="text-base btn btn-primary px-6 py-[22px] tracking-wide" href="{{ route('register') }}">
                            Register
                        </a>
                    @else
                        <a class="text-base btn btn-primary px-6 py-[22px] tracking-wide" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    @endguest
                </div>

                {{-- Mobile Navigation --}}
                <div class="drawer lg:hidden w-fit">
                    <input id="mobile-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content flex">
                        <label for="mobile-drawer"
                            class="btn btn-outline tracking-wider [&:hover]:bg-neutral-900/25 text-neutral-100 border-0 shadow-none drawer-button">
                            <span class="icon-[hugeicons--menu-05] text-3xl"></span>
                        </label>
                    </div>
                    <div class="drawer-side z-[999]">
                        <label for="mobile-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul class="menu bg-base-100 text-base-content min-h-full w-80 p-4 gap-2 tracking-wide">
                            <li class="">
                                <img class="w-52 menu-title pb-4" src="{{ asset('images/logo_black.png') }}" alt="">
                            </li>
                            <li class="">
                                <a role="button" class="btn ![--btn-color:var(--color-base-100)] justify-start border-0"
                                    href="#">Home</a>
                            </li>
                            <li class="">
                                <a role="button" class="btn ![--btn-color:var(--color-base-100)] justify-start border-0"
                                    href="#features">Features</a>
                            </li>
                            <li class="">
                                <a role="button" class="btn ![--btn-color:var(--color-base-100)] justify-start border-0"
                                    href="#pricing">Pricing</a>
                            </li>
                            <li class="">
                                <a role="button" class="btn ![--btn-color:var(--color-base-100)] justify-start border-0"
                                    href="#contact-us">Contact
                                    Us</a>
                            </li>
                            <li class="">
                                @guest
                                    <a class="btn btn-primary bg-[var(--btn-bg)]/90 border-0 justify-start"
                                        href="{{ route('login') }}">
                                        Login
                                    </a>
                                    <a class="btn btn-primary bg-[var(--btn-bg)]/90 border-0 justify-start"
                                        href="{{ route('register') }}">
                                        Register
                                    </a>
                                @else
                                    <a class="btn btn-primary bg-[var(--btn-bg)]/90 border-0 justify-start"
                                        href="{{ route('dashboard') }}">
                                        Dashboard
                                    </a>
                                @endguest
                            </li>
                        </ul>
                    </div>
                </div>
            </header>

            {{-- HERO --}}
            <div class="container mx-auto px-4 flex justify-center flex-col h-3/4 items-center gap-4">
                <h1 class="text-white font-bold text-3xl lg:text-6xl text-center tracking-wide leading-tight">Time
                    Management Made Easy Experience the Kanban <p>Advantage!</p>
                </h1>
                <p class="text-gray-300 lg:text-xl mb-5 text-center">Boost your team's productivity with Kanban, the
                    ultimate visual tool for organizing tasks and streamlining workflows.</p>
                <a role="button" class="btn btn-primary md:p-8 p-6 md:btn-lg" href="#pricing">Get Started</a>
            </div>
        </div>
    </div>

    <main>
        {{-- FEATURE LOOKUP --}}
        <div
            class="container px-4 flex gap-5 mx-auto justify-center mt-[-60px] relative mb-12 flex-col lg:flex-row md:flex-col">
            <div class="flex gap-5 bg-white shadow-md rounded-md px-8 py-7 items-center">
                <span class="icon-[iconamoon--file-check-fill] text-8xl text-secondary"></span>
                <div>
                    <h5 class="font-semibold lg:text-xl">Smart Task Prioritization</h5>
                    <p class="text-sm text-base-content">Automatically rank and highlight tasks across projects</p>
                </div>
            </div>
            <div class="flex gap-5 bg-white shadow-md rounded-md px-8 py-7 items-center">
                <span class="icon-[fluent--people-team-24-filled] text-8xl text-secondary"></span>
                <div>
                    <h5 class="font-semibold lg:text-xl">Team Performance Insights</h5>
                    <p class="text-sm text-base-content">Gain a clear view of your team's productivity with real-time
                        analytics.</p>
                </div>
            </div>
            <div class="flex gap-5 bg-white shadow-md rounded-md px-8 py-7 items-center">
                <span class="icon-[carbon--collaborate] text-8xl text-secondary"></span>
                <div>
                    <h5 class="font-semibold lg:text-xl">Real-Time Collaboration</h5>
                    <p class="text-sm text-base-content">Gain a clear view of your team's productivity with real-time
                        analytics.</p>
                </div>
            </div>
        </div>

        {{-- CTA #1 --}}
        <div class="bg-white border border-gray-200">
            <div class="container mx-auto px-4 py-8 lg:py-16 flex justify-between flex-col lg:flex-row items-center">
                <div>
                    <h3 class="text-md lg:text-3xl font-semibold">Ready to get started ?</h3>
                    <h3 class="text-md lg:text-2xl">Start free trial now!</h3>
                </div>
                <div class="flex justify-content-between items-center gap-3 mt-4">
                    <a role="button" class="border-neutral-600 btn btn-outline btn-neutral py-6 px-12"
                        href="#pricing">Start Free Trial</a>
                    <a role="button" class="btn btn-primary py-6 px-12" href="#">Learn More</a>
                </div>
            </div>
        </div>

        {{-- BRAND SUPPORT --}}
        <div class="wrapper bg-base-200">
            <div class="bg-secondary mx-auto rounded-b-3xl overflow-x-hidden">
                <div class="flex flex-row justify-between items-center gap-16 px-8 mx-auto container text-base-100">
                    <span class="icon-[devicon-plain--google-wordmark] text-9xl"></span>
                    <span class="icon-[simple-icons--spotify] text-6xl"></span>
                    <span class="icon-[simple-icons--slack] text-6xl"></span>
                    <span class="icon-[simple-icons--cocacola] text-9xl"></span>
                    <span class="icon-[simple-icons--discord] text-6xl"></span>
                    <span class="icon-[bxl--firebase] text-6xl"></span>
                </div>
            </div>
        </div>

        {{-- FEATURES --}}
        <div class="wrapper bg-sky-50 py-24">
            <div id="features" class="container px-4 mx-auto mb-24">
                <div class="text-center mb-12">
                    <p class="text-secondary font-bold tracking-wide mb-2">Advantages</p>
                    <h1 class="text-neutral-800 text-2xl lg:text-4xl font-bold mb-4">Key Features to Boost your Team's
                        Productivity</h1>
                    <p class="text-neutral-700 lg:text-base text-sm">Unlock your team's full potential with powerful
                        features
                        designed to streamline
                        collaboration and
                        enhance productivity.</p>
                </div>

                <div class="mx-auto h-full gap-3 grid lg:grid-cols-3 sm:grid-cols-2 justify-items-center">
                    <div class="card lg:max-w-80 bg-base-100 border border-neutral-300 rounded-sm p-5">
                        <span class="bg-primary p-0.5 text-base-100 px-3 rounded-sm w-fit">1</span>
                        <h5 class="lg:text-xl text-md mt-6 font-semibold mb-3">To-Do List</h5>
                        <p class="text-gray-600 mb-8 text-sm lg:text-md">Keep tasks organized with a simple yet powerful
                            to-do list
                            that helps you prioritize, manage deadlines, and ensure nothing falls through the cracks.</p>
                        <img class="object-contain lg:w-full w-3/4 mx-auto" src="{{ asset('images/todo_icon.webp') }}"
                            alt="todo_icon">
                    </div>
                    <div class="card lg:max-w-80 bg-base-100 border border-neutral-300 rounded-sm p-5">
                        <span class="bg-primary p-0.5 text-base-100 px-3 rounded-sm w-fit">2</span>
                        <h5 class="lg:text-xl text-md mt-6 font-semibold mb-3">Project Tracking</h5>
                        <p class="text-gray-600 mb-8 text-sm lg:text-md">Stay on top of your projects with clear, real-time
                            visibility
                            into task progress, deadlines, and team performance.</p>
                        <img class="object-contain lg:w-full w-3/4 mx-auto"
                            src="{{ asset('images/project_tracking_icon.webp') }}" alt="project_tracking_icon">
                    </div>
                    <div class="card lg:max-w-80 bg-base-100 border border-neutral-300 rounded-sm p-5">
                        <span class="bg-primary p-0.5 text-base-100 px-3 rounded-sm w-fit">3</span>
                        <h5 class="lg:text-xl text-md mt-6 font-semibold mb-3">Mobile Access</h5>
                        <p class="text-gray-600 mb-8 text-sm lg:text-md">Mobile-friendly interface ensures users can access
                            and manage
                            your Kanban boards on the go, enhancing flexibility seamlessly.</p>
                        <img class="object-contain lg:w-3/4 w-3/4 mx-auto"
                            src="{{ asset('images/mobile_access_icon.webp') }}" alt="mobile_access_icon">
                    </div>
                </div>
            </div>


            {{-- PRICING --}}
            <div id="pricing" class="container px-4 mx-auto">
                <div class="text-center mb-12">
                    <p class="text-secondary font-bold tracking-wide mb-4">Pricing</p>
                    <h1 class="text-neutral-800 text-2xl lg:text-4xl font-bold mb-4">Choose the Perfect Plan for Your Team
                    </h1>
                    <p class="text-neutral-700 lg:text-base text-sm">Find the right fit for your team's needs with flexible
                        pricing options.</p>
                </div>

                <div class="mx-auto h-full gap-3 grid lg:grid-cols-3 sm:grid-cols-2 justify-items-center">
                    @forelse($plans as $plan)
                        <form action="{{ route('subscribe') }}" target="_blank"
                            class="card lg:max-w-80 bg-base-100 border border-neutral-300 rounded-sm p-5 indicator w-fit">
                            @if ($plan->isBest == 1)
                                <span class="indicator-item indicator-top indicator-center badge badge-primary">Best
                                    Value</span>
                            @endif
                            <input type="hidden" name="type" value="{{ $plan->slug }}">

                            <img src="{{ $plan->icon }}" alt="{{ $plan->name_plan }}">
                            <h5 class="text-md lg:text-xl mt-6 font-semibold mb-3">
                                {{ $plan->name_plan }}</h5>
                            <p class="text-gray-600 text-sm mb-3">{{ $plan->description }}</p>
                            <span class="grow"></span>
                            <h1 class="mb-4">
                                <span
                                    class="font-bold text-2xl">{{ $plan->price_number == '0.00' ? 'FREE' : $plan->price }}</span>
                                @if ($plan->price_number != '0.00')
                                    <span class="text-gray-600 text-sm font-normal italic">/month</span>
                                @endif
                            </h1>
                            <hr class="mb-8">

                            @foreach ($plan->features as $feature)
                                <div class="flex gap-3">
                                    <img class="w-5 object-contain mb-3" src="{{ asset('images/ceklis_pricing.webp') }}"
                                        alt="icon_ceklis">
                                    <p class="font-medium text-sm">{{ $feature->name }}</p>
                                </div>
                            @endforeach
                            @if ($plan->isBest == 1)
                                <button type="submit"
                                    class="text-base flex justify-center items-center h-fit py-3 btn btn-primary">
                                    <span class="icon-[solar--star-bold-duotone]"></span> Choose Plan</button>
                            @elseif ($plan->price_number == '0.00')
                                <button type="submit"
                                    class="text-base flex justify-center items-center h-fit py-2 btn">Get Started</button>
                            @else
                                <button type="submit"
                                    class="text-base flex justify-center items-center h-fit py-2 btn btn-primary">Choose
                                    Plan</button>
                            @endif
                        </form>
                    @empty
                        <div class="bg-white border border-gray-200 p-8 w-80">
                            <p>Empty Plans.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        {{-- CTA #2 --}}
        <div class="border-gray-200 border-y mb-16">
            <div class="container mx-auto px-4">
                <div
                    class="flex bg-white justify-between flex-col lg:flex-row items-start lg:items-center p-8 lg:p-12 rounded">
                    <div class="lg:w-1/2">
                        <p class="text-sm text-navy font-medium mb-3">TRY IT NOW</p>
                        <h2 class="text-xl lg:text-3xl font-bold mb-3">Ready to Level Up Your Team Management ?</h2>
                        <p class="text-gray-600 text-sm lg:text-md">Take your team's productivity to new heights with
                            powerful tools
                            that simplify collaboration, streamline workflows, and keep everyone on track.</p>
                    </div>
                    <div class="flex justify-content-between items-center gap-3 mt-4">
                        <a role="button" class="border-neutral-600 btn btn-outline btn-neutral py-6 px-12"
                            href="#pricing">Start Free Trial</a>
                        <a role="button" class="btn btn-primary py-6 px-12" href="#">Learn More</a>
                    </div>
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
        <div id="contact-us" class="bg-primary text-white py-16">
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
                            class="bg-primary text-white font-semibold py-2 px-6 rounded hover:bg-white hover:text-navy transition duration-300">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <button type="button"
            class="btn btn-secondary py-6 px-3 rounded-full shadow shadow-base-content fixed bottom-4 right-4"
            id="btn-back-to-top">
            <span class="icon-[majesticons--arrow-up] text-2xl text-white"></span>
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
        document.addEventListener('DOMContentLoaded', () => {
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
