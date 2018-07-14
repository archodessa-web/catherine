<?php

namespace App\Http\Requests;

use App\Event;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Jenssegers\Date\Date;

class StoreScheduleItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
//        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'title' => 'required',
            'event_date' => 'after_or_equal:today',
            'start_time' => 'nullable|sometimes|before:end_time',
            'end_time' => 'nullable|sometimes|after:start_time',
            'attendant_limit' => 'nullable|integer|between:0,255',
            'early_price' => 'nullable|numeric|between:0,9999.99|regex:/^\d*(\.\d{1,2})?$/',
            'regular_price' => 'nullable|numeric|between:0,9999.99|regex:/^\d*(\.\d{1,2})?$/',
        ];
    }

    public function eventDate() : string {
        return $this->get('event_date');
    }

    public function startTime() : string {
        return $this->get('start_time');
    }

    public function endTime() : string {
        return $this->get('end_time');
    }

    public function attendantLimit() : int {
        return (int) $this->get('attendant_limit');
    }

    public function earlyPrice() : float {
        return (float) $this->get('early_price');
    }

    public function regularPrice() : float {
        return (float) $this->get('regular_price');
    }

    public function event() : Event {
        return Event::findOrFail($this->get('event_id'));
    }
}
