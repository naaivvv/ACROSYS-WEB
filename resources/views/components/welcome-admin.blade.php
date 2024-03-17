@props(['totalOrganizers'])
@props(['totalClients'])
@props(['totalEvents'])
@props(['totalTicketsManaged'])
<div class="flex flex-wrap p-6 lg:p-8 w-full">
    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 p-2">
        <div class="bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg min-h-[10rem] max-h-[10rem]"><x-card-clients :totalClients="$totalClients" /></div>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 p-2">
        <div class="bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg min-h-[10rem] max-h-[10rem]"><x-card-organizers :totalOrganizers="$totalOrganizers" /></div>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 p-2">
        <div class="bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg min-h-[10rem] max-h-[10rem]"><x-card-events :totalEvents="$totalEvents" /></div>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 p-2">
        <div class="bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg min-h-[10rem] max-h-[10rem]"><x-card-tickets :totalTicketsManaged="$totalTicketsManaged" /></div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/2 p-2 min-h-[40rem] flex flex-col">
        <div class="bg-white border-b border-gray-200 p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg flex justify-center min-h-[24.5rem]">
            <x-area-chart-users />
        </div>
        <div class="bg-white border-b border-gray-200 p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg flex justify-center min-h-[24.5rem] mt-4">
            <x-bar-chart-tickets />
        </div>

    </div>
    <div class="w-full md:w-1/2 lg:w-1/2 p-2">
        <div class="bg-white border-b border-gray-200 p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg min-h-[78.5rem] max-h-[78rem]"><x-notifications-dashboard /></div>
    </div>

</div>
