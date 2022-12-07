<?php

namespace App\Actions\AplicationsActions;

use App\Http\Requests\StoreAplicationsRequest;
use App\Models\Aplication;
use App\Models\Category;

class StoreAplicationAction
{
    public function handle(StoreAplicationsRequest $request)
    {
        Aplication::create([
            'pet_id' => $request->pet,
            'type' => Category::getName($request->category),
            'place' => $request->place == 'home' ? 'На дому' : 'В салоне',
            'date' => $request->date,
            'time' => $request->time,
            'active' => true,
        ]);
    }
}