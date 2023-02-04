<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('movie.index') }} ">Home</a>
          </li>
          @foreach($categories as $category)
          <li class="nav-item">
            <a class="nav-link" href="{{route('site.movies',$category->id)}}">{{$category->name}}</a>
          </li>
          @endforeach
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
@extends('layouts.app')
<div class="container">
    <form  action="{{ route('movie.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name movie" required>
            <label for="catId">categories</label>
            <select class="form-select" aria-label="Default select example" name="catId">
                @foreach ($categories as $category)
                <option  value={{$category->id}}>{{$category->name}}</option>
                @endforeach
              </select>
            <label for="trailer">trailer</label>
            <input type="text" name="trailer">
            <label for="image" >image</label>
            <input type="file" name="image" >
        <button type="submit" class="btn btn-primary">Add movie</button>
    </form>
</div>