<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-2">
                Selamat datang, {{ Auth::user()->name }}
            </h2>
            <p class="text-lg">
                Role Anda adalah: <strong>{{ Auth::user()->role }}</strong>
            </p>
        </div>
    </div>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Kamu sudah login!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
