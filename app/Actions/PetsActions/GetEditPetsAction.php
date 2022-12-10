<?php

namespace App\Actions\PetsActions;

use App\Models\Pet;

class GetEditPetsAction
{
    public function handle(int $id)
    {
        $data = [
            'pet' => Pet::find($id),
        ];

        return $data;
    }
}