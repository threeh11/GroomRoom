<?php

namespace App\Http\Controllers;

use App\Actions\GetPetsAction;
use App\Actions\StorePetsAction;

use App\Http\Requests\StorePetsRequest;

class ProfileController extends Controller
{
    public function myPet(GetPetsAction $getPets)
    {
        return view('profile.mypet', $getPets->handle());
    }

    public function myApplications()
    {
        return view('profile.myaplications');
    }

    public function addPet(StorePetsRequest $request, StorePetsAction $storePets)
    {
        $pet = $storePets->handle($request);
        return redirect()->route('profile');
    }
}
