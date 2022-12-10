<?php

namespace App\Actions\AplicationsActions;

use App\Models\Aplication;
use App\Models\Category;
use App\Models\Pet;

use Carbon\Carbon;

use Illuminate\Http\Request;

class GetDataAplicationsAction
{
    public function handle(Request $request)
    {
        $aplications = Aplication::all();
        if ($request->active === "1" && Aplication::all()->count() > 0)
            $aplications = Aplication::where('active', 1)->paginate($request->count);
        else if($request->active === "0" && Aplication::all()->count() > 0)
            $aplications = Aplication::where('active', 0)->paginate($request->count);
        else
            $aplications = Aplication::where('active', 1)->paginate($request->count);

        $data = [
            'pets' => Pet::all()->count() > 0 ? Pet::all() : NULL,
            'aplications' => $aplications,
            'categories' => Category::all()->count() > 0 ? Category::all() : NULL,
            'page' => $request->page,
            'countAplications' => Aplication::all()->count(),
            'countElPage' => $request->count,
            'dateEnd' => Carbon::now()->addDays(30)->format('Y-m-d'),
        ];

        return $data;
    }
}