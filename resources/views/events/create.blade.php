@extends('layouts.master')

@section('content')
    <form action="/events" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="date" name="start_date">
        <input type="date" name="end_date">
        <input type="text" name="image_url">
        <select class="form-select" aria-label="Category" name="category_id">
            <option selected>Open this select menu</option>
            @foreach ($categories as $category)
                <option value={{ $category->id }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Add</button> 
    </form>
@endsection
