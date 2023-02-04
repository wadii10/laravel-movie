@extends('layouts.app')
@forelse ($movies as $movie)
<div class="card" style="width: 18rem;">
    <img src={{ asset('images/'.$movie->image) }} class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$movie->name}}</h5>
      <a href="{{ route('movie.show',$movie->id) }} " class="btn btn-primary">See trailer</a>
      <form action="{{ route('movie.destroy',$movie->id) }}" method="Post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mr-1">Delete</button>
        <a href="{{ route('movie.edit',$movie->id) }} "><button type="button" class="btn btn-primary">update</button></a></td>
    </form>
    </div>
  </div>
  @empty
  <p>No Movies</p>
  @endforelse
