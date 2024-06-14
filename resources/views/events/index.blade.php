@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    <nav>
    <ul>
        <li><a href="{{ route('events.index') }}">Events</a></li>
        <!-- Autres liens -->
    </ul>
</nav>

    <a href="{{ route('events.create') }}">Create Event</a>
    @foreach ($events as $event)
        <div>
            <h2>{{ $event->title }}</h2>
            <p>{{ $event->description }}</p>
            <p>{{ $event->event_date }}</p>
            <a href="{{ route('events.edit', $event) }}">Edit</a>
            <form action="{{ route('events.destroy', $event) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
