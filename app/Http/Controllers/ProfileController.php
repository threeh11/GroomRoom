<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function myPet()
    {
        return view('profile.mypet');
    }

    public function myApplications()
    {
        return view('profile.myaplications');
    }
}
