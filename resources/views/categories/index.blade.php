@extends('layouts.master')

@section('content')

    @foreach ($categories as $category)
        <ul class="list-group w-25">
            <li class="list-group-item d-flex align-items-center gap-2 mb-1">
                <span>{{ $category->name }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="{{ $category->color }}" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8"/>
                </svg>
            </li>
        </ul>
    @endforeach

@endsection
