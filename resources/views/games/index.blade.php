@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/bootstrap/css/bootstrap.css', 'resources/bootstrap/js/bootstrap.js'])
@endif


<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <div class="container">
        <h1>Games List</h1>
        <div class="row">
            @foreach($games as $game)
                <div class="col-md-4">
                    <div class="card mb-4">
{{--                        <img src="{{ $game->poster_image }}" class="card-img-top" alt="{{ $game->title }}">--}}
                        <div class="card-body">
                            <a href="{{route('games.show', $game)}}">
                                <h5 class="card-title">{{ $game->title }}</h5>
                            </a>
                            <p class="card-text">{{ $game->description }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $game->price }}</p>
                            <p class="card-text"><strong>Rating:</strong> {{ $game->rating }}/5</p>
                            <a href="{{ $game->epic_link }}" class="btn btn-primary">Epic Store</a>
                            <a href="{{ $game->steam_link }}" class="btn btn-secondary">Steam</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
