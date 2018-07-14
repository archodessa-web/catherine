<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = [
        'name',
        'description',
        'early_price',
        'regular_price',
        'attendant_amount'
    ];

    public function name () : String {
        return $this->name;
    }

    public function scheduleItems () {
        return $this->hasMany('App\ScheduleItem');
    }
}
