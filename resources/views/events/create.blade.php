@extends('layouts.master')

@section('content')
    <form action="/events" method="POST" class="w-75">
        @csrf
        <div class="mt-3">
            <label for="name-input" class="form-label">Name <span class="text-danger">*</span></label>
            <input id="name-input"  class="form-control" type="text" name="name" required>
        </div>

        <div class="mt-3">
            <label for="category-input" class="form-label">Category</label>
            <select id="category-input" class="form-select" aria-label="Category" name="category_id">
                <option selected value={{null}}>No category</option>
                @foreach ($categories as $category)
                    <option value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-3">
            <label for="description-input" class="form-label">Description</label>
            <textarea id="description-input" class="form-control" rows="3" name="description"></textarea>
        </div>

        <div class="mt-3">
            <label for="start-date-input" class="form-label">Start date <span class="text-danger">*</span></label>
            <input id="start-date-input"  class="form-control" type="date" name="start_date" required>
        </div>

        <div class="mt-3">
            <label for="end-date-input" class="form-label">End date <span class="text-danger">*</span></label>
            <input id="end-date-input"  class="form-control" type="date" name="end_date" required>
        </div>

        <div class="mt-3">
            <label for="image-url-input" class="form-label">Image url</label>
            <input id="image-url-input"  class="form-control" type="text" name="image_url">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add</button> 
    </form>
@endsection
