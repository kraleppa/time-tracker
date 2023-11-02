@extends('layouts.master')

@section('content')
    <form action="/categories" method="POST" class="w-75">
        @csrf
        <div class="mt-3">
            <label for="name-input" class="form-label">Name</label>
            <input id="name-input"  class="form-control" type="text" name="name">
        </div>

        <div class="mt-3 w-25">
            <label for="color-input" class="form-label">Color</label>
            <input id="color-input"  class="form-control" type="color" name="color">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button> 
    </form>
@endsection
