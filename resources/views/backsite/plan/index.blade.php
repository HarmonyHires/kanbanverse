@extends('backsite.layouts.app')

@section('title', 'Subscription Plan')

@section('content')

    @include('backsite.layouts.partials.alerts')

    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-gray-800">Subscription Plan</h2>
        <a href="{{ route('subscription-plan.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
            Plan</a>
    </div>

    <nav class="flex mb-4 py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('dashboard') }}"
                    class="text-gray-700 hover:text-gray-900 inline-flex text-sm items-center">
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
                    <a href="{{ route('subscription-plan.index') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Subscription Plan</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="mt-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Icon</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Price</th>
                    <th class="py-3 px-6 text-left">Duration</th>
                    <th class="py-3 px-6 text-left">Best Value</th>
                    <th class="py-3 px-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($plans as $plan)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap"><img width="25" class="rounded"
                                src="{{ $plan->icon }}" alt=""></td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $plan->name_plan }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $plan->price }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $plan->duration }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap ">{{ $plan->isBest == 1 ? 'Yes' : 'No' }}</td>
                        <td class="py-3 px-6 text-center flex justify-center">
                            <a href="{{ route('subscription-plan.edit', $plan->id) }}"
                                class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                            <a href="{{ route('subscription-plan.features', $plan->id) }}"
                                class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Features</a>
                            <a href="{{ route('subscription-plan.show', $plan->id) }}"
                                class="mr-2 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Show</a>
                            <form action="{{ route('subscription-plan.destroy', $plan->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $plans->links('backsite.layouts.partials.pagination') }}
    </div>
@endsection
