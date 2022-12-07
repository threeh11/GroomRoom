<?php

namespace App\Actions\PetsActions;

use App\Http\Requests\StorePetsRequest;
use App\Models\Pet;

class UpdatePetsAction
{
    public function handle(int $id, StorePetsRequest $request)
    {
        $male = '';
        if ($request->maleM == 'on')
            $male = 'Мужской';
        else if ($request->maleW == 'on')
            $male = 'Женский';

        Pet::find($id)->update([
            'alias' => $request->alias,
            'type' => $request->type,
            'male' => $male,
            'dateBirthdDay' => $request->date,
            'race' => $request->race,
            'published' => false,
        ]);
    }
}