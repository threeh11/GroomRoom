<?php

namespace App\Actions\PetsActions;

use App\Models\Pet;
use Carbon\Carbon;

class GetPetsAction
{
    public function handle()
    {
        $data = [
            'pets' => Pet::all()->count() > 0 ? Pet::all() : NULL,
            'dateEnd' => Carbon::now()->addDays(100)->format('Y-m-d'),
        ];

        return $data;
    }
}