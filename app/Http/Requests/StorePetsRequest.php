<?php

namespace App\Http\Requests;

use App\Rules\DateRule;
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
            'alias' => ['required', 'max:20', 'min:2', 'alpha'],
            'type' => ['required', 'max:20', 'min:2', 'alpha'],
            'date' => ['required', new DateRule()],
            'race' => ['required', 'max:20', 'min:2', 'alpha'],
        ];
    }
}
