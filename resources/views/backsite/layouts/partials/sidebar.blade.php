<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

        <!-- sidebar toggle -->
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <!-- end sidebar toggle -->

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

        <!-- link -->
        <a href="{{ route('dashboard') }}"
            class="mb-3 @if (request()->routeIs('dashboard')) text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            Analytics dashboard
        </a>
        <!-- end link -->

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>

        <a href="{{ route('subscription-plan.index') }}"
            class="mb-3 @if (request()->routeIs('subscription-plan.*')) text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-hand-holding-box text-xs mr-2"></i>
            Subscription Plan
        </a>

        <a href="{{ route('order.index') }}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-bags-shopping text-xs mr-2"></i>
            Order
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Settings</p>

        <!-- link -->
        <a href="./alert.html"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-whistle text-xs mr-2"></i>
            Activity Logs
        </a>
        <!-- end link -->

        <hr class="mb-6">
        <a href="{{ route('home') }}"
            class="mb-3 @if (request()->routeIs('home')) text-teal-600 @endif flex gap-3 items-center capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="#626262"
                    d="m4 10l-.707.707L2.586 10l.707-.707zm17 8a1 1 0 1 1-2 0zM8.293 15.707l-5-5l1.414-1.414l5 5zm-5-6.414l5-5l1.414 1.414l-5 5zM4 9h10v2H4zm17 7v2h-2v-2zm-7-7a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5z" />
            </svg>
            Back Home
        </a>
    </div>
    <!-- end sidebar content -->

</div>
