@extends('layouts.master')

@section('content')
    
    @foreach ($events as $event)
    <div class="row">
        <!-- timeline item 1 left dot -->
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
        <!-- timeline item 1 event content -->
        <div class="col py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-end text-muted">From {{ $event->start_date }} to {{ $event->end_date }} {{ $event->category->name }}</div>
                    <h4 class="card-title">{{ $event->name }}</h4>
                    <p>{{ $event->description }}</p>
                </div>
            </div>
        </div>
    </div>
        
    @endforeach 

@endsection