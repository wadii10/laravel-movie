@extends('layoutsfront.template')
@section('movieShow')
    <div class="movie-trailer">

        <div class="card" style="width: 50rem">
            <div class="card-body">
                <h4 class="card-title" style="color: black">{{ $movie->name }}</h4>
                <iframe class="card-img-top" width="1350" height="480" src={{ $movie->trailer }} frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen> </iframe>
            </div>
        </div>

    </div>
@endsection
