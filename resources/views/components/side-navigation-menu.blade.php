<div class="flex flex-col pt-12 h-screen sticky top-0">
    <div class="shrink-0 p-6 flex items-center">
        <a href="{{ route('dashboard') }}">
            <x-application-mark class="block h-9 w-auto" />
        </a>
    </div
    <!-- Navigation Links -->
    <div class="py-6 lg:y-8 overflow-y-auto w-full">
        <x-s-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-s-nav-link>
        @if(Auth::check() && Auth::user()->role == 1)
        <x-s-nav-link href="{{ route('admin.organizers') }}" :active="request()->routeIs('admin.organizers')">
            {{ __('Organizer') }}
        </x-s-nav-link>
        <x-s-nav-link href="{{ route('admin.clients') }}" :active="request()->routeIs('admin.clients')">
            {{ __('Clients') }}
        </x-s-nav-link>
        <x-s-nav-link href="{{ route('admin.events') }}" :active="request()->routeIs('admin.events')">
            {{ __('Events') }}
        </x-s-nav-link>
        <x-s-nav-link href="{{ route('admin.tickets') }}" :active="request()->routeIs('admin.tickets')">
            {{ __('Tickets') }}
        </x-s-nav-link>
        <x-s-nav-link href="{{ route('admin.notifications') }}" :active="request()->routeIs('admin.notifications')">
            {{ __('Notifications') }}
        </x-s-nav-link>
        @endif
    </div>
</div>
