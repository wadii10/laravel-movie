@extends('layouts.app')
<div class="container">
    <form  action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name Category" required>
        
        <button type="submit" class="btn btn-primary">Add category</button>
    </form>
</div>
