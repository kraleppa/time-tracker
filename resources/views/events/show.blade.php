@extends('layouts.master')

@section('content')
    
    <div class="row">
        <div class="col">
            <h2>{{ $event->name }}</h2>
            <div class="mt-2">{{ date_format(date_create($event->start_date), 'j F Y') }} - {{ date_format(date_create($event->end_date), 'j F Y') }}</div>
            @if ($event->category !== null )
                <div class="d-flex align-items-center gap-2 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="{{ $event->category->color }}" class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8"/>
                    </svg>
                    <span>{{ $event->category->name }}</span>
                </div>
            @endif
            <div class="mt-4 d-flex gap-2">
                @if (Auth::check())
                    <a href="/events/{{ $event->id }}/edit" class="btn btn-outline-warning">Edit</a>
                    <form action="/events/{{ $event->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="col">
            <img src="{{ $event->image_url }}" class="img-fluid">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h3>Description</h3>
            {{ $event->description }}
        </div>
    </div>

@endsection