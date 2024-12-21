@props([
    'image' => ''
])


<html>
<head>
    <title>
        title
    </title>
    {{--    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))--}}
    {{--        @vite(['resources/bootstrap/css/bootstrap.css', 'resources/bootstrap/js/bootstrap.js'])--}}
    {{--    @endif--}}

    {{--    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))--}}
    {{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    {{--    @endif--}}

</head>
<body style='background-image: url("{{ $image }}"); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;'>

<div class="d-flex" style='height: 100vh;'>
    <x-navigation></x-navigation>
    <div class="ml-16">
        {{ $slot }}
    </div>
</div>

</body>
</html>
