@if (session('message'))
    <div id="alert" class="alert p-4 mb-4 text-sm rounded-lg {{ session('alert-class') }} relative">
        {{ session('message') }}
        <span class="absolute top-0 right-0 p-4 cursor-pointer text-xl" onclick="this.parentElement.style.display='none';">×</span>
    </div>
@endif
@if(session('success'))
<div class=" relative flex items-center p-4 mb-4 text-sm text-green-800 border border-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
    <div>
        {{ session('success') }}
    </div>
    <span class="absolute top-0 right-0 p-4 cursor-pointer text-xl" onclick="this.parentElement.style.display='none';">×</span>
</div>
@endif

@if(session('error'))
<div class="relative flex items-center p-4 mb-4 text-sm text-red-800 border border-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
    <div>
        {{ session('error') }}
    </div>
    <span class="absolute top-0 right-0 p-4 cursor-pointer text-xl" onclick="this.parentElement.style.display='none';">×</span>
</div>
@endif
