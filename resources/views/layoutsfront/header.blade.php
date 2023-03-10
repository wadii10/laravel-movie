<div class="headerr">

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: aliceblue">Movie App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('movie.index')}}">Home</a>
          </li>
          @foreach($categories as $category)
          <li class="nav-item">
            <a class="nav-link" href="{{route('site.movies',$category->id)}}">{{$category->name}}</a>
          </li>
          @endforeach
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Gestion
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('category.index')}}">Categories</a></li>
                    <li><a class="dropdown-item" href="{{route('category.create')}}">Create Category</a></li>
                    <li><a class="dropdown-item" href="{{route('allMovies')}}">Movies</a></li>
                    <li><a class="dropdown-item" href="{{route('movie.create')}}">Create Movie</a></li>

                </ul>
            </li>
            
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
    </div>
</div>
</nav>

</div>