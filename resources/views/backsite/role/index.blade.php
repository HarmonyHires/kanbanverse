@extends('backsite.layouts.app')

@section('title', 'Roles & Permission')

@section('content')
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
                    <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Roles &
                        Permission</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="flex gap-3">

        <div class="w-2/3 shadow-sm bg-white rounded-lg">
            <div class="flex justify-between p-4 rounded-t-lg items-center">
                <h2 class="text-2xl font-semibold">Roles</h2>
                <a href="{{ route('roles.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
                    Role</a>
            </div>
            <div class="p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">#</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Guard Name</th>
                                <th class="py-3 px-6 text-left">Permission</th>
                                <th class="py-3 px-6 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @forelse ($roles as $role)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $loop->iteration }}</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $role->name }}</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $role->guard_name }}</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        @foreach ($role->permissions as $permission)
                                            <span
                                                class="bg-gray-200 text-gray-600 rounded-full px-2 py-1 text-xs font-bold">{{ $permission->name }}</span>
                                        @endforeach
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
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
                </div>
            </div>
        </div>

        <div class="w-1/3 shadow-sm bg-white rounded-lg">
            <div class="flex justify-between p-4 rounded-t-lg items-center">
                <h2 class="text-2xl font-semibold">Permission</h2>
                <a href="{{ route('permissions.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
                    Permission</a>
            </div>
            <div class="p-4">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Guard Name</th>
                                <th class="py-3 px-6 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @forelse ($permissions as $permission)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $permission->name }}</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $permission->guard_name }}</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
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
                </div>
            </div>
        </div>
    </div>
@endsection
