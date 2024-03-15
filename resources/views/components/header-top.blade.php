@if (session('message'))
    <div id="alert" class="alert p-4 mb-4 text-sm rounded-lg {{ session('alert-class') }} relative">
        {{ session('message') }}
        <span class="absolute top-0 right-0 p-4 cursor-pointer text-xl" onclick="this.parentElement.style.display='none';">×</span>
    </div>
@endif
