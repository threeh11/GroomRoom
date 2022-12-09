<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/my_pet', [ProfileController::class , 'index'])->name('myPet.index');
Route::post('/profile/my_pet', [ProfileController::class, 'store'])->name('myPet.store');
Route::get('/profile/my_pet/{id}/edit', [ProfileController::class, 'edit'])->name('myPet.edit')->where('id', '[0-9]+');
Route::put('/profile/my_pet/{id}', [ProfileController::class, 'update'])->name('myPet.update')->where('id', '[0-9]+');
Route::delete('/profile/my_pet/{id}', [ProfileController::class, 'destroy'])->name('myPet.destroy')->where('id', '[0-9]+');

Route::get('/profile/my_aplications', [ProfileController::class , 'myAplications'])->name('myAplications');
Route::post('/profile/my_aplications/add_aplication', [ProfileController::class , 'addAplication'])->name('addAplication');
