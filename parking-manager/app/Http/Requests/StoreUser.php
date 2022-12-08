<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|between:2,50',
            'lastname' => 'required|between:2,50',
            'email' => 'required|email',            
        ];
    }

    public function messages()
    {
        return [
            'required'=> 'The :attribute is required.',
            'between'=> 'The :attribute must be :min/:max characters.',
            'email' => 'Invalid email.'
        ];
    }
}
