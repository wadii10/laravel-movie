@extends('layoutsfront.template')
@section('category')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">category</th>
                    <th scope="col">trailer</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($movies as $movie)
                    <tr>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->image }}</td>

                        <td>
                                @foreach ($categories as $category)
                                    @if ($category->id == $movie->catId) {{ $category->name }} @endif
                                @endforeach
                            </td>

                        <td>{{ $movie->trailer }}</td>
                        <td>
                            <form action="{{ route('movie.destroy', $movie->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mr-1">Delete</button>
                                <a href="{{ route('movie.edit', $movie->id) }} "><button type="button"
                                        class="btn btn-primary">update</button></a>
                        </td>
                        </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">no catogory exist</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
