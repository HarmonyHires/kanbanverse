@extends('subscribe.layout')

@section('title', 'Order Failed')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4 md:p-6">
        <div class="flex flex-col items-center gap-2 text-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="h-24 w-24 text-red-500 mb-3">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="m9 12 2 2 4-4"></path>
            </svg>
            <h1 class="font-semibold text-4xl mb-3">Payment unsuccessfully</h1>
            <p class="text-gray-500 md:text-xl/tight dark:text-gray-400">
                Your order could not be processed successfully. Please try again or contact customer support for assistance.
            </p>
            <p class="text-gray-500 md:text-xl/tight dark:text-gray-400">
                Redirecting to home in <span id="countdown">5</span> seconds...
            </p>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let countdownElement = document.getElementById('countdown');
        let countdown = 5;

        setInterval(() => {
            countdown--;
            countdownElement.textContent = countdown;
            if (countdown <= 0) {
                window.location.href = '{{ route('home') }}';
            }
        }, 1000);
    </script>
@endsection
