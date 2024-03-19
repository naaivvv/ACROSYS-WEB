<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Admin Dashboard') }}
                </h2>
            </div>
            <div>
                <div class="col-span-6 sm:col-span-4">
                    <x-input id="date" type="date" class="mt-1 block w-full" required autocomplete="date" :currentDate="$currentDate" :value="$currentDate" aria-disabled="true" />
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8 flex items-center">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 flex gap-2 w-full">
            <div class="overflow-hidden">
                <x-welcome-admin
                    :totalOrganizers="$totalOrganizers"
                    :totalClients="$totalClients"
                    :totalEvents="$totalEvents"
                    :totalTicketsManaged="$totalTicketsManaged"
                    :usersThisMonth="$usersThisMonth"
                />
            </div>
        </div>
    </div>
</x-app-layout>
