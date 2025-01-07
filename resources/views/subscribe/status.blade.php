@extends('subscribe.layout')

@section('title', 'Order Status')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4 md:p-6">
        <div class="flex flex-col items-center gap-2 text-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="h-24 w-24 text-navy mb-3">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="m9 12 2 2 4-4"></path>
            </svg>
            <h1 class="font-semibold text-4xl mb-3">Payment successful</h1>
            <p class="text-gray-500 md:text-xl/tight dark:text-gray-400">
                Your order has been confirmed and is now being processed. Thank you for shopping with us!
            </p>
        </div>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full p-0" data-v0-t="card">
            <div class="p-4 md:p-6">
                <div class="grid gap-1 text-lg">
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Transaction Code</div>
                        <div class="font-bold">: {{ $order->transaction->transaction_id }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Date</div>
                        <div>: {{ $order->transaction->transaction_time }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Payment method</div>
                        <div>: {{ $order->transaction->payment_type }}</div>
                    </div>
                </div>
                <div data-orientation="horizontal" role="none"
                    class="shrink-0 bg-border bg-gray-300 h-[1px] w-full my-4"></div>
                <div class="grid gap-1 text-lg">
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Email</div>
                        <div>: {{ $order->user->email }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Plan</div>
                        <div>: {{ $order->plan->name_plan }}</div>
                    </div>
                </div>
            </div>
            <div class="items-center flex w-full p-4 md:p-6">
                {{-- <a href="{{ route('workspace.account') }}" --}}
                <a href="#"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-12 px-4 py-2 ml-auto">
                    View in account
                </a>
            </div>
        </div>
    </div>
@endsection
