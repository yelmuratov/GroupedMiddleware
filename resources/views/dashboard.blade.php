<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <h1>{{$userId}}</h1>
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <a href="{{ route('admin.dashboard') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-center">Admin Dashboard</a>
                <a href="{{ route('editor.dashboard') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 text-center">Editor Dashboard</a>
                <a href="{{ route('author.dashboard') }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 text-center">Author Dashboard</a>
                <a href="{{ route('contributor.dashboard') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 text-center">Contributor Dashboard</a>
                <a href="{{ route('subscriber.dashboard') }}" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 text-center">Subscriber Dashboard</a>
                <a href="{{ route('user.dashboard') }}" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 text-center">User Dashboard</a>
            </div>
        </div>
    </div>
</x-app-layout>
