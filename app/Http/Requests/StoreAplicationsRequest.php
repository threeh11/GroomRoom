<?php

namespace App\Http\Requests;

use App\Rules\DateRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAplicationsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pet' => ['required'],
            'category' => ['required'],
            'place' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
        ];
    }
}
