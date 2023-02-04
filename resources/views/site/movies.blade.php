@extends('layoutsfront.template')
@section('movieByCat')
@forelse ($movies as $movie)
<div class="card" style="width:18rem">
    <img src={{ asset('images/'.$movie->image) }} class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$movie->name}}</h5>
      <a href="{{ route('movie.show',$movie->id) }} " class="btn btn-primary">See trailer</a>
    </div>
  </div>
  @empty
  <p style="color: wheat">No Movies</p>
  @endforelse
  @endsection