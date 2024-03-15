<div>
    @json($attributes->getAttributes())

    <img src="{{ $attributes->get('src') }}" alt="{{ $attributes->get('alt') }}" {{ $attributes->except(['src', 'alt']) }} class="h-10 w-10 rounded-full" />
</div>
