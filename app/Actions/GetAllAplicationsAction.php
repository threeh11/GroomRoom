<?php

namespace App\Actions;

use App\Models\Aplication;
use App\Models\Category;
use Illuminate\Http\Request;

class GetAllAplicationsAction
{
    public function handle(Request $request)
    {
        $idCategory = $request->category == "Все категории" ? NULL : $request->category ;
        $categories = Category::all();

        if($idCategory != NULL)
        {
            $aplications = Aplication::where('type', Category::getName($idCategory))->get();
        }
        else
        {
            if (Aplication::all()->count() > 0)
                $aplications = Aplication::all();
            else
                $aplications = NULL;
        }
        $data = [
            'categories' => $categories,
            'aplications' => $aplications,
            'selectedAll' => $request->category == "Все категории" ? true : false,
        ];

        return $data;
    }
}