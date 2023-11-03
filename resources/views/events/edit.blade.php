@extends('layouts.master')

@section('content')
    <form action="/events/{{ $event->id }}" method="POST" class="w-75">
        @csrf
        @method('PUT')
        <div class="mt-3">
            <label for="name-input" class="form-label">Name</label>
            <input id="name-input"  class="form-control" type="text" name="name" value="{{ $event->name }}">
        </div>

        <div class="mt-3">
            <label for="category-input" class="form-label">Category</label>
            <select id="category-input" class="form-select" aria-label="Category" name="category_id" 
                value="{{ optional($event->category)->id }}">
                <option @if ($event->category === null) selected="selected" @endif value={{null}}>
                    No category
                </option>
                @foreach ($categories as $category)
                    <option value={{ $category->id }} 
                        @if ($category->id === optional($event->category)->id)
                            selected="selected"
                        @endif
                        >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-3">
            <label for="description-input" class="form-label">Description</label>
            <textarea id="description-input" class="form-control" rows="3" name="description" >{{ $event->description }}</textarea>
        </div>

        <div class="mt-3">
            <label for="start-date-input" class="form-label">Start date</label>
            <input id="start-date-input"  class="form-control" type="date" name="start_date" value={{ $event->start_date }}>
        </div>

        <div class="mt-3">
            <label for="end-date-input" class="form-label">End date</label>
            <input id="end-date-input"  class="form-control" type="date" name="end_date" value={{ $event->end_date }}>
        </div>

        <div class="mt-3">
            <label for="image-url-input" class="form-label">Image url</label>
            <input id="image-url-input"  class="form-control" type="text" name="image_url" value={{ $event->image_url }}>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Update</button> 
    </form>
@endsection