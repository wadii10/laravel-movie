@extends('layoutsfront.template')
@section('movieShow')
<div class="movie-trailer">
    {{ $movie->name }}
    <iframe width="1350" height="480" src={{$movie->trailer}}
        title="JenJoon ft 4LFA - Shweraa Tafia | شوارع طافية (Prod. Ratchopper)" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen> </iframe>
</div>
@endsection