@extends('backsite.layouts.app')

@section('title', 'Create Role')

@section('content')
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-gray-800">Create Role</h2>
        <a href="{{ route('roles.index') }}"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
    </div>

    <nav class="text-gray-500 text-sm my-4 mb-6" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="{{ route('roles.index') }}" class="text-blue-500 hover:text-blue-700">Roles</a>
                <svg class="fill-current w-3 h-3 mx-3" viewBox="0 0 24 24">
                    <path d="M9 18l6-6-6-6"></path>
                </svg>
            </li>
            <li>Create</li>
        </ol>
    </nav>

    <div class="mt-4">
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div class="grid grid-cols gap-3">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name Role</label>
                    <input type="text" name="name" id="name" autocomplete="off"
                        class="mt-1 focus:ring-blue-500 py-2 px-3 @error('name') border-red-500 @enderror focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Admin">

                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid grid-cols-1 gap-3">
                    <label for="guard_name" class="block text-sm font-medium text-gray-700">Guard Name</label>
                    <select name="guard_name" id="guard_name"
                        class="mt-1 focus:ring-blue-500 py-2 @error('name') border-red-500 @enderror px-3 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <option value="web">Web</option>
                        <option value="api">Api</option>
                    </select>
                    @error('guard_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <label class="block">
                        <span class="text-gray-700">Permissions</span>
                        <div class="mt-2 grid grid-cols-1 gap-6">
                            @forelse ($permissions as $permission)
                                <label class="flex items
                                -center">
                                    <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                        class="form-checkbox h-5 w-5 text-blue-600"><span
                                        class="ml-2 text-gray-700">{{ $permission->name }}</span>
                                </label>
                            @empty
                                <span class="text-red-500 text-sm">No permission found</span>
                            @endforelse
                        </div>
                    </label>
                </div>
                <div class="grid grid-cols-1 gap-6">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
                        Role</button>
                </div>
            </div>
        </form>
    </div>
@endsection
