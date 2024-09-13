@extends('layouts.app')

@section('title', 'Event List')

@section('content')
<h1>Upcoming Events</h1>
<div class="row">
    @foreach($events as $event)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $event['name'] }}</h5>
                    <p class="card-text">Date: {{ $event['date'] }}</p>
                    <p class="card-text">Location: {{ $event['location'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
