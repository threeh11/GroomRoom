<?php

namespace App\Actions;

use App\Models\Aplication;
use App\Models\Category;
use App\Models\Pet;
use Illuminate\Http\Request;

class GetDataAplicationsAction
{
    public function handle(Request $request)
    {
        $data = [
            'pets' => Pet::all()->count() > 0 ? Pet::all() : NULL,
            'aplications' => Aplication::all()->count() > 0 ? Aplication::paginate($request->count) : NULL,
            'categories' => Category::all()->count() > 0 ? Category::all() : NULL,
            'page' => $request->page,
            'countAplications' => Aplication::all()->count(),
            'countElPage' => $request->count,
        ];

        return $data;
    }
}