@extends('backsite.layouts.app')

@section('title', 'Subscription Plan')

@section('content')
    <nav class="flex mb-4 py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('subscription-plan.index') }}"
                    class="text-gray-700 hover:text-gray-900 inline-flex text-sm items-center">
                    Subscription Plan
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
                    <a href="#"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">{{ $plan->name_plan }}</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="flex gap-3">
        <div class="w-2/3 shadow-sm bg-white rounded-lg h-full">
            <div class="flex justify-between p-4 rounded-t-lg items-center">
                <h2 class="text-2xl font-semibold">Subscription Plan Details</h2>
                <a href="{{ route('subscription-plan.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
            </div>
            <div class="p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Icon</th>
                                <th class="py-3 px-6 text-left">Plan Name</th>
                                <th class="py-3 px-6 text-left">Description</th>
                                <th class="py-3 px-6 text-left">Price</th>
                                <th class="py-3 px-6 text-left">Duration</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap"><img width="25" class="rounded"
                                        src="{{ $plan->icon }}" alt=""></td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $plan->name_plan }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $plan->description }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $plan->price }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $plan->duration }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="w-5/12 shadow-sm bg-white rounded-lg">
            <div class="flex justify-between p-4 rounded-t-lg items-center">
                <h2 class="text-2xl font-semibold">Features</h2>
                <a href="{{ route('subscription-plan.features', $plan->id) }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add
                    Features</a>
            </div>
            <div class="p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Feature</th>
                                <th class="py-3 px-6 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @forelse ($plan->features as $feature)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $feature->name }}</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <form
                                            action="{{ route('subscription-plan.delete-feature', [$plan->id, $feature->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-white py-2 px-4 rounded bg-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="py-3 px-6 text-left whitespace-nowrap">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
