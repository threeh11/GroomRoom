<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'alias' => ['required', 'max:20', 'min:2'],
            'type' => ['required', 'max:20', 'min:2'],
            'date' => ['required'],
            'race' => ['required', 'max:20', 'min:2'],
        ];
    }
}
