<?php

namespace App\Actions;

use App\Models\Pet;

class GetPetsAction
{
    public function handle()
    {
        $data = [
            'pets' => Pet::all()->count() > 0 ? Pet::all() : NULL,
        ];
        return $data;
    }
}