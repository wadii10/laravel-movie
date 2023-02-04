@extends('layoutsfront.template')
@section('movie.edit')
<div class="container">
    <form  action="{{ route('movie.update',$movie->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label style="color: wheat" for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $movie->name }}" required>
        </div>
        <div class="mb-2">
            <label style="color: wheat" for="catId" class="form-label">categories</label>
            <select class="form-select" aria-label="Default select example" name="catId">
                @foreach ($categories as $category)
                <option  value={{$category->id}} @if($category->id == $movie->catId) selected @endif>{{$category->name}}</option>
                @endforeach
              </select>
        </div>
        <div class="mb-2">
            <label style="color: wheat" for="trailer" class="form-label">trailer</label>
            <input type="text" name="trailer" value="{{ $movie->trailer }}">
        </div>
        <div class="mb-2">
            <label style="color: wheat" for="image" class="form-label">image</label>
            <input type="file" name="image" >
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection