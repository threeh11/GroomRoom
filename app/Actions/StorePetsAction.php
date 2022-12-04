<?php

namespace App\Actions;

use App\Http\Requests\StorePetsRequest;
use App\Models\Pet;

class StorePetsAction
{
    public function handle(StorePetsRequest $request)
    {
        $male = '';
        if ($request->maleM == 'on')
            $male = 'Мужской';
        else if ($request->maleW == 'on')
            $male = 'Женский';

        Pet::create([
            'alias' => $request->alias,
            'type' => $request->type,
            'male' => $male,
            'dateBirthdDay' => $request->date,
            'race' => $request->race,
            'published' => false,
        ]);

    }
}