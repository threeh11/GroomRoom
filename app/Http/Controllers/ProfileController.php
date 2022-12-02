<?php

namespace App\Http\Controllers;

use App\Actions\GetDataAplicationsAction;
use App\Actions\GetEditPetsAction;
use App\Actions\GetPetsAction;
use App\Actions\StoreAplicationAction;
use App\Actions\StorePetsAction;
use App\Actions\UpdatePetsAction;
use App\Http\Requests\StoreAplicationsRequest;
use App\Http\Requests\StorePetsRequest;
use App\Models\Aplication;
use Illuminate\Http\Request;

use App\Models\Pet;

class ProfileController extends Controller
{
    public function myPet(GetPetsAction $getPets)
    {
        return view('profile.mypet', $getPets->handle());
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

    public function myApplications(GetDataAplicationsAction $getAplications)
    {
        return view('profile.myaplications', $getAplications->handle());
    }

    public function addAplication(StoreAplicationsRequest $request, 
                            StoreAplicationAction $storeAplication)
    {
        $storeAplication->handle($request);
        return redirect()->route('myApplications');
    }
}
