<?php

namespace App\Actions;

use App\Models\Pet;

class DeletePetAction
{
    public function handle(int $id)
    {
        Pet::destroy($id);
    }
}