<?php

namespace App\Http\Controllers;

use App\Actions\AplicationsActions\GetAllAplicationsAction;
use App\Actions\AplicationsActions\GetAplicationAction;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function allAplications(Request $request, GetAllAplicationsAction $getAllAplications)
    {
        $data = $getAllAplications->handle($request);
        if ($data === NULL)
            return redirect()->route('allAplications', ['category' => 'Все категории']);
        else
            return view('allaplications', $data);
    }

    public function profile()
    {
        return view('profile');
    }

    public function aplicationPage(int $id, GetAplicationAction $getAplication)
    {
        return view('aplicationPage', $getAplication->handle($id));
    }
}