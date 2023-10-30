@extends('layouts.master')

@section('content')
    
    @foreach ($events as $event)
        <div>{{ $event->name }}</div>
    @endforeach 

    <button type="button" class="btn btn-primary">Primary</button>




@endsection