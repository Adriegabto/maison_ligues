<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('clients_id', Auth::id())->get();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'event_date' => 'required|date',
        ]);

        Event::create([
            'clients_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => $request->event_date,
        ]);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function edit(Event $event)
    {
        if ($event->user_id != Auth::id()) {
            return redirect()->route('events.index')->with('error', 'Unauthorized access.');
        }

        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        if ($event->user_id != Auth::id()) {
            return redirect()->route('events.index')->with('error', 'Unauthorized access.');
        }

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'event_date' => 'required|date',
        ]);

        $event->update([
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => $request->event_date,
        ]);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        if ($event->user_id != Auth::id()) {
            return redirect()->route('events.index')->with('error', 'Unauthorized access.');
        }

        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
