<?php

namespace App\Http\Controllers;

use App\Models\Aplication;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function allAplications(Request $request)
    {
        $categories = Category::all();
        $aplications = Aplication::all();
        return view('allaplication', compact('categories', 'aplications'));
    }

    public function profile()
    {
        return view('profile');
    }
}