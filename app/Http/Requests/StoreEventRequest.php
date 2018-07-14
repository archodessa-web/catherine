<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return true;
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'start_time' => 'before_or_equal:end_time',
            'end_time' => 'after_or_equal:start_time',
            'attendant_amount' => 'gte0'
        ];
    }

    public function name() {
        return $this->get('name');
    }

    public function description() {
        return $this->get('description');
    }

    public function earlyPrice() {
        return $this->get('early_price');
    }

    public function regularPrice() {
        return $this->get('regular_price');
    }

    public function attendantAmount() {
        return $this->get('attendant_amount');
    }
}
