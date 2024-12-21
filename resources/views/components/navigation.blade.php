@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif

@props([
    'color' => '#6B3FA0'
])

<div class="fixed top-0 left-0 h-screen w-16 m-0
            flex flex-col text-white bg-[url('/images/Nami.jpg')]
            bg-cover backdrop-blur-lg">
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

    <img class="self-center pt-3" src="/images/icons/logo.png" alt="" width="60" height="60">

    <div class="flex flex-col justify-center flex-grow">
        <x-navigation-item
            color="{{ $color }}"
            :active="request()->is('games')"
            href="{{ route('games.index') }}"
            image="/images/icons/home.png">
        </x-navigation-item>
        <x-navigation-item
            color="{{ $color }}"
            :active="request()->is('')"
            href="{{ route('games.index') }}"
            image="/images/icons/library.png">
        </x-navigation-item>
        <x-navigation-item
            color="{{ $color }}"
            :active="request()->is('')"
            href="{{ route('games.index') }}"
            image="/images/icons/favorite.png">
        </x-navigation-item>
        <x-navigation-item
            color="{{ $color }}"
            :active="request()->is('')"
            href="{{ route('games.index') }}"
            image="/images/icons/collections.png">
        </x-navigation-item>
        <x-navigation-item
            color="{{ $color }}"
            :active="request()->is('')"
            href="{{ route('games.index') }}"
            image="/images/icons/dashboard.png">
        </x-navigation-item>

    </div>

    <div class="self-center pb-3">
        <a>
            <img src="/images/profile.jpg" alt="" class="rounded-3xl" width="40" height="40">
        </a>
    </div>
</div>
