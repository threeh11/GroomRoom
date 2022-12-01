<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/aplications', [PagesController::class, 'Applications'])->name('Applications');
Route::get('/all_applications', [PagesController::class, 'allAplications'])->name('allAplications');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');

Route::get('/profile/my_pet', [ProfileController::class , 'myPet'])->name('myPet');
Route::post('/profile/my_pet/add_pet', [ProfileController::class, 'addPet'])->name('addPet');
Route::get('/profile/my_applications', [ProfileController::class , 'myApplications'])->name('myApplications');