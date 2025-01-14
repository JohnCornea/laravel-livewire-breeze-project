<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <div x-data="{count: 0}">
                        <button x-on:click="count++" class="bg-blue-500 text-white p-2 rounded">Grow</button>
                        <span x-text="count" class="mt-4 block font-extrabold text-2xl pt-4">0</span>
                    </div> --}}
                    {{-- <livewire:counter/> --}}

                    <livewire:posts></livewire:posts>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
