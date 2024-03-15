<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <div class="bg-orange-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8"">
        <div class="flex items-center">
            <h1 class="mt-8 text-2xl font-medium text-gray-900 text-center">
                Welcome to your Jetstream application!
                {!! $chart->container() !!}

                <script src="{{ $chart->cdn() }}"></script>

                {{ $chart->script() }}
            </h1>
        </div>
        <div class="flex items-center">
            <h1 class="mt-8 text-2xl font-medium text-gray-900 text-center">
                Welcome to your Jetstream application!
            </h1>
        </div>
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">

        </div>
    </div>

    <div>
        <div class="flex items-center">

        </div>
    </div>

    <div>
        <div class="flex items-center">

        </div>
    </div>
    <div>
        <div class="flex items-center">

        </div>

    </div>
</div>
