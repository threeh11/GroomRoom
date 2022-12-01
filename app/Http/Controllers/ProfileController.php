<?php

namespace App\Http\Controllers;

use App\Actions\GetEditPetsAction;
use App\Actions\GetPetsAction;
use App\Actions\StorePetsAction;
use App\Actions\UpdatePetsAction;

use App\Http\Requests\StorePetsRequest;
use Illuminate\Http\Request;

use App\Models\Pet;

class ProfileController extends Controller
{
    public function myPet(Request $request, GetPetsAction $getPets)
    {
        return view('profile.mypet', $getPets->handle($request));
    }

    public function myApplications()
    {
        return view('profile.myaplications');
    }

    public function addPet(StorePetsRequest $request, StorePetsAction $storePets)
    {
        $storePets->handle($request);
        return redirect()->route('myPet');
    }

    public function deletePet(int $id)
    {
        Pet::destroy($id);
        return redirect()->route('myPet');
    }

    public function editPet(int $id, GetEditPetsAction $getEditPets)
    {
        return view('profile.editpet', $getEditPets->handle($id));
    }

    public function storePet(int $id, StorePetsRequest $request, 
                             UpdatePetsAction $updatePets)
    {
        $updatePets->handle($id, $request);
        return redirect()->route('myPet');
    }
}
