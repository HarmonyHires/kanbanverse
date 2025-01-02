@extends('backsite.layouts.app')

@section('title', 'Order')

@section('content')
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-gray-800">Order</h2>
    </div>

    <nav class="flex mb-4 py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-gray-900 inline-flex text-sm items-center">
                    Dashboard
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{ route('order.index') }}"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Order</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="mt-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Order ID</th>
                    <th class="py-3 px-6 text-left">Package</th>
                    <th class="py-3 px-6 text-left">Amount</th>
                    <th class="py-3 px-6 text-left">Username</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($orders as $order)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $order->order_id }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $order->plan->name_plan }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $order->total }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $order->user->name }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap text-black"><span class="px-3 py-1 rounded {{ $order->isPaid() ? 'bg-green-600 text-white' : ($order->isPending() ? 'bg-yellow-500' : 'bg-red-600 text-white') }}">{{ $order->status }}</span></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $orders->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
