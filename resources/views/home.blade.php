<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="KanbanVerse is a solution management project that helps you to manage your team's productivity with Kanban, the ultimate visual tool for organizing tasks and streamlining workflows.">
    <meta name="keywords"
        content="kanban, kanban board, kanban tool, kanban software, kanban project management, kanban project, kanban project management tool, kanban project management software, kanban project management system, kanban project management board, kanban project management app, kanban project management tools, kanban project management online, kanban project management application, kanban project management platform, kanban project management website, kanban project management solution, kanban project management project, kanban project management project management, kanban project management project management tool, kanban project management project management software, kanban project management project management system, kanban project management project management board, kanban project management project management app, kanban project management project management tools, kanban project management project management online, kanban project management project management application, kanban project management project management platform, kanban project management project management website, kanban project management project management solution, kanban project management project management project, kanban project management project management project management, kanban project management project management project management tool, kanban project management project management project management software, kanban project management project management project management system, kanban project management project management project management board, kanban project management project management project management app, kanban project management project management project management tools, kanban project management project management project management online, kanban project management project management project management application, kanban project management project management project management platform, kanban project management project management project management website, kanban project management project management project management solution, kanban project management project management project management project, kanban project management project management project management project management, kanban project management project management project management project management tool, kanban project management project management project management project management software, kanban project management project management project management project management system, kanban project management project management project management project management board, kanban project management project management project management project management app, kanban project management project management project management project management tools, kanban project management project management project management project management online, kanban project management project management project management project management application, kanban project management project management project management project management platform, kanban project management project management project management project management website, kanban project management project management project management project management solution, kanban project management project management project management project management project, kanban project management project management project">
    <meta name="author" content="KanbanVerse">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="yandex" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-navbutton-color" content="#ffffff">
    <meta name="apple-mobile-web-app-title" content="KanbanVerse">
    <meta name="application-name" content="KanbanVerse">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/icon.ico') }}">
    <meta name="msapplication-square70x70logo" content="{{ asset('images/icon.ico') }}">
    <meta name="msapplication-square150x150logo" content="{{ asset('images/icon.ico') }}">
    <meta name="msapplication-wide310x150logo" content="{{ asset('images/icon.ico') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('images/icon.ico') }}">
    <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">
    <meta name="application-name" content="KanbanVerse">
    <meta name="msapplication-tooltip" content="KanbanVerse">
    <meta name="msapplication-starturl" content="/">
    <meta name="msapplication-task" content="name=KanbanVerse;action-uri=/;icon-uri={{ asset('images/icon.ico') }}">

    <meta property="og:title" content="KanbanVerse | Solution Management Project">
    <meta property="og:description"
        content="KanbanVerse is a solution management project that helps you to manage your team's productivity with Kanban, the ultimate visual tool for organizing tasks and streamlining workflows.">
    <meta property="og:image" content="{{ asset('images/og_image.png') }}">
    <meta property="og:url" content="https://kanbanverse.com">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="KanbanVerse">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="id_ID">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KanbanVerse | Solution Management Project</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/icon.ico') }}" type="image/x-icon">
</head>

<body>
    <div class="includes-bg-hero relative">
        <div class="bg-hero-overlay">

            {{-- NAVBAR --}}
            <header class="container mx-auto px-4 py-3 flex justify-between items-center flex-col lg:flex-row">
                <img class="object-contain w-52" src="{{ asset('images/logo.png') }}" alt="logo_kanbanverse">
                <nav class="mt-4">
                    <ul class="flex justify-between gap-14 items-center text-white">
                        <li class="hover:text-gray-300"><a href="/">Home</a></li>
                        <li class="hover:text-gray-300"><a href="#features">Features</a></li>
                        <li class="hover:text-gray-300"><a href="#pricing">Pricing</a></li>
                        <li class="hover:text-gray-300"><a href="#support">Support</a></li>
                    </ul>
                </nav>
                <div class="flex justify-content-between items-center gap-3 mt-4">
                    <a class="px-10 py-3 border rounded-md text-sm font-medium text-white hover:bg-white hover:text-black transition duration-300"
                        href="#">Sign In</a>
                    <a class="px-10 py-3 border rounded-md text-black text-sm font-medium bg-white hover:bg-transparent hover:text-white"
                        href="#">Sign Up</a>
                </div>
            </header>

            {{-- HERO --}}
            <div class="container mx-auto px-4 flex justify-center flex-col h-3/4 items-center gap-4">
                <h1 class="text-white font-bold text-4xl lg:text-7xl text-center tracking-wide leading-tight">Time
                    Management Made
                    Easy Experience the Kanban <br> Advantage!</h1>
                <p class="text-gray-300 lg:text-xl mb-5 text-center">Boost your team's productivity with Kanban, the
                    ultimate visual
                    tool for organizing tasks and streamlining workflows.</p>
                <a class="lg:px-8 lg:py-4 px-4 py-3 border rounded-md text-black text-sm font-medium bg-white hover:bg-transparent hover:text-white"
                    href="#">Get Started</a>
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
        <div class="bg-white border border-gray-200 mb-16">
            <div class="container mx-auto px-4 py-8 lg:py-16 flex justify-between flex-col lg:flex-row items-center">
                <div>
                    <h3 class="text-md lg:text-[24px] font-semibold">Ready to get started ?</h3>
                    <h3 class="text-md lg:text-[24px]">Start free trial now!</h3>
                </div>
                <div class="flex justify-content-between items-center gap-3 mt-4">
                    <a class="px-4 lg:px-10 py-2 lg:py-3 border rounded-md text-sm font-medium text-white bg-navy hover:scale-110 transition duration-300"
                        href="#">Start Free Trial</a>
                    <a class="px-4 lg:px-10 py-2 lg:py-3 border rounded-md text-black text-sm font-medium bg-white hover:bg-transparent"
                        href="#">Learn More</a>
                </div>
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
                    <img class="object-contain lg:w-full w-3/4"
                        src="{{ asset('images/project_tracking_icon.webp') }}" alt="project_tracking_icon">
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
                        <p class="text-gray-600 text-sm mb-3">Helping your teams growing and that need advanced features
                            and flexibilty</p>
                        <h1 class="mb-4"><span class="font-bold text-2xl">$15</span> <span
                                class="text-gray-600 text-sm">/ month</span></h1>
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
                            href="#"><img src="{{ asset('images/star_pricing.webp') }}" alt="">Choose Plan</a>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 p-8 w-80">
                    <img src="{{ asset('images/entrprise_icon.webp') }}" alt="">
                    <h5 class="text-md lg:text-xl mt-6 font-semibold mb-3">Enterprise Plan</h5>
                    <p class="text-gray-600 text-sm mb-3">Best for large teams and enterprises with multple projects
                        and complex workflows</p>
                    <h1 class="mb-4"><span class="font-bold text-2xl">$30</span> <span
                            class="text-gray-600 text-sm">/ month</span></h1>
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
                        href="">Start Free Trial</a>
                    <a class="lg:px-10 px-4 py-3 lg:py-3 border rounded-md text-black text-sm font-medium bg-white hover:bg-transparent"
                        href="">Learn More</a>
                </div>
            </div>
        </div>
    </main>

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

    {{-- FOOTER --}}
    <footer class="bg-white">
        <div class="container mx-auto px-4 flex py-8 lg:py-16 gap-12 lg:gap-32 flex-col lg:flex-row">
            <img class="object-contain mr-auto" src="{{ asset('images/logo_white.png') }}" alt="logo_white">

            <div class="flex w-full flex-wrap justify-around">
                <nav class="mb-3">
                    <h5 class="font-semibold text-lg mb-2">Company</h5>
                    <ul>
                        <li class="mb-2"><a class="text-gray-600 hover:text-navy" href="#">About Us</a></li>
                        <li class="mb-2"><a class="text-gray-600 hover:text-navy" href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

    <script src="{{ asset('scripts/main.js') }}"></script>
</body>

</html>
