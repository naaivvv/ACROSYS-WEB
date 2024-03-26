<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACROSYS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
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
                hover:from-orange-600 hover:to-orange-600 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 focus:ring-offset-white py-3 px-4 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    <script src="https://kit.fontawesome.com/c90d2b0cc8.js" crossorigin="anonymous"></script><i class="fa-solid fa-right-to-bracket"></i>
                    Learn more
                </a>
            </div>
            <!-- End Buttons -->
        </div>
    </div>
    <!-- End Hero -->
</div>

<!-- Features -->
<div class="bg-black sm:py-14 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="aspect-w-16 aspect-h-7">

  </div>

  <!-- Grid -->
  <div class="mt-5 lg:mt-16 grid lg:grid-cols-3 gap-8 lg:gap-12">
    <div class="lg:col-span-1">
      <h2 class="font-bold text-2xl md:text-3xl text-orange-500 dark:text-gray-200">
        Making Event manangement a whole lot easier!
      </h2>
      <p class="mt-2 md:mt-4 text-orange-600">
        Besides working with start-up enterprises as a partner for digitalization, we have built enterprise products for common pain points that we have encountered in various products and projects.
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
              Creative minds
            </h3>
            <p class="mt-1 text-gray-300 dark:text-gray-400">
              We choose our teams carefully. Our people are the secret to great work.
            </p>
          </div>
        </div>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <div class="flex gap-x-5">
          <svg class="flex-shrink-0 mt-1 size-6 text-orange-500 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"/></svg>
          <div class="grow">
            <h3 class="text-lg font-semibold text-orange-500 dark:text-white">
              Simple and affordable
            </h3>
            <p class="mt-1  text-gray-300 dark:text-gray-400">
              From boarding passes to movie tickets, there's pretty much nothing you can't store with Preline.
            </p>
          </div>
        </div>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <div class="flex gap-x-5">
          <svg class="flex-shrink-0 mt-1 size-6 text-orange-500 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          <div class="grow">
            <h3 class="text-lg font-semibold  text-orange-500 dark:text-white">
              Industry-leading documentation
            </h3>
            <p class="mt-1  text-gray-300 dark:text-gray-400">
              Our documentation and extensive Client libraries contain everything a business needs to build a custom integration.
            </p>
          </div>
        </div>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <div class="flex gap-x-5">
          <svg class="flex-shrink-0 mt-1 size-6 text-orange-500 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          <div class="grow">
            <h3 class="text-lg font-semibold text-orange-500 dark:text-white">
              Designing for people
            </h3>
            <p class="mt-1  text-gray-300 dark:text-gray-400">
              We actively pursue the right balance between functionality and aesthetics, creating delightful experiences.
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
</body>
</html>
