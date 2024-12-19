<html>
<head>
    <title>
        title
    </title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/bootstrap/css/bootstrap.css', 'resources/bootstrap/js/bootstrap.js'])
    @endif

</head>
<body>
<div class="d-flex" style="height: 100vh">
    <x-sidebar></x-sidebar>
</div>

</body>
</html>
