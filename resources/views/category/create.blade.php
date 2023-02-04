@extends('layoutsfront.template')

@section('category.create')
<div class="container">
    <form  action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label" >Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name Category" required>
        </div>
        <button type="submit" class="btn btn-primary">Add category</button>
    </form>
</div> 
@endsection
