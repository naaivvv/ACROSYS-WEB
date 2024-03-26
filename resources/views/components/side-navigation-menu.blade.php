<div class="hidden md:block lg:block sticky top-0">
    <div class="flex flex-col pt-12">
        <div class="shrink-0 p-6 flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-application-mark class="block h-9 w-auto" />
            </a>
        </div>
        <!-- Navigation Links -->
        <div class="py-6 lg:y-8 overflow-y-auto w-full">
            <x-s-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 10.0005H7.082C6.66587 9.99708 6.26541 10.1591 5.96873 10.4509C5.67204 10.7427 5.50343 11.1404 5.5 11.5565V17.4455C5.5077 18.3117 6.21584 19.0078 7.082 19.0005H9.918C10.3341 19.004 10.7346 18.842 11.0313 18.5502C11.328 18.2584 11.4966 17.8607 11.5 17.4445V11.5565C11.4966 11.1404 11.328 10.7427 11.0313 10.4509C10.7346 10.1591 10.3341 9.99708 9.918 10.0005Z" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 4.0006H7.082C6.23326 3.97706 5.52559 4.64492 5.5 5.4936V6.5076C5.52559 7.35629 6.23326 8.02415 7.082 8.0006H9.918C10.7667 8.02415 11.4744 7.35629 11.5 6.5076V5.4936C11.4744 4.64492 10.7667 3.97706 9.918 4.0006Z" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 13.0007H17.917C18.3333 13.0044 18.734 12.8425 19.0309 12.5507C19.3278 12.2588 19.4966 11.861 19.5 11.4447V5.55666C19.4966 5.14054 19.328 4.74282 19.0313 4.45101C18.7346 4.1592 18.3341 3.9972 17.918 4.00066H15.082C14.6659 3.9972 14.2654 4.1592 13.9687 4.45101C13.672 4.74282 13.5034 5.14054 13.5 5.55666V11.4447C13.5034 11.8608 13.672 12.2585 13.9687 12.5503C14.2654 12.8421 14.6659 13.0041 15.082 13.0007Z" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 19.0006H17.917C18.7661 19.0247 19.4744 18.3567 19.5 17.5076V16.4936C19.4744 15.6449 18.7667 14.9771 17.918 15.0006H15.082C14.2333 14.9771 13.5256 15.6449 13.5 16.4936V17.5066C13.525 18.3557 14.2329 19.0241 15.082 19.0006Z" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                {{ __('Dashboard') }}
                </div>
            </x-s-nav-link>
            @if(Auth::check() && Auth::user()->role == 0)
            <x-s-nav-link href="{{ route('client.events') }}" :active="request()->routeIs('client.events')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="5" y="5" width="14" height="14" rx="3" stroke="#111827" stroke-width="2"></rect> <path d="M6 10H18" stroke="#111827" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                    </div>
                {{ __('Events') }}
                </div>
            </x-s-nav-link>
            <x-s-nav-link href="{{ route('client.tickets') }}" :active="request()->routeIs('client.tickets')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path stroke="#111827" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16H8a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h9m0 11h3a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-3m0 11v-1m0-10v1"></path><path stroke="#111827" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 20H4a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h3m6 11h3a1 1 0 0 0 1-1v-2.5M13 20v-1m4-9.999V9m0 3.001V12"></path></g></svg>
                    </div>
                {{ __('Tickets') }}
                </div>
            </x-s-nav-link>
            @endif
            @if(Auth::check() && Auth::user()->role == 1)
            <x-s-nav-link href="{{ route('admin.organizers') }}" :active="request()->routeIs('admin.organizers')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#111827"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 15C10.1183 15 9.28093 14.8098 8.52682 14.4682C8.00429 14.2315 7.74302 14.1131 7.59797 14.0722C7.4472 14.0297 7.35983 14.0143 7.20361 14.0026C7.05331 13.9914 6.94079 14 6.71575 14.0172C6.6237 14.0242 6.5425 14.0341 6.46558 14.048C5.23442 14.2709 4.27087 15.2344 4.04798 16.4656C4 16.7306 4 17.0485 4 17.6841V19.4C4 19.9601 4 20.2401 4.10899 20.454C4.20487 20.6422 4.35785 20.7951 4.54601 20.891C4.75992 21 5.03995 21 5.6 21H8.4M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM12.5898 21L14.6148 20.595C14.7914 20.5597 14.8797 20.542 14.962 20.5097C15.0351 20.4811 15.1045 20.4439 15.1689 20.399C15.2414 20.3484 15.3051 20.2848 15.4324 20.1574L19.5898 16C20.1421 15.4477 20.1421 14.5523 19.5898 14C19.0376 13.4477 18.1421 13.4477 17.5898 14L13.4324 18.1574C13.3051 18.2848 13.2414 18.3484 13.1908 18.421C13.1459 18.4853 13.1088 18.5548 13.0801 18.6279C13.0478 18.7102 13.0302 18.7985 12.9948 18.975L12.5898 21Z" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                {{ __('Organizer') }}
                </div>
            </x-s-nav-link>
            <x-s-nav-link href="{{ route('admin.clients') }}" :active="request()->routeIs('admin.clients')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 21H5.6C5.03995 21 4.75992 21 4.54601 20.891C4.35785 20.7951 4.20487 20.6421 4.10899 20.454C4 20.2401 4 19.96 4 19.4V17.6841C4 17.0484 4 16.7306 4.04798 16.4656C4.27087 15.2344 5.23442 14.2708 6.46558 14.048C6.5425 14.034 6.6237 14.0242 6.71575 14.0171C6.94079 14 7.05331 13.9914 7.20361 14.0026C7.35983 14.0142 7.4472 14.0297 7.59797 14.0722C7.74302 14.1131 8.00429 14.2315 8.52682 14.4682C9.28093 14.8098 10.1183 15 11 15C11.8817 15 12.7191 14.8098 13.4732 14.4682C13.9957 14.2315 14.2569 14.1131 14.4019 14.0722C14.5527 14.0297 14.6399 14.0143 14.7961 14.0026H15M20 18L14 18M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                {{ __('Clients') }}
                </div>
            </x-s-nav-link>
            <x-s-nav-link href="{{ route('admin.events') }}" :active="request()->routeIs('admin.events')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="5" y="5" width="14" height="14" rx="3" stroke="#111827" stroke-width="2"></rect> <path d="M6 10H18" stroke="#111827" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                    </div>
                {{ __('Events') }}
                </div>
            </x-s-nav-link>
            <x-s-nav-link href="{{ route('admin.tickets') }}" :active="request()->routeIs('admin.tickets')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path stroke="#111827" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16H8a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h9m0 11h3a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-3m0 11v-1m0-10v1"></path><path stroke="#111827" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 20H4a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h3m6 11h3a1 1 0 0 0 1-1v-2.5M13 20v-1m4-9.999V9m0 3.001V12"></path></g></svg>
                    </div>
                {{ __('Tickets') }}
                </div>
            </x-s-nav-link>
            <x-s-nav-link href="{{ route('admin.notifications') }}" :active="request()->routeIs('admin.notifications')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.29664 4.72727V5.25342C6.60683 6.35644 4.7276 9.97935 4.79579 13.1192L4.79577 14.8631C3.4188 16.6333 3.49982 19.2727 6.93518 19.2727H9.29664C9.29664 19.996 9.57852 20.6897 10.0803 21.2012C10.582 21.7127 11.2625 22 11.9721 22C12.6817 22 13.3622 21.7127 13.8639 21.2012C14.3656 20.6897 14.6475 19.996 14.6475 19.2727H17.0155C20.4443 19.2727 20.494 16.6278 19.1172 14.8576L19.1555 13.1216C19.2248 9.97811 17.3419 6.35194 14.6475 5.25049V4.72727C14.6475 4.00395 14.3656 3.31026 13.8639 2.7988C13.3622 2.28734 12.6817 2 11.9721 2C11.2625 2 10.582 2.28734 10.0803 2.7988C9.57852 3.31026 9.29664 4.00395 9.29664 4.72727ZM12.8639 4.72727C12.8639 4.72727 12.8633 4.76414 12.8622 4.78246C12.5718 4.74603 12.2759 4.72727 11.9757 4.72727C11.673 4.72727 11.3747 4.74634 11.082 4.78335C11.0808 4.76474 11.0803 4.74603 11.0803 4.72727C11.0803 4.48617 11.1742 4.25494 11.3415 4.08445C11.5087 3.91396 11.7356 3.81818 11.9721 3.81818C12.2086 3.81818 12.4354 3.91396 12.6027 4.08445C12.7699 4.25494 12.8639 4.48617 12.8639 4.72727ZM11.0803 19.2727C11.0803 19.5138 11.1742 19.7451 11.3415 19.9156C11.5087 20.086 11.7356 20.1818 11.9721 20.1818C12.2086 20.1818 12.4354 20.086 12.6027 19.9156C12.7699 19.7451 12.8639 19.5138 12.8639 19.2727H11.0803ZM17.0155 17.4545C17.7774 17.4545 18.1884 16.5435 17.6926 15.9538C17.4516 15.6673 17.3233 15.3028 17.3316 14.9286L17.3723 13.0808C17.4404 9.99416 15.0044 6.54545 11.9757 6.54545C8.94765 6.54545 6.51196 9.99301 6.57898 13.0789L6.61916 14.9289C6.62729 15.303 6.49893 15.6674 6.25806 15.9538C5.76221 16.5435 6.17325 17.4545 6.93518 17.4545H17.0155ZM16.9799 3.20202C17.2945 2.74813 17.9176 2.63524 18.3715 2.94988C19.5192 3.74546 20.8956 5.65348 21.6471 7.9126C21.8214 8.43664 21.5379 9.00279 21.0139 9.17712C20.4898 9.35145 19.9237 9.06795 19.7493 8.5439C19.0892 6.55949 17.9221 5.07189 17.2321 4.59358C16.7782 4.27894 16.6653 3.65592 16.9799 3.20202ZM5.4303 2.94988C5.8842 2.63524 6.50722 2.74813 6.82185 3.20202C7.13649 3.65592 7.0236 4.27894 6.56971 4.59358C5.87969 5.07189 4.71256 6.55949 4.05242 8.5439C3.87809 9.06795 3.31194 9.35145 2.78789 9.17712C2.26384 9.00279 1.98034 8.43664 2.15467 7.9126C2.90619 5.65348 4.2826 3.74546 5.4303 2.94988Z" fill="#111827"></path> </g></svg>
                    </div>
                {{ __('Notifications') }}
                </div>
            </x-s-nav-link>
            @endif
            @if(Auth::check() && Auth::user()->role == 2)
            <x-s-nav-link href="{{ route('organizer.events') }}" :active="request()->routeIs('organizer.events')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="5" y="5" width="14" height="14" rx="3" stroke="#111827" stroke-width="2"></rect> <path d="M6 10H18" stroke="#111827" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                    </div>
                {{ __('Events') }}
                </div>
            </x-s-nav-link>
            <x-s-nav-link href="{{ route('organizer.attendees') }}" :active="request()->routeIs('organizer.attendees')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / Users_Group"> <path id="Vector" d="M17 20C17 18.3431 14.7614 17 12 17C9.23858 17 7 18.3431 7 20M21 17.0004C21 15.7702 19.7659 14.7129 18 14.25M3 17.0004C3 15.7702 4.2341 14.7129 6 14.25M18 10.2361C18.6137 9.68679 19 8.8885 19 8C19 6.34315 17.6569 5 16 5C15.2316 5 14.5308 5.28885 14 5.76389M6 10.2361C5.38625 9.68679 5 8.8885 5 8C5 6.34315 6.34315 5 8 5C8.76835 5 9.46924 5.28885 10 5.76389M12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                    </div>
                {{ __('Attendees') }}
                </div>
            </x-s-nav-link>
            <x-s-nav-link href="{{ route('organizer.tickets') }}" :active="request()->routeIs('organizer.ticekts')">
                <div class="flex flex-row items-center">
                    <div class="mr-2">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path stroke="#111827" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16H8a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h9m0 11h3a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-3m0 11v-1m0-10v1"></path><path stroke="#111827" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 20H4a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h3m6 11h3a1 1 0 0 0 1-1v-2.5M13 20v-1m4-9.999V9m0 3.001V12"></path></g></svg>
                    </div>
                {{ __('Tickets') }}
                </div>
            </x-s-nav-link>
            @endif
        </div>
    </div>
</div>
