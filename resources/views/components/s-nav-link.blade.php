@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex flex-col items-start w-full block border-l-4 px-6 py-2 my-4 border-orange-400 text-lg font-medium text-gray-900 focus:outline-none focus:border-orange-700 transition duration-150 ease-in-out'
            : 'flex flex-col items-start w-full block border-l-4 px-6 py-2 my-4 border-transparent text-lg font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
