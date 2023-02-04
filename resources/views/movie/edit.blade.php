@extends('layouts.app')
<div class="container">
    <form  action="{{ route('movie.update',$movie->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $movie->name }}" required>
            <label for="catId">categories</label>
            <select class="form-select" aria-label="Default select example" name="catId">
                @foreach ($categories as $category)
                <option  value={{$category->id}} @if($category->id == $movie->catId) selected @endif>{{$category->name}}</option>
                @endforeach
              </select>
            <label for="trailer">trailer</label>
            <input type="text" name="trailer" value="{{ $movie->trailer }}">
            <label for="image" >image</label>
            <input type="file" name="image" >
        <button type="submit" class="btn btn-primary">Add movie</button>
    </form>
</div>