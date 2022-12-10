<?php

namespace App\Actions\AplicationsActions;

use App\Models\Aplication;
use App\Models\Category;

use Illuminate\Http\Request;

class GetAllAplicationsAction
{
    public function handle(Request $request)
    {
        $categories = Category::all();
        foreach($categories as $category)
        {
            if ($category->id === (int)$request->category)
            {
                $aplications = Aplication::where('type', Category::getName($request->category))->get();

                $data = [
                    'categories' => $categories,
                    'selectedCategory' => (int)$request->category,
                    'aplications' => $aplications,
                    'selectedAll' => NULL,
                ];

                return $data;
            }
        }
        if ($request->category === 'Все категории')
        {
            if (Aplication::all()->count() > 0)
                $aplications = Aplication::all();
            else
                $aplications = NULL;
            $data = [
                'categories' => $categories,
                'aplications' => $aplications,
                'selectedCategory' => (int)$request->category,
                'selectedAll' => $request->category === "Все категории" ? true : false,
            ];
            return $data;
        }
        return NULL;
    }
}