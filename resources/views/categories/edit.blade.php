@extends('layouts.master')

@section('content')
    <form action="/categories/{{ $category->id }}" method="POST" class="w-75">
        @csrf
        @method('PUT')
        <div class="mt-3">
            <label for="name-input" class="form-label">Name</label>
            <input id="name-input"  class="form-control" type="text" name="name" value="{{ $category->name }}">
        </div>

        <div class="mt-3 w-25">
            <label for="color-input" class="form-label">Color</label>
            <input id="color-input"  class="form-control" type="color" name="color" value="{{ $category->color }}">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button> 
    </form>
@endsection
