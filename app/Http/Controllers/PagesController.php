<?php

namespace App\Http\Controllers;

use App\Actions\GetAllAplicationsAction;
use App\Actions\GetAplicationAction;
use App\Models\Aplication;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function allAplications(Request $request, GetAllAplicationsAction $getAllAplications)
    {
        return view('allaplications', $getAllAplications->handle($request));
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