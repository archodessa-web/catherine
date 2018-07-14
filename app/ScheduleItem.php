<?php

namespace App;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Jenssegers\Date\Date;

class ScheduleItem extends Model implements \MaddHatter\LaravelFullcalendar\Event
{
    protected $fillable = [
        'event_date',
        'start_time',
        'end_time',
        'attendant_limit',
        'early_price',
        'regular_price',
        'event_id'
    ];

    public static function agenda() {
        return ScheduleItem::query()
            ->where('event_date', '>=', Carbon::now()->startOfDay())
            ->orderBy('event_date', 'ASC')
            ->get();
    }

    public function date() {
        return Date::parse($this->event_date);
    }

    public function startTime() {
        return Date::parse($this->event_date . ' ' . $this->start_time);
    }

    public function endTime() {
        return Date::parse($this->event_date . ' ' . $this->end_time);
    }

    public function event() {
        return $this->belongsTo('App\Event');
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->event->name;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return false;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->startTime();
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->endTime();
    }

    public function getEventOptions() {
        $colors = ['#70a1ff', '#5352ed', '#ff6b81', '#ff7f50', '#2ed573', '#747d8c', '#ff4757'];

        return [
            'url' => URL::route('schedule_items.edit', $this->id),
            'backgroundColor' => $colors[array_rand($colors)]
        ];
    }
}
