@extends('layoutsfront.template')
@section('category.edit')
<div class="container">
    <form  action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
             <label for="name" class="form-label" >Name</label>
            <input type="text" class="form-control" name="name" value="{{ $category->name }}"  required>
        </div>
           
        
        <button type="submit" class="btn btn-primary">Add category</button>
    </form>
</div>
@endsection