<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/profile/my_pet', [ProfileController::class , 'myPet'])->name('myPet');
Route::post('/profile/my_pet/add_pet', [ProfileController::class, 'addPet'])->name('addPet');
Route::post('/profile/my_pet/delete_pet/{id}', [ProfileController::class, 'deletePet'])->name('deletePet');
Route::get('/profile/my_pet/edit_pet/{id}', [ProfileController::class, 'editPet'])->name('editPet');
Route::post('/profile/my_pet/edit_pet/{id}', [ProfileController::class, 'storePet'])->name('storePet');

Route::get('/profile/my_aplications', [ProfileController::class , 'myAplications'])->name('myAplications');
Route::post('/profile/my_aplications/add_aplication', [ProfileController::class , 'addAplication'])->name('addAplication');
