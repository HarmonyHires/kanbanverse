@extends('backsite.layouts.app')

@section('title', 'Transaction')

@section('content')
    @include('backsite.layouts.partials.alerts')

    <h2 class="text-2xl font-semibold text-gray-800">Transaction</h2>

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
                    <a href="{{ route('transaction.index') }}"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Transaction</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="mt-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Transaction ID</th>
                    <th class="py-3 px-6 text-left">Order ID</th>
                    <th class="py-3 px-6 text-left">Amount</th>
                    <th class="py-3 px-6 text-left">Plan</th>
                    <th class="py-3 px-6 text-left">Payment Method</th>
                    <th class="py-3 px-6 text-left">Transaction Time</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($transactions as $transaction)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $transaction->transaction_id }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $transaction->order->order_id }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $transaction->order->plan->price }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap ">{{ $transaction->order->plan->name_plan }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap ">{{ $transaction->payment_type }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap ">{{ $transaction->transaction_time }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap text-black"><span class="px-3 py-1 rounded {{ $transaction->isAccepted() ? 'bg-green-600 text-white' : ($transaction->isPending() ? 'bg-yellow-500' : 'bg-red-600 text-white') }}">{{ $transaction->transaction_status }}</span></td>
                        <td></td>

                        {{-- <td class="py-3 px-6 text-center flex justify-center">
                            <a href="{{ route('subscription-plan.edit', $transaction->id) }}"
                                class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                            <a href="{{ route('subscription-plan.features', $transaction->id) }}"
                                class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Features</a>
                            <a href="{{ route('subscription-plan.show', $transaction->id) }}"
                                class="mr-2 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Show</a>
                            <form action="{{ route('subscription-plan.destroy', $transaction->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $transactions->links('backsite.layouts.partials.pagination') }}
    </div>
@endsection
