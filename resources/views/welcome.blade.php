<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACROSYS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-black">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    <!-- Logo Icon -->
    <div class="absolute top-0 left-0 p-6 z-10">
        <img src="{{ asset('images/orange.png') }}" alt="Logo" class="h-10 w-auto">
    </div>
    <!-- End Logo Icon -->

    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-slate-50 hover:text-orange-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-orange-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-orange-500 hover:text-slate-50 focus:outline focus:outline-2 focus:rounded-sm focus:outline-orange-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-orange-500 hover:text-slate-50 focus:outline focus:outline-2 focus:rounded-sm focus:outline-orange-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <!-- Background Image -->
    <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center" style="background-image: url('{{asset('images/crowd.jpg');}}');">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Overlay to darken the image, adjust opacity as needed -->
    </div>
    <!-- End Background Image -->

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
            <!-- Announcement Banner -->
            <div class="flex justify-center">
            </div>
            <!-- End Announcement Banner -->

            <!-- Title -->
            <div class="mt-5 max-w-xl text-center mx-auto">
                <h1 class="block font-bold text-slate-50 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
                    Elevate your Event with ACROSYS
                </h1>
            </div>
            <!-- End Title -->

            <div class="mt-5 max-w-3xl text-center mx-auto">
                <p class="text-lg text-orange-500 dark:text-gray-400">ACROSYS is an event management software that ensures smooth event queuing.</p>
            </div>

            <!-- Buttons -->
            <div class="mt-8 gap-3 flex justify-center">
                <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-orange-500 to-orange-500
                hover:from-orange-600 hover:to-orange-600 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 focus:ring-offset-white py-3 px-4 dark:focus:ring-offset-gray-800" href="#masonry-cards">
                    <script src="https://kit.fontawesome.com/c90d2b0cc8.js" crossorigin="anonymous"></script><i class="fa-solid fa-right-to-bracket"></i>
                    Learn more
                </a>
            </div>
            <!-- End Buttons -->
        </div>
    </div>
    <!-- End Hero -->
</div>
<!-- Masonry Cards -->
<div id="masonry-cards" class="bg-black max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-2 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-12 gap-6">
    <div class="sm:self-end col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-5 lg:col-start-3">
      <!-- Card -->
      <a class="group relative block rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#more">
        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
          <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
        </div>
        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
          <div class="text-sm font-bold text-gray-50 rounded-lg bg-orange p-4 md:text-xl dark:bg-gray-800 dark:text-gray-200">
            Ease of Use
          </div>
        </div>
      </a>
      <!-- End Card -->
    </div>
    <!-- End Col -->

    <div class="sm:self-end col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-3">
      <!-- Card -->
      <a class="group relative block rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#more">
        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
          <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="https://images.unsplash.com/photo-1622782914767-404fb9ab3f57?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
        </div>
        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
          <div class="text-sm font-bold text-gray-50 rounded-lg p-4 md:text-xl dark:bg-gray-800 dark:text-gray-200">
            Real Time Statistics
          </div>
        </div>
      </a>
      <!-- End Card -->
    </div>
    <!-- End Col -->

    <div class="col-span-12 md:col-span-4">
      <!-- Card -->
      <a class="group relative block rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#more">
        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
          <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="https://images.unsplash.com/photo-1633158829585-23ba8f7c8caf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
        </div>
        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
          <div class="text-sm font-bold text-gray-50 rounded-lg bg-orange p-4 md:text-xl dark:bg-gray-800 dark:text-gray-200">
            Cost-Efficient
          </div>
        </div>
      </a>
      <!-- End Card -->
    </div>
    <!-- End Col -->

    <div class="col-span-12 sm:col-span-6 md:col-span-4">
      <!-- Card -->
      <a class="group relative block rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#more">
        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
          <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="https://images.unsplash.com/photo-1634224143538-ce0221abf732?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
        </div>
        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
          <div class="text-sm font-bold text-gray-50 rounded-lg bg-orange  p-4 md:text-xl dark:bg-gray-800 dark:text-gray-200">
            Secure
          </div>
        </div>
      </a>
      <!-- End Card -->
    </div>
    <!-- End Col -->

    <div class="col-span-12 sm:col-span-6 md:col-span-4">
      <!-- Card -->
      <a class="group relative block rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#more">
        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
          <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="https://images.unsplash.com/photo-1519248200454-8f2590ed22b7?q=80&w=2075&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
        </div>
        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
          <div class="text-sm font-bold text-gray-50 rounded-lg bg-orange p-4 md:text-xl dark:bg-gray-800 dark:text-gray-200">
            Time-Saver
          </div>
        </div>
      </a>
      <!-- End Card -->
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Masonry Cards -->
<!-- Features -->
<div id="more" class="bg-black sm:py-14 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="aspect-w-16 aspect-h-2">

  </div>

  <!-- Grid -->
  <div class="mt-1 lg:mt-1 grid lg:grid-cols-3 gap-8 lg:gap-12">
    <div class="lg:col-span-1">
      <h2 class="font-bold text-2xl md:text-3xl text-orange-500 dark:text-gray-200">
        Making Event manangement a whole lot easier!
      </h2>
      <p class="mt-2 md:mt-4 text-orange-600">
        As the human population grows, the constant need for interaction grew too, thus, increasing the demand for organized events annually. However, arranging such gatherings was proved to be challenging especially if the attendees, or crowd in general, are too immense to handle
      </p>
    </div>
    <!-- End Col -->

    <div class="lg:col-span-2">
      <div class="grid sm:grid-cols-2 gap-8 md:gap-12">
        <!-- Icon Block -->
        <div class="flex gap-x-5">
          <svg class="flex-shrink-0 mt-1 size-6 text-orange-500 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="10" x="3" y="11" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" x2="8" y1="16" y2="16"/><line x1="16" x2="16" y1="16" y2="16"/></svg>
          <div class="grow">
            <h3 class="text-lg font-semibold text-orange-500 dark:text-white">
              Versitile
            </h3>
            <p class="mt-1 text-gray-300 dark:text-gray-400">
              Our System can align with your requirements needs for various types of Events!
            </p>
          </div>
        </div>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <div class="flex gap-x-5">
          <svg class="flex-shrink-0 mt-1 size-6 text-orange-500 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"/></svg>
          <div class="grow">
            <h3 class="text-lg font-semibold text-orange-500 dark:text-white">
              Cost-Friendly
            </h3>
            <p class="mt-1  text-gray-300 dark:text-gray-400">
              Reduces the cost of overall event handling by reducing registration wastes such as registration forms
            </p>
          </div>
        </div>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <div class="flex gap-x-5">
          <svg class="flex-shrink-0 mt-1 size-6 text-orange-500 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          <div class="grow">
            <h3 class="text-lg font-semibold  text-orange-500 dark:text-white">
              User-Friendly Interface
            </h3>
            <p class="mt-1  text-gray-300 dark:text-gray-400">
              Allows almost anyone to use and utilize our system without the need of professional training
            </p>
          </div>
        </div>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <div class="flex gap-x-5">
          <svg class="flex-shrink-0 mt-1 size-6 text-orange-500 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          <div class="grow">
            <h3 class="text-lg font-semibold text-orange-500 dark:text-white">
              Flexible Database
            </h3>
            <p class="mt-1  text-gray-300 dark:text-gray-400">
              Can accomodate various amount of attendees based on venue and type of gathering
            </p>
          </div>
        </div>
        <!-- End Icon Block -->
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Features -->
<div class="py-20">
</div>

<!-- Features -->
<div class=" max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="min-h-[35vh] bg-center bg-cover bg-no-repeat relative rounded-xl md:min-h-[75vh]" style="background-image: url({{ asset('images/group.jpg') }});">
    <div class="absolute bottom-0 start-0 end-0 max-w-xs text-center mx-auto p-6 md:start-auto md:text-start md:mx-0">
      <!-- Card -->
      <div class="px-2 py-2 inline-block bg-white rounded-lg md:p-7 dark:bg-gray-800">
        <div class="hidden md:block">
          <h3 class="text-lg font-bold text-orange-500 sm:text-1xl dark:text-gray-200">About the Creators</h3>
          <p class="mt-2 text-gray-800 dark:text-gray-200">A Five piece team composed of a circle of friends, teams up to create this collaboration project</p>
        </div>

        
      </div>
      <!-- End Card -->
    </div>
  </div>
</div>
<!-- End Features -->


<!-- Team -->
<div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-2 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-gray-50 dark:text-white">ACROSYS TEAM</h2>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 md:gap-12">
    <div class="text-center">
      <img class="rounded-full size-24 mx-auto" src="{{ asset('images/hans.jpg') }}">
      <div class="mt-2 sm:mt-4">
        <h3 class="font-medium text-gray-50 dark:text-gray-200">
          Hans Laurence Ambong
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">
       
        </p>
      </div>
    </div>
    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-full size-24 mx-auto" src="{{ asset('images/edwin.jpg') }}">
      <div class="mt-2 sm:mt-4">
        <h3 class="font-medium text-gray-50 dark:text-gray-200">
          Edwin Bayog
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">
          
        </p>
      </div>
    </div>
    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-full size-24 mx-auto" src="{{ asset('images/karyle.jpg') }}">
      <div class="mt-2 sm:mt-4">
        <h3 class="font-medium text-gray-50 dark:text-gray-200">
          Karlryle Jhen Betita
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">
        
        </p>
      </div>
    </div>
    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-full size-24 mx-auto" src="{{ asset('images/giezhia.jpg') }}">
      <div class="mt-2 sm:mt-4">
        <h3 class="font-medium text-gray-50 dark:text-gray-200">
          Giehiza Diaz
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">
         
        </p>
      </div>
    </div>
    <!-- End Col -->

    <div class="text-center">
      <img class="rounded-full size-24 mx-auto" src="{{ asset('images/angel.png') }}">
      <div class="mt-2 sm:mt-4">
        <h3 class="font-medium text-gray-50 dark:text-gray-200">
          Angel Lee Sotes
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">
        
        </p>
      </div>
    </div>
    <!-- End Col -->

</div>
<!-- End Team -->
<div class="py-20">
</div>

<!-- FAQ -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-3xl md:leading-tight text-gray-100 dark:text-gray-200">
      Frequently Asked Questions
    </h2>
  </div>
  <!-- End Title -->

  <div class="max-w-5xl mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 gap-6 md:gap-12">
      <div>
        <h3 class="text-lg font-semibold text-orange-500 dark:text-gray-200">
          What does ACROSYS mean? 
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-400">
          Acrosys is an abrevation for Attendee and Crowd Sync System which is A Cost Efficient Event Management Software
        </p>
      </div>
      <!-- End Col -->

      <div>
        <h3 class="text-lg font-semibold text-orange-500 dark:text-gray-200">
          Who can Use ACROSYS?
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-400">
          Our system is a versatile tool for event organizer and also becomes the platform for end-user information and reservation
        </p>
      </div>
      <!-- End Col -->

      <div>
        <h3 class="text-lg font-semibold text-orange-500 dark:text-gray-200">
          What is the impact of ACROSYS in my Event?
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-400">
          Our system will ease the burden of staffs’ crowd control and crowd security responsibilities and
          expedite lengthy processes that will usually cause annoyance to attendees.
          
        </p>
      </div>
      <!-- End Col -->

      <div>
        <h3 class="text-lg font-semibold  text-orange-500 dark:text-gray-200">
          How to start using ACROSYS?
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-400">
          Register by providing your email and general information and link your email to complete registration
        </p>
      </div>
      <!-- End Col -->

      <div>
        <h3 class="text-lg font-semibold  text-orange-500 dark:text-gray-200">
          How does it work?
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-400">
          ACROSYS can regulate and manange attendees using its system allowing both attendees and organizer to share a common system which elevates any events than traditional options
        </p>
      </div>
      <!-- End Col -->

      <div>
        <h3 class="text-lg font-semibold  text-orange-500 dark:text-gray-200">
          What devices can use ACROSYS?
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-400">
          ACROSYS is compatable with devices that can run internet browser and can surf the internet thru cellular or data connection
        </p>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
<!-- End FAQ -->






<footer class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <!-- Grid -->
  <div class="text-center">
    <div>
      <a class="flex-none text-xl font-semibold text-black dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#" aria-label="Brand">Brand</a>
    </div>
    
    <!-- End Col -->

    <div class="mt-3">
      <p class="text-gray-500">Project created in fulfilment of  COMP232 & CPE222</p>
      <p class="text-gray-500">© ACROSYS 2024. All rights reserved.</p>
    </div>

    <!-- Social Brands -->
    <div class="mt-3 space-x-2">
      <a class="inline-flex justify-center items-center size-10 text-center text-gray-500 hover:bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800" href="#">
        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
        </svg>
      </a>
      <a class="inline-flex justify-center items-center size-10 text-center text-gray-500 hover:bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800" href="#">
        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg>
      </a>
      <a class="inline-flex justify-center items-center size-10 text-center text-gray-500 hover:bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800" href="#">
        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg>
      </a>
      <a class="inline-flex justify-center items-center size-10 text-center text-gray-500 hover:bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800" href="#">
        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
        </svg>
      </a>
    </div>
    <!-- End Social Brands -->
  </div>
  <!-- End Grid -->
</footer>
</body>
</html>
