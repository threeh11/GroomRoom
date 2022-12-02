<?php

namespace App\Actions;

use App\Models\Aplication;
use App\Models\Category;
use App\Models\Pet;

class GetDataAplicationsAction
{
    public function handle()
    {
        $data = [
            'pets' => Pet::all()->count() > 0 ? Pet::all() : NULL,
            'aplications' => Aplication::all()->count() > 0 ? Aplication::paginate(10) : NULL,
            'categories' => Category::all()->count() > 0 ? Category::all() : NULL,
        ];

        return $data;
    }
}