<?php

namespace App\Http\Controllers;

use App\Event;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function create(Request $request) {
        $eventId = $request->get('event_id');

        if (! $eventId) {
            //ex
        }

        $event = Event::query()->findOrFail($eventId);

        return view('orders.create', compact('event'));
    }
}
