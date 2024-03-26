{{-- <a href="#" class="block max-w-full max-h-full p-12 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$totalTicketsManagedForOrg}}</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Total Tickets Reserved</p>
    </a> --}}

<a href="#" class="block max-w-full max-h-full py-8 px-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24" style="margin-bottom: 6px">
        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z"
        fill="#c2410c"/>
    </svg>
    <div>
        <h5 class="mb-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$totalTicketsManagedForOrg}}</h5>
    </div>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Total Tickets Reserved</p>
</a>
