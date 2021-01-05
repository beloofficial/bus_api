<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRouteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bus_id'=>'required|integer',
            'from_place'=>'required|integer',
            'to_place'=>'required|integer',
            'min_price'=>'required|integer',
            'max_price'=>'required|integer',
            'stops'=>'array',
            'stops.*.time'=>'integer'
        ];
    }
}
