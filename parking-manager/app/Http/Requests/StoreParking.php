<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParking extends FormRequest
{
    public function rules()
    {
        return [
            "plate" => "required|regex:'[0-9]{4}[A-Z/a-z]{3}'",
            "brand" => "required|between:3,15",
            "model" => "required|between:1,15",
            "user" => "required",
        ];
    }

    public function messages()
    {
        return [ 
            'required'=> 'The :attribute is required.',
            'between'=> 'The :attribute must be :min/:max characters.',
            'plate.regex'=> 'The plate must be 4 numbers and 3 letters.',
            'user.required'=> 'A user must be selected (or add a new one!).',
        ];
    }
}
