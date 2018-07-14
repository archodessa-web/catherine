<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreScheduleItemRequest;
use App\ScheduleItem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Ramsey\Uuid\Exception\UnsupportedOperationException;

class ScheduleItemController extends Controller
{

    public function index() {
        $scheduleItems = ScheduleItem::agenda();
        $calendar = Calendar::addEvents($scheduleItems)
            ->setOptions([
                'locale' => App::getLocale(),
                'defaultView' => 'agendaWeek',
                'themeSystem' => 'bootstrap4',
                'scrollTime' => '09:00',
                'nowIndicator' => 'true',
                'timeFormat' => 'H:mm',
//                'slotDuration' => '01:00:00',
                'allDaySlot' => false,
            ])->setCallbacks([
                'dayClick' => 'function(date, jsEvent, view) {console.log(date, jsEvent, view);}'
            ]);
        return view('schedule_items.index', compact('scheduleItems', 'calendar'));
    }

    public function show(ScheduleItem $scheduleItem) {
        return view('schedule_items.show', compact('scheduleItem'));
    }

    public function edit(ScheduleItem $scheduleItem) {
        return view('schedule_items.edit', compact('scheduleItem'));
    }

    public function create(Event $event = null) {
        if (!$event) {
            throw new UnsupportedOperationException;
        }
        return view('schedule_items.create', compact('event'));
    }

    public function store(StoreScheduleItemRequest $request) {
        print_r($request->all());
        if (! $request->validated()) {
            //throw exception
        }
        $scheduleItem = new ScheduleItem([
            'event_date' => $request->eventDate(),
            'start_time' => $request->startTime(),
            'end_time' => $request->endTime(),
            'attendant_limit' => $request->attendantLimit(),
            'early_price' => $request->earlyPrice(),
            'regular_price' => $request->regularPrice(),
            'event_id' => $request->event()->id
        ]);

        $scheduleItem->save();
        return Redirect::route('events.show', $request->event()->id);
    }
}
