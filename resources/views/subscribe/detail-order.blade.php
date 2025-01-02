@extends('subscribe.layout')

@section('title', 'Subscribe - ' . $plan->name_plan)

@section('content')
    <h1 class="text-3xl font-medium">Subscribe - {{ $plan->name_plan }}</h1>

    <div class="flex gap-5 mt-5 lg:flex-row flex-col">
        <div class="lg:w-3/4 w-full">
            <div class="bg-white shadow p-6 rounded-sm">
                <h5 class="font-medium text-lg">Choose Billing Cycle</h5>
                <p class="text-sm text-gray-600">Renewal price stays the same</p>

                <div class="flex gap-3 mt-6">
                    <label class="border border-dark_navy p-4 w-1/2 rounded-sm text-center cursor-pointer">
                        <input type="radio" checked name="billing_cycle" value="monthly" class="hidden">
                        <div>
                            <h5 class="font-normal text-md">Monthly</h5>
                            <p class="text-xl font-medium">{{ $plan->price }}</p>
                        </div>
                    </label>

                    <div class="border bg-gray-300 p-4 w-1/2 rounded-sm text-center">
                        <h5 class="font-normal text-md">Yearly</h5>
                        <p class="text-xl font-medium">Not available</p>
                    </div>
                </div>
            </div>

            <div class="bg-white mt-5 shadow p-6 rounded-sm">
                <h5 class="font-medium text-lg">Details Plan</h5>
                <p class="text-sm text-gray-600">Here's some details that we need you to know</p>

                <div class="mt-5">
                    <ul class="list-none">
                        @foreach ($plan->features as $features)
                            <li class="flex gap-3 items-center mb-1">
                                <img class="object-contain w-4" src="{{ asset('images/ceklis_pricing.webp') }}"
                                    alt="">
                                <p class="">{{ $features->name }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="bg-white mt-5 shadow p-6 rounded-sm">
                <h5 class="font-medium text-lg">Account Information</h5>

                <div class="px-4 py-3 border mt-2 bg-gray-100 rounded-sm">
                    <span>Email : {{ Auth::user()->email }}</span>
                </div>
            </div>

            <div class="bg-white mt-5 shadow p-6 rounded-sm">
                <h5 class="font-medium text-md">Promo Code</h5>

                <div class="mt-6 flex gap-3 justify-between">
                    <input type="text" class="border border-gray-300 w-full p-3 rounded-sm"
                        placeholder="Enter promo code">

                    <button class="bg-dark_navy text-white p-3 w-1/6 rounded-sm">Apply</button>
                </div>
            </div>
        </div>
        <div class="bg-dark_navy w-full lg:w-1/3 shadow p-10 text-white rounded-sm mt-2 lg:mt-0">
            <h1 class="text-3xl font-medium">Order Overview</h1>

            <form action="{{ route('subscribe.order') }}" method="POST" class="mt-5 flex flex-col justify-around h-full">
                @csrf
                <input type="hidden" name="plan_id" value="{{ $plan->id }}">

                <div>
                    <div class="flex justify-between">
                        <p>Plan</p>
                        <p>{{ $plan->name_plan }}</p>
                    </div>

                    <div class="flex justify-between mt-3">
                        <p>Billing Cycle</p>
                        <p>Monthly</p>
                    </div>

                    <div class="flex justify-between mt-3">
                        <p>Price</p>
                        <p>{{ $plan->price }}</p>
                    </div>

                    <div class="flex justify-between mt-3">
                        <p>Discount</p>
                        <p>0</p>
                    </div>

                    <div class="flex justify-between mt-3">
                        <p>Total</p>
                        <p>{{ $plan->price }}</p>
                    </div>
                </div>

                <div class="flex flex-col gap-6">
                    <p class="text-4xl">{{ $plan->price }}</p>
                    <button type="submit" class="bg-white text-dark_navy p-3 w-full rounded-sm">Proceed to Payment</button>
                </div>
            </form>
        </div>
    </div>
@endsection
