@extends('backsite.layouts.app')

@section('title', 'Users')

@section('content')
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-gray-800">Users</h2>
        <a href="{{ route('users.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
            User</a>
    </div>

    <nav class="flex mb-4 py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-gray-800 inline-flex text-sm items-center">
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
                    <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Users</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="mt-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Username</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Role</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-left">Created At</th>
                    <th class="py-3 px-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($users as $user)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $user->name }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $user->email }}</td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <select class="role-select border p-1" data-user-id="{{ $user->id }}">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                        {{ ucfirst($role->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td></td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $user->created_at->diffForHumans() }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $users->links('backsite.layouts.partials.pagination') }}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.role-select').change(function() {
                let userId = $(this).data('user-id');
                let selectedRole = $(this).val();

                $.ajax({
                    url: "{{ route('updateRole') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        user_id: userId,
                        role: selectedRole,
                    },
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(xhr) {
                        alert('Something went wrong: ' + xhr.responseJSON.message);
                    }
                });
            });
        });
    </script>
@endsection
