@extends('backsite.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex flex-row flex-wrap">
        <div class="w-full">
            <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
        </div>

        <div class="w-full mt-6">
            @if (session('success'))
                <div class="alert alert-default mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800">Welcome to KanbanVerse</h2>
                <p class="text-gray-600 mt-2">KanbanVerse is a solution management project that helps you to manage your
                    team's productivity with Kanban, the ultimate visual tool for organizing tasks and streamlining
                    workflows.</p>
            </div>
        </div>
    </div>
@endsection
