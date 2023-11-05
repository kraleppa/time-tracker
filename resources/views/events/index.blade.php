@extends('layouts.master')

@section('content')
    
    @foreach ($events as $event)
        <a href="/events/{{ $event->id }}" class="row nostyle ">
            <div class="col-auto text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                    @if (!$loop->first)
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    @endif
                </div>
                <h5 class="m-2">
                    <span class="badge rounded-pill bg-light border">&nbsp;</span>
                </h5>
                <div class="row h-50">
                    @if (!$loop->last)
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    @endif
                </div>
            </div>
            <div class="col py-2">
                <div class="card w-50">
                    <div class="card-body">
                        <h4 class="card-title">{{ $event->name }}</h4>
                        <div class="mt-2">{{ date_format(date_create($event->start_date), 'j F Y') }} - {{ date_format(date_create($event->end_date), 'j F Y') }}</div>
                        @if ($event->category !== null )
                        <div class="d-flex align-items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="{{ $event->category->color }}" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8"/>
                            </svg>
                            <span>{{ $event->category->name }}</span>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </a>
    @endforeach 

@endsection