@extends('backsite.layouts.app')

@section('title', 'Create Subscription Plan')

@section('content')
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-gray-800">Create Subscription Plan</h2>
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
            <li>Create</li>
        </ol>
    </nav>

    <div class="mt-8">

        <form action="{{ route('subscription-plan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="name_plan" class="block text-sm font-medium text-gray-700">Name Plan</label>
                    <input type="text" name="name_plan" id="name_plan" autocomplete="off"
                        class="mt-1 focus:ring-blue-500 py-2 px-3 @error('name_plan') border-red-500 @enderror focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Basic">

                    @error('name_plan')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" autocomplete="off"
                        class="mt-1 focus:ring-blue-500 py-2 px-3 focus:border-blue-500 block w-full @error('description') border-red-500 @enderror shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Description"></textarea>

                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="price"
                        class="block text-sm font-medium text-gray-700 @error('price') text-red-500 @enderror">Price</label>
                    <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        name="price" id="price" autocomplete="off" value="0"
                        class="mt-1 focus:ring-blue-500 py-2 px-3 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="100000">

                    @error('price')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="duration"
                        class="block text-sm font-medium text-gray-700 @error('duration') text-red-500 @enderror">Duration</label>
                    <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        name="duration" id="duration" autocomplete="off"
                        class="mt-1 focus:ring-blue-500 py-2 px-3 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="30">

                    @error('duration')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="icon"
                        class="block text-sm font-medium text-gray-700 @error('icon') border-red-500 @enderror">Icon</label>
                    <input type="file" name="icon" id="icon" autocomplete="off"
                        class="mt-1 focus:ring-blue-500 focus:border-blue-500 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                    @error('icon')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="isBest" class="block text-sm font-medium text-gray-700">Is Best Plan</label>
                    <select name="isBest" id="isBest"
                        class="mt-1 focus:ring-blue-500 p-2 focus:border-blue-500 block w-full @error('name_plan') border-red-500 @enderror shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>

                    @error('isBest')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
                    Plan</button>
            </div>
        </form>
    </div>
@endsection
