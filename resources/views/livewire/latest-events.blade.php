<div class="w-full h-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Events</h5>
        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
            View all
        </a>
   </div>
    <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($events as $event)
                <li class="pt-3 pb-0 sm:pt-4">
                    <div class="flex items-center ">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8" src="{{asset('/logo/event-icon.png')}}" alt="{{ $event->name }} image">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{ $event->name }}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{ $event->description }}
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{ $event->event_code }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
