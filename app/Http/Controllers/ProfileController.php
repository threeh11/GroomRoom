<?php

namespace App\Http\Controllers;

use App\Actions\PetsActions\DeletePetAction;
use App\Actions\PetsActions\GetEditPetsAction;
use App\Actions\PetsActions\GetPetsAction;
use App\Actions\PetsActions\StorePetsAction;
use App\Actions\PetsActions\UpdatePetsAction;

use App\Actions\AplicationsActions\GetDataAplicationsAction;
use App\Actions\AplicationsActions\StoreAplicationAction;

use App\Http\Requests\StoreAplicationsRequest;
use App\Http\Requests\StorePetsRequest;

use Illuminate\Http\Request;

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

    public function deletePet(int $id, DeletePetAction $deletePet)
    {
        $deletePet->handle($id);
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

    public function myAplications(Request $request, GetDataAplicationsAction $getAplications)
    {
        return view('profile.myaplications', $getAplications->handle($request));
    }

    public function addAplication(StoreAplicationsRequest $request, 
                            StoreAplicationAction $storeAplication)
    {
        $storeAplication->handle($request);
        return redirect()->route('myAplications', ['page' => 1, 'count' => 10, 'active' => 1]);
    }
}
