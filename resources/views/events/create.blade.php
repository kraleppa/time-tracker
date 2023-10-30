@extends('layouts.master')

@section('content')
    <form action="/events" method="POST">
        @csrf
       <input type="text" name="name">
       <input type="text" name="description">
       <input type="date" name="start_date">
       <input type="date" name="end_date">
       <input type="text" name="image_url">

       <button type="submit">Add</button> 
    </form>
@endsection
