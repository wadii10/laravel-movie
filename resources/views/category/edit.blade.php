@extends('layouts.app')
<div class="container">
    <form  action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $category->name }}"  required>
        
        <button type="submit" class="btn btn-primary">Add category</button>
    </form>
</div>