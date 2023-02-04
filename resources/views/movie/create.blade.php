@extends('layoutsfront.template')
@section('movieCreate')
<div class="container">
<div class="mb-3">
  <form  action="{{ route('movie.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
           <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name movie" required >
        </div>
          <div class="mb-3">
             <label for="catId" class="form-label">categories</label>
            <select class="form-select" aria-label="Default select example" name="catId">
                @foreach ($categories as $category)
                <option  value={{$category->id}}>{{$category->name}}</option>
                @endforeach
              </select>
          </div>
           <div class="mb-3">
            <label for="trailer" class="form-label">trailer</label>
            <input type="text" name="trailer">
           </div>
            <div class="mb-3">
              <label for="image" class="form-label" >image</label>
            <input type="file" name="image" >
            </div>
            
        <button type="submit" class="btn btn-primary">Add movie</button>
    </form>
</div>
    
</div>
@endsection