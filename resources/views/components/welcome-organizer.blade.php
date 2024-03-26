@props(['totalAttendeesForOrg'])
@props(['totalEventsForOrg'])
@props(['totalTicketsManagedForOrg'])
@props(['attendeesThisMonthForOrg'])
<div class="flex flex-wrap p-6 lg:p-8 w-full">
    <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 p-2">
        <div class="bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg min-h-[10rem] max-h-[10rem]">
            <x-card-attendees-for-org :totalAttendeesForOrg="$totalAttendeesForOrg" />
        </div>
    </div>
    {{-- <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-2">
        <div class="bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg min-h-[10rem] max-h-[10rem]">
            <x-card-organizers :totalOrganizers="$totalOrganizers" />
        </div>
    </div> --}}
    <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 p-2">
        <div class="bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg min-h-[10rem] max-h-[10rem]">
            <x-card-events-for-org :totalEventsForOrg="$totalEventsForOrg" />
        </div>
    </div>
    <div class="w-full sm:w-1/3 md:w-1/3 lg:w-1/3 p-2">
        <div class="bg-white border-b border-gray-200 overflow-hidden shadow-xl sm:rounded-lg min-h-[10rem] max-h-[10rem]">
            <x-card-tickets-for-org :totalTicketsManagedForOrg="$totalTicketsManagedForOrg" />
        </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/2 p-2 min-h-[40rem] flex flex-col">
        <div class="bg-white border-b border-gray-200 p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg flex justify-center min-h-[24.5rem]">
            <x-area-chart-attendees :attendeesThisMonthForOrg="$attendeesThisMonthForOrg"/>
        </div>
        <div class="bg-white border-b border-gray-200 p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg flex justify-center min-h-[24.5rem] mt-4">
            <x-bar-chart-tickets-for-org />
        </div>

    </div>
    <div class="w-full md:w-1/2 lg:w-1/2 p-2">
        <div class="bg-white border-b border-gray-200 p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg min-h-[78.5rem] max-h-[78rem]">
            <livewire:events-managed-organizer />
        </div>
    </div>

</div>
