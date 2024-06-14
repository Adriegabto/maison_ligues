@extends('layouts.app')

@section('content')
    <h1>Create Event</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>
        
        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea>
        
        <label for="event_date">Event Date</label>
        <input type="datetime-local" id="event_date" name="event_date" required>
        
        <button type="submit">Create Event</button>
    </form>
@endsection
