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
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>

                            <form action="{{ route('category.destroy', $category->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mr-1">Delete</button>
                                <a href="{{ route('category.edit', $category->id) }} "><button type="button"
                                        class="btn btn-primary">update</button></a>
                        </td>
                        </form>
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
