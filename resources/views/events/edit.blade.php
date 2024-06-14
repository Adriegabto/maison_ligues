@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>
    <form action="{{ route('events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ $event->title }}" required>
        
        <label for="description">Description</label>
        <textarea id="description" name="description" required>{{ $event->description }}</textarea>
        
        <label for="event_date">Event Date</label>
        <input type="datetime-local" id="event_date" name="event_date" value="{{ $event->event_date->format('Y-m-d\TH:i') }}" required>
        
        <button type="submit">Update Event</button>
    </form>
@endsection
