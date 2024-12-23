<!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/bootstrap/css/bootstrap.css', 'resources/bootstrap/js/bootstrap.js'])
@endif

<x-layout image="/images/Nami.jpg" color="{{ $game->color }}">
{{--<x-layout image="{{ $game->cover_image }}">--}}
    @auth
    {{-- @dd(auth()->user()->is_admin); --}}
        @if(auth()->user()->is_admin || auth()->user()->is_contributor)
            <div class="mb-4">
            <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Update</a>
            <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
            </div>
        @endif
    @endauth
    <div class="container">
        <h1>{{ $game->title }}</h1>
        <div class="card mb-4 backdrop-blur-sm bg-transparent text-white">
            {{--         <img src="{{ $game->cover_image }}" class="card-img-top" alt="{{ $game->title }}">--}}
            <div class="card-body">
                <h5 class="card-title">{{ $game->title }}</h5>
                <p class="card-text">{{ $game->description }}</p>
                <p class="card-text"><strong>Price:</strong> ${{ $game->price }}</p>
                <p class="card-text"><strong>Rating:</strong> {{ $game->rating }}/5</p>
                <p class="card-text"><strong>Release Date:</strong> {{ $game->release_date }}</p>
                <a href="{{ $game->epic_link }}" class="btn btn-primary">Epic Store</a>
                <a href="{{ $game->steam_link }}" class="btn btn-secondary">Steam</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</x-layout>


