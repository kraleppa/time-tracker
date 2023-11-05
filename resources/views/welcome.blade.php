@extends('layouts.master')

@section('content')

    <h1 class="mt-4">
        Welcome to Time Tracker!
    </h1>

    <div class="d-flex align-items-center justify-content-between p-4">
        <div class="d-flex flex-column gap-4">
            <div>            
                <h4>We love helping you thrive!</h4>
                Simplify Your Life. Manage events like a pro!
            </div>
            <a href="/events" class="btn btn-primary w-75">See events</a>

        </div>

        <img src="{{ asset('img/time.png') }}">

    </div>

@endsection