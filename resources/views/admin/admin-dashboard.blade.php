<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 flex items-center">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 flex gap-2">
            <div class="overflow-hidden">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
