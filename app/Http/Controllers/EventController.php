<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function show(Event $event) {
        return view('events.show', compact('event'));
    }

    public function create() {
        return view('events.create');
    }

    public function edit(Event $event) {
        return view('events.edit', compact('event'));
    }

    public function store(StoreEventRequest $request) {
        $request->validated();
        $event = new Event([
            'name' => $request->name(),
            'description' => $request->description(),
            'early_price' => $request->earlyPrice(),
            'regular_price' => $request->regularPrice(),
            'attendant_amount' => $request->attendantAmount()
        ]);
        $event->save();
        return Redirect::route('events.index');
    }

    public function update(StoreEventRequest $request, Event $event) {
        $request->validated();
        $event->update($request->all());
        return Redirect::route('events.index');
    }
}
