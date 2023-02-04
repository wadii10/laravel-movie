@extends('layoutsfront.template')
@section('movie.edit')
<div class="mb-3">
    <form  action="{{ route('movie.update',$movie->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $movie->name }}" required>
            <label for="catId" class="form-label">categories</label>
            <select class="form-select" aria-label="Default select example" name="catId">
                @foreach ($categories as $category)
                <option  value={{$category->id}} @if($category->id == $movie->catId) selected @endif>{{$category->name}}</option>
                @endforeach
              </select>
            <label for="trailer" class="form-label">trailer</label>
            <input type="text" name="trailer" value="{{ $movie->trailer }}">
            <label for="image" class="form-label">image</label>
            <input type="file" name="image" >
        <button type="submit" class="btn btn-primary">Add movie</button>
    </form>
</div>
@endsection