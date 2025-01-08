@extends('backsite.layouts.app')

@section('title', 'Create Permission')

@section('content')
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-gray-800">Create Permission</h2>
        <a href="{{ route('roles.index') }}"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
    </div>

    <nav class="text-gray-500 text-sm my-4" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="{{ route('roles.index') }}" class="text-blue-500 hover:text-blue-700">Permissions</a>
                <svg class="fill-current w-3 h-3 mx-3" viewBox="0 0 24 24">
                    <path d="M9 18l6-6-6-6"></path>
                </svg>
            </li>
            <li>Create</li>
        </ol>
    </nav>

    <div class="mt-4">
        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div class="grid grid-cols gap-2">
                    <label for="name_plan" class="block text-sm font-medium text-gray-700">Name Permission</label>
                    <input type="text" name="name" id="name_plan" autocomplete="off"
                        class="mt-1 focus:ring-blue-500 py-2 px-3 @error('name') border-red-500 @enderror focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Create User">

                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div class="grid grid-cols gap-2">
                        <label for="guard_name" class="block text-sm font-medium text-gray-700">Guard Name</label>
                        <select name="guard_name" id="guard_name" class="mt-1 focus:ring-blue-500 py-2 px-3 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <option value="web">Web</option>
                            <option value="api">Api</option>
                        </select>
                    </div>
                </div>

                <div class="flex gap-3">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
                        Permission</button>

                    {{-- <a href="{{ route('permissions.storeback') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
                        Permission & Create Another</a> --}}
                </div>
            </div>
        </form>
    </div>
@endsection
