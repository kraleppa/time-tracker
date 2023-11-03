@extends('layouts.master')

@section('content')

    @foreach ($categories as $category)
        <ul class="list-group w-50">
            <li class="list-group-item mb-1">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="{{ $category->color }}" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/>
                        </svg>
                        <span>{{ $category->name }}</span>
                    </div>
                    <div>

                        <button type="button" class="btn btn-outline-warning">Edit</button>
                        <form action="/categories/{{ $category->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>

            </li>
        </ul>
    @endforeach

@endsection
