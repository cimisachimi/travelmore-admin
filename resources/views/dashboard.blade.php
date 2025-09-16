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
                    {{ __("Selamat datang kembali, ") }} {{ Auth::user()->name }}!
                </div>
            </div>

            {{-- Bagian Statistik --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                @foreach ($stats as $stat)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400">
                                {{ $stat['label'] }}
                            </h3>
                            <p class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">
                                {{ $stat['value'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>