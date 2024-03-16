<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <div class="py-8 flex items-center ">
        <div class="max-w-8xl mx-auto flex gap-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <livewire:user-table />
            </div>
        </div>
    </div>
</x-app-layout>
