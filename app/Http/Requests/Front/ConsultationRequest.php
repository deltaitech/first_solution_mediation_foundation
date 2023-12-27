<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:200',
            'email' => 'required|email',
            'service_id' => 'required|exists:services,id',
            'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:30',
            'message' => 'required|min:2|max:500',

        ];
    }
}
