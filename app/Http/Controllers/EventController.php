<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function indexPublic()
    {
        $events = Event::orderBy('event_date', 'asc')->get();
        return view('event', compact('events'));
    }

    public function index()
    {
        $events = Event::all();
        return view('layouts.event.index', compact('events'));
    }

    public function create()
    {
        return view('layouts.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'event_date' => 'required|date',
            'description' => 'nullable'
        ]);

        Event::create($request->all());

        return redirect()->route('event-manage.index')->with('success', 'Event created successfully.');
    }

    public function edit(Event $event_manage)
    {
        $event = $event_manage;
        return view('layouts.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event_manage)
    {
        $request->validate([
            'name' => 'required',
            'event_date' => 'required|date',
            'description' => 'nullable'
        ]);

        $event_manage->update($request->all());

        return redirect()->route('event-manage.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event_manage)
    {
        $event_manage->delete();
        return redirect()->route('event-manage.index')->with('success', 'Event deleted successfully.');
    }
}
