@extends('layouts.master')

@section('content')
    <form action="/categories" method="POST" class="w-75">
        @csrf
        <div class="mt-3">
            <label for="name-input" class="form-label">Name <span class="text-danger">*</span></label>
            <input id="name-input"  class="form-control" type="text" name="name" required>
        </div>

        <div class="mt-3 w-25">
            <label for="color-input" class="form-label">Color <span class="text-danger">*</span></label>
            <input id="color-input"  class="form-control" type="color" name="color" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button> 
    </form>
@endsection
