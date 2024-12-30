@extends('backsite.layouts.app')

@section('title', 'Add Features')

@section('content')
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-gray-800">Add Features to {{ $plan->name_plan }}</h2>
        <a href="{{ route('subscription-plan.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
    </div>

    <nav class="text-gray-500 text-sm my-4" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="{{ route('subscription-plan.index') }}" class="text-blue-500 hover:text-blue-700">Subscription
                    Plans</a>
                <svg class="fill-current w-3 h-3 mx-3" viewBox="0 0 24 24">
                    <path d="M9 18l6-6-6-6"></path>
                </svg>
            </li>
            <li>Add Features</li>
        </ol>
    </nav>

    @if ($errors->any())
        <div class="mt-4">
            <div class="font-medium text-red-600">Whoops! Something went wrong.</div>
            <ul class="mt-2 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="mt-6">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">No</th>
                <th class="py-3 px-6 text-left">Current Feature</th>
                <th class="py-3 px-6 text-left">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @forelse ($plan->features as $feature)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $loop->iteration }}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $feature->name }}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <form action="{{ route('subscription-plan.delete-feature', [$plan->id, $feature->id]) }}"
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
                    <td colspan="3" class="py-3 px-6 text-left whitespace-nowrap">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if (!($plan->features->count() >= 3))
        <div class="mt-8">
            <form action="{{ route('subscription-plan.store-features', $plan->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" autocomplete="off"
                        class="mt-1 focus:ring-blue-500 py-2 px-3 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Feature Name">
                </div>

                <div class="mt-4">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add
                        Features</button>
                </div>
            </form>
        </div>
    @endif
@endsection
